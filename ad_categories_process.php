<?php
	session_start();
	include 'config.php';

	$update=false;
	$id="";
	$cat_name="";
	$cat_image="";

	if(isset($_POST['add'])){
			$cat_name=$_POST['cat_name'];

			// Handle image upload
			$uploadDir = 'images/';
			$uploadedFileName = $_FILES['cat_image']['name'];
			$uploadedTempPath = $_FILES['cat_image']['tmp_name'];

			// Image extension validation
			$validImageExtensions = ['jpg', 'jpeg', 'png'];
			$imageExtension = strtolower(pathinfo($uploadedFileName, PATHINFO_EXTENSION));

			if (!in_array($imageExtension, $validImageExtensions)) {
				// Invalid image format
				$_SESSION['response'] = "Invalid image format. Allowed formats: jpg, jpeg, png.";
				$_SESSION['res_type'] = "error";
			} else {
				// Rename the uploaded file if needed
				$uploadedFileName = preg_replace("/[^a-zA-Z0-9.]/", "", $uploadedFileName);
				if (strlen($uploadedFileName) > 25) {
					$uploadedFileName = substr($uploadedFileName, 0, 25) . '.' . $imageExtension;
				}

				$imagePath = $uploadDir . $uploadedFileName;

				if(move_uploaded_file($uploadedTempPath, $imagePath)){
					$query = 'INSERT INTO categories(`cat_name`, `cat_image`) VALUES (?, ?)';
					$stmt = $conn->prepare($query);
					$stmt->bind_param("ss", $cat_name, $imagePath);
					$stmt->execute();

					header('location:ad_categories.php');
					$_SESSION['response'] = "Successfully Inserted to the database!";
					$_SESSION['res_type'] = "success";	
				} else {
					// Image upload failed
					$_SESSION['response'] = "Failed to upload the image.";
					$_SESSION['res_type'] = "error";
				}
			}
	}
?>
