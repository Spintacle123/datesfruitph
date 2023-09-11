<?php
include 'config.php';
session_start();
$db = mysqli_connect('localhost', 'root', '', 'stc');

$update = false;
$id = '';
$class = '';
$name = '';
$price = '';
$prod_qntty = '';
$isfeatured = '';

$images = [];

$oldimage = "";
$oldimage1 = "";
$oldimage2 = "";
$oldimage3 = "";
$oldimage4 = "";
$code = '';
$description = '';
$ccode = '';

// add products
if (isset($_POST['add'])) {
	// $imageCount = count($_FILES['images']['name']);
	// for ($i = 0; $i < $imageCount; $i++) {
	// 	$images[$i] = $_FILES['images']['name'][$i];
	// 	$validImageExtension = ['jpg', 'jpeg', 'png'];
	// 	$imageExtension = explode('.', $images[$i]);
	// 	$imageExtension = strtolower(end($imageExtension));
	// }

    $image = $_FILES['image']['name'];
    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $image);
    $imageExtension = strtolower(end($imageExtension));

    if (!in_array($imageExtension, $validImageExtension)) {
        header('location:ad_addproducts.php');
        $_SESSION['response'] = 'Invalid Image File Extension!!, only accept .jpg, .jpeg, .png';
        $_SESSION['res_type'] = 'success';
    } else {
        $class = $_POST['class'];
        $name = $_POST['name'];
        $code = $_POST['code'];
        $prod_qntty = $_POST['prod_qntty'];
        $price = $_POST['price'];
        $isfeatured = $_POST['isfeatured'];
        $description = $_POST['description'];

		// for ($i = 0; $i < 4; $i++) {
		// 	$uploads[$i] = "images/" . $images[$i];
		// }

        $upload = 'images/' . $image;

        $sql_code = "SELECT * FROM products WHERE code='$code'";
        $res_code = mysqli_query($db, $sql_code);

        if (mysqli_num_rows($res_code) > 0) {
            header('location:ad_addproducts.php');
            $_SESSION['response'] = 'Sorry, product code is already taken! Please try again';
            $_SESSION['res_type'] = 'success';
        } else {
            $query = 'INSERT INTO products(class,name,code,prod_qntty,price,isfeatured,description,image)VALUES(?,?,?,?,?,?,?,?)';
            $stmt = $conn->prepare($query);
            $stmt->bind_param('sssisiss', $class, $name, $code, $prod_qntty, $price, $isfeatured, $description, $upload);
            $stmt->execute();
			for ($i = 0; $i < 4; $i++) {
				move_uploaded_file($_FILES['images']['tmp_name'][$i], $uploads[$i]);
			}
            move_uploaded_file($_FILES['image']['tmp_name'], $upload);

            header('location:ad_addproducts.php');
            $_SESSION['response'] = 'New Products Added Succesfully to Menu!';
            $_SESSION['res_type'] = 'success';
        }
    }
}

//edit products
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $query = 'SELECT * FROM products WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $class = $row['class'];
    $name = $row['name'];
    $code = $row['code'];
    $prod_qntty = $row['prod_qntty'];
    $price = $row['price'];
    // $capital=$row['capital'];
    $description = $row['description'];
    $oldimage = $row['image'];
    // $oldimage1 = $row['image1'];
	// $oldimage2 = $row['image2'];
	// $oldimage3 = $row['image3'];
	// $oldimage4 = $row['image4'];

    $update = true;
}

//update products
if (isset($_POST['update'])) {
    // $image = $_FILES['images']['name'];

    // $validImageExtension = ['jpg', 'jpeg', 'png'];
    // $imageExtension = explode('.', $image);
    // $imageExtension = strtolower(end($imageExtension));

    // if(!in_array($imageExtension, $validImageExtension)){
    // 	header('location:ad_addproducts.php');
    // 	$_SESSION['response']="Invalid Image File Extension!!, only accept .jpg, .jpeg, .png";
    // 	$_SESSION['res_type']="success";
    // }else{

    // $imageCount = count($_FILES['images']['name']);
    // //convert file name to lowercase
    // for ($i = 0; $i < $imageCount; $i++) {
    //     $images[$i] = $_FILES['images']['name'][$i];
    //     $validImageExtension = ['jpg', 'jpeg', 'png'];
    //     $imageExtension = explode('.', $images[$i]);
    //     $imageExtension = strtolower(end($imageExtension));
    // }

    //thumbnail picture
    //check if a new image was submitted
	if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {

        //convert file name to lowercase
		$image = $_FILES['image']['name'];
		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $image);
		$imageExtension = strtolower(end($imageExtension));

		$oldimage = "images/" . $image;
	} else {
        // if walang newly submitted na image, use the old image
		$oldimage = $_POST['oldimage'];

		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $oldimage);
		$imageExtension = strtolower(end($imageExtension));
	}

    //check kung valid yung img extension
    if (!in_array($imageExtension, $validImageExtension)) {
		header('location:ad_addgiftings.php');
		$_SESSION['response'] = "Invalid Image File Extension!!, only accept .jpg, .jpeg, .png";
		$_SESSION['res_type'] = "success";
	} else {

        //kuha ng ibang info from the submitted form
        $id = $_POST['id'];
        $class = $_POST['class'];
        $name = $_POST['name'];
        $code = $_POST['code'];
        $prod_qntty = $_POST['prod_qntty'];
        $price = $_POST['price'];
        // $capital=$_POST['capital'];
        $description = $_POST['description'];

        //new value of the image (either bago or luma)
        $newimage = $oldimage;

        

        //check if more than 1 yung submitted sa multiple image input
        // if (count($_FILES['images']['name']) > 1) {
		// 	// unlink($oldimage);
		// 	for ($i = 0; $i < 4; $i++) {
		// 		$newimages[$i] = "images/" . $images[$i];
        //         move_uploaded_file($_FILES['images']['tmp_name'][$i], $newimages[$i]);
		// 	}
		// } else {
		// 	for ($i = 0; $i < 4; $i++) {
        //         move_uploaded_file($_FILES['images']['tmp_name'][$i], $newimages[$i]);
		// 		$newimages[$i] = $_POST['oldimage' . $i + 1];
		// 	}
		// }

        
        echo "<pre>";
        // print_r($_FILES);
        print_r($class);
        exit;

		move_uploaded_file($_FILES['image']['tmp_name'], $newimage);

        //sql query
        $query = 'UPDATE products SET name=?,class=?,code=?,prod_qntty=?,price=?,description=?,image=? WHERE id=?';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('sssisssi', $name, $class, $code, $prod_qntty, $price, $description, $newimage, $id);
        $stmt->execute();

        if (isset($_POST['unit']) && count($_POST['unit']) > 0) {
            //delete existing product units
            $query = 'DELETE FROM `products_units` WHERE `product_id` = ?';
            $stmt = $conn->prepare($query);
            $stmt->bind_param('i', $id);
            $stmt->execute();
        }

        for ($i = 0; $i < count($_POST['unit']); $i++) {
            $query = 'INSERT INTO `products_units`(`product_id`, `unit`, `unit_value`, `unit_price`, `unit_image`) VALUES(?, ?, ?, ?, ?)';
            $stmt = $conn->prepare($query);

            // Prepare image file for upload
            $imageTmpName = $_FILES['unit_image']['tmp_name'][$i];
            $imageName = $_FILES['unit_image']['name'][$i];

            //image validation

            //check if image is blank
            if($imageName == ""){
                $imageName = $_POST['unit_image_old'][$i];
                $uploadPath = $imageName;
                // echo "<pre>";
                // print_r($_FILES);
                // print_r($_POST['unit_image_old'][$i]);
                // exit;
            } else {
                //move image to dir
                $uploadDir = 'images/';
                $uploadPath = $uploadDir . $imageName;
            }

            if (move_uploaded_file($imageTmpName, $uploadPath)) {
                // If image move is successful, bind the image path and insert into the database
                $query = 'INSERT INTO `products_units`(`product_id`, `unit`, `unit_value`, `unit_price`, `unit_image`) VALUES(?, ?, ?, ?, ?)';
                $stmt1 = $conn->prepare($query);
                $stmt1->bind_param('issss', $id, $_POST['unit'][$i], $_POST['unit_value'][$i], $_POST['unit_price'][$i], $uploadPath);
                $stmt1->execute();
            } else {
                $_SESSION['response'] = 'Image Upload Error';
                $_SESSION['res_type'] = 'success';

                $stmt->bind_param('issss', $id, $_POST['unit'][$i], $_POST['unit_value'][$i], $_POST['unit_price'][$i], $uploadPath);
                $stmt->execute();
            }
        }

        $_SESSION['response'] = "Product Details Updated Successfully!";
		$_SESSION['res_type'] = "primary";

		header('location:ad_addproducts.php');
    }

    

    // if (isset($_FILES['images']['name']) && $_FILES['images']['name'] != '') {
    //     $newimage = 'images/' . $_FILES['images']['name'];
    //     unlink($oldimage);
    //     move_uploaded_file($_FILES['images']['tmp_name'], $newimage);
    // } else {
    //     $result = $conn->query("SELECT image FROM products WHERE id=$id");
    //     $row = $result->fetch_assoc();

    //     $newimage = $row['image'];
    // }

    // $query = 'UPDATE products SET name=?,class=?,code=?,prod_qntty=?,price=?,description=?,image=? WHERE id=?';
    // $stmt = $conn->prepare($query);
    // $stmt->bind_param('sssisssi', $name, $class, $code, $prod_qntty, $price, $description, $newimage, $id);
    // $stmt->execute();

    // $_SESSION['response'] = 'Product Details Updated Successfully!';
    // $_SESSION['res_type'] = 'primary';

    // header('location:ad_addproducts.php');
}

//get details
if (isset($_GET['details'])) {
    $id = $_GET['details'];
    $query = 'SELECT * FROM products WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    $cid = $row['id'];
    $cclass = $row['class'];
    $cname = $row['name'];
    $cprice = $row['price'];
    $ccode = $row['code'];
    $cprod_qntty = $row['prod_qntty'];
    $description = $row['description'];
    $cimage = $row['image'];
}

//delete deatails
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = 'SELECT image FROM products WHERE id=?';
    $stmt2 = $conn->prepare($sql);
    $stmt2->bind_param('i', $id);
    $stmt2->execute();
    $result2 = $stmt2->get_result();
    $row = $result2->fetch_assoc();

    $imagepath = $row['image'];
    unlink($imagepath);

    $query = 'DELETE FROM products WHERE id=?';
    $stmt = $conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();

    header('location:ad_addproducts.php');
    $_SESSION['response'] = 'Successfully Deleted!';
    $_SESSION['res_type'] = 'danger';
}
?>
