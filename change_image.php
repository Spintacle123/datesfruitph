<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Retrieve category details, including the current image path, from the database
    $query = "SELECT * FROM categories WHERE id = '$id'";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        $currentImagePath = $row['cat_image'];
    } else {
        // Category not found
        die('Category not found.');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Handle the image upload and update the image path in the database
        $newImage = $_FILES['new_image'];

        // echo "<pre>";
        //     // print_r($_FILES);
        //     print_r($newImage);
        //     exit;
        
        // Check if a new image file was uploaded
        if (!empty($newImage['name'])) {
            // Handle image upload
            $uploadDir = 'images/';
            $uploadedFileName = $newImage['name'];
            $uploadedTempPath = $newImage['tmp_name'];

            // Image extension validation
            $validImageExtensions = ['jpg', 'jpeg', 'png'];
            $imageExtension = strtolower(pathinfo($uploadedFileName, PATHINFO_EXTENSION));

            if (!in_array($imageExtension, $validImageExtensions)) {
                // Invalid image format
                die('Invalid image format. Allowed formats: jpg, jpeg, png.');
            }

            // Rename the uploaded file if needed
            $uploadedFileName = preg_replace("/[^a-zA-Z0-9.]/", "", $uploadedFileName);
            if (strlen($uploadedFileName) > 25) {
                $uploadedFileName = substr($uploadedFileName, 0, 25) . '.' . $imageExtension;
            }

            $imagePath = $uploadDir . $uploadedFileName;

            if (move_uploaded_file($uploadedTempPath, $imagePath)) {
                // Update the image path in the database
                $updateQuery = "UPDATE categories SET cat_image = '$imagePath' WHERE id = '$id'";
                if (mysqli_query($conn, $updateQuery)) {
                    // Image updated successfully
                    header('Location: ad_categories.php');
                    exit();
                } else {
                    // Database update failed
                    die('Failed to update the image path in the database.');
                }
            } else {
                // Image upload failed
                die('Failed to upload the image.');
            }
        } else {
            // No new image file provided
            die('No new image file provided.');
        }

        // After updating the image, redirect back to the category list page
        header('Location: ad_categories.php');
        exit();
    }
} else {
    // Invalid request
    die('Invalid request.');
}
?>

<body>
    <!-- ======= Header ======= -->
    <?php include 'ad_header.php'; ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include 'ad_sidebar.php'; ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <section class="section">
            <h1>Change Category Image</h1>

            <form action="change_image.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <input type="file" name="new_image" accept="image/*" required>

                <input type="submit" name="upload_image" value="Upload Image" class="btn btn-primary">

            </form>
        </section>
    </main>
</body>

</html>
