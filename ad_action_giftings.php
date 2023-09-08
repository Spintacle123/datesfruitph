<?php
include 'config.php';
session_start();
$db = mysqli_connect('localhost', 'root', '', 'stc');

$update = false;
$id = "";
$name = "";
$price = "";
$oldimage = "";
$oldimage1 = "";
$oldimage2 = "";
$oldimage3 = "";
$oldimage4 = "";
$code = "";
$ccode = "";
$cdescription = "";


// add products
if (isset($_POST['add'])) {
	$imageCount = count($_FILES['images']['name']);
	for ($i = 0; $i < $imageCount; $i++) {
		$images[$i] = $_FILES['images']['name'][$i];
		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $images[$i]);
		$imageExtension = strtolower(end($imageExtension));
	}
	$image = $_FILES['image']['name'];
	$validImageExtension = ['jpg', 'jpeg', 'png'];
	$imageExtension = explode('.', $image);
	$imageExtension = strtolower(end($imageExtension));



	if (!in_array($imageExtension, $validImageExtension)) {
		header('location:ad_addgiftings.php');
		$_SESSION['response'] = "Invalid Image File Extension!!, only accept .jpg, .jpeg, .png";
		$_SESSION['res_type'] = "success";
	} else {
		$name = $_POST['name'];
		$code = $_POST['code'];
		$price = $_POST['price'];
		$description = $_POST['description'];
		$status = $_POST['status'];

		for ($i = 0; $i < 4; $i++) {
			$uploads[$i] = "https://datesfruits.devdojo.cloud/images/" . $images[$i];
		}
		$upload = "https://datesfruits.devdojo.cloud/images/" . $image;


		$sql_code = "SELECT * FROM giftings WHERE code='$code'";
		$res_code = mysqli_query($db, $sql_code);

		if (mysqli_num_rows($res_code) > 0) {
			header('location:ad_addgiftings.php');
			$_SESSION['response'] = "Sorry, gifting code is already taken! Please try again";
			$_SESSION['res_type'] = "success";
		} else {
			$query = "INSERT INTO giftings(name,code,price,description,image,image1,image2,image3,image4,status)VALUES(?,?,?,?,?,?,?,?,?,?)";
			$stmt = $conn->prepare($query);
			$stmt->bind_param("sssssssssi", $name, $code, $price, $description, $upload, $uploads[0], $uploads[1], $uploads[2], $uploads[3], $status);
			$stmt->execute();
			for ($i = 0; $i < 4; $i++) {
				move_uploaded_file($_FILES['images']['tmp_name'][$i], $uploads[$i]);
			}
			move_uploaded_file($_FILES['image']['tmp_name'], $upload);

			header('location:ad_addgiftings.php');
			$_SESSION['response'] = "New Giftings Added Succesfully to Menu!";
			$_SESSION['res_type'] = "success";
		}
	}
}

//edit products
if (isset($_GET['edit'])) {
	$id = $_GET['edit'];

	$query = "SELECT * FROM giftings WHERE id=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();;

	$name = $row['name'];
	$price = $row['price'];
	$code = $row['code'];
	$oldimage = $row['image'];
	$oldimage1 = $row['image1'];
	$oldimage2 = $row['image2'];
	$oldimage3 = $row['image3'];
	$oldimage4 = $row['image4'];
	$description = $row['description'];

	$update = true;
}

//update products
if (isset($_POST['update'])) {
	$imageCount = count($_FILES['images']['name']);
	for ($i = 0; $i < $imageCount; $i++) {
		$images[$i] = $_FILES['images']['name'][$i];
		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $images[$i]);
		$imageExtension = strtolower(end($imageExtension));
	}

	//thumbnail picture
	if (isset($_FILES['image']['name']) && ($_FILES['image']['name'] != "")) {

		$image = $_FILES['image']['name'];
		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $image);
		$imageExtension = strtolower(end($imageExtension));

		$oldimage = "images/" . $image;
	} else {
		$oldimage = $_POST['oldimage'];

		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $oldimage);
		$imageExtension = strtolower(end($imageExtension));
	}


	if (!in_array($imageExtension, $validImageExtension)) {
		header('location:ad_addgiftings.php');
		$_SESSION['response'] = "Invalid Image File Extension!!, only accept .jpg, .jpeg, .png";
		$_SESSION['res_type'] = "success";
	} else {
		$id = $_POST['id'];
		$name = $_POST['name'];
		$code = $_POST['code'];
		$price = $_POST['price'];
		$description = $_POST['description'];

		$newimage = $oldimage;

		if (count($_FILES['images']['name']) > 1) {
			// unlink($oldimage);
			for ($i = 0; $i < 4; $i++) {
				$newimages[$i] = "images/" . $images[$i];
			}
		} else {
			for ($i = 0; $i < 4; $i++) {
				$newimages[$i] = $_POST['oldimage' . $i + 1];
			}
		}

		move_uploaded_file($_FILES['images']['tmp_name'][$i], $newimages[$i]);
		move_uploaded_file($_FILES['image']['tmp_name'], $newimage);

		$query = "UPDATE giftings SET name=?,code=?,price=?,description=?,image=?,image1=?,image2=?,image3=?,image4=? WHERE id=?";
		$stmt = $conn->prepare($query);
		$stmt->bind_param("sssssssssi", $name, $code, $price, $description, $newimage, $newimages[0], $newimages[1], $newimages[2], $newimages[3], $id);
		$stmt->execute();

		$_SESSION['response'] = "Giftings Details Updated Successfully!";
		$_SESSION['res_type'] = "primary";

		header('location:ad_addgiftings.php');
	}
}

//get details
if (isset($_GET['details'])) {
	$id = $_GET['details'];
	$query = "SELECT * FROM giftings WHERE id=?";
	$stmt = $conn->prepare($query);
	$stmt->bind_param("i", $id);
	$stmt->execute();
	$result = $stmt->get_result();
	$row = $result->fetch_assoc();

	$cimage = $row['image'];
	$cname = $row['name'];
	$cdescription = $row['description'];
}

	//delete deatails
	// if(isset($_GET['delete'])){
	// 	$id=$_GET['delete'];

	// 	$sql="SELECT image FROM products WHERE id=?";
	// 	$stmt2=$conn->prepare($sql);
	// 	$stmt2->bind_param("i",$id);
	// 	$stmt2->execute();
	// 	$result2=$stmt2->get_result();
	// 	$row=$result2->fetch_assoc();

	// 	$imagepath=$row['image'];
	// 	unlink($imagepath);

	// 	$query="DELETE FROM products WHERE id=?";
	// 	$stmt=$conn->prepare($query);
	// 	$stmt->bind_param("i",$id);
	// 	$stmt->execute();

	// 	header('location:ad_addproducts.php');
	// 	$_SESSION['response']="Successfully Deleted!";
	// 	$_SESSION['res_type']="danger";
	// }
