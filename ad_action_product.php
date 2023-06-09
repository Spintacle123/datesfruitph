<?php
	include 'config.php';
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'stc');

	$update=false;
	$id="";
	$class="";
	$name="";
	$price="";
	$prod_qntty="";
	$isfeatured="";
	$image="";
	$code="";
	$description="";
	$ccode="";

	// add products
	if(isset($_POST['add'])){
		$image=$_FILES['images']['name'];
		$validImageExtension = ['jpg', 'jpeg', 'png'];
		$imageExtension = explode('.', $image);
		$imageExtension = strtolower(end($imageExtension));

		

		if(!in_array($imageExtension, $validImageExtension)){
			header('location:ad_addproducts.php');
			$_SESSION['response']="Invalid Image File Extension!!, only accept .jpg, .jpeg, .png";
			$_SESSION['res_type']="success";
		}else{
			$class=$_POST['class'];
			$name=$_POST['name'];
			$code=$_POST['code'];
			$prod_qntty=$_POST['prod_qntty'];
			$price=$_POST['price'];
			$isfeatured=$_POST['isfeatured'];
			$description=$_POST['description'];

			$upload="images/".$image;

			
			$sql_code = "SELECT * FROM products WHERE code='$code'";
			$res_code = mysqli_query($db, $sql_code);
			
			if (mysqli_num_rows($res_code) > 0) {
				header('location:ad_addproducts.php');
				$_SESSION['response']="Sorry, product code is already taken! Please try again";
				$_SESSION['res_type']="success";
			}else{
				$query="INSERT INTO products(class,name,code,prod_qntty,price,isfeatured,description,image)VALUES(?,?,?,?,?,?,?,?)";
				$stmt=$conn->prepare($query);
				$stmt->bind_param("sssisiss",$class,$name,$code,$prod_qntty,$price,$isfeatured,$description,$upload);
				$stmt->execute();
				move_uploaded_file($_FILES['images']['tmp_name'], $upload);

				header('location:ad_addproducts.php');
				$_SESSION['response']="New Products Added Succesfully to Menu!";
				$_SESSION['res_type']="success";
			}
		}
	}

	//edit products
	if(isset($_GET['edit'])){
		$id=$_GET['edit'];

		$query="SELECT * FROM products WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();;

		$class=$row['class'];
		$name=$row['name'];
		$code=$row['code'];
		$prod_qntty=$row['prod_qntty'];
		$price=$row['price'];
		// $capital=$row['capital'];
		$description=$row['description'];
		$image=$row['image'];

		$update=true;
	}

	//update products
	if(isset($_POST['update'])){

		$image=$_FILES['images']['name'];
		// $validImageExtension = ['jpg', 'jpeg', 'png'];
		// $imageExtension = explode('.', $image);
		// $imageExtension = strtolower(end($imageExtension));

		// if(!in_array($imageExtension, $validImageExtension)){
		// 	header('location:ad_addproducts.php');
		// 	$_SESSION['response']="Invalid Image File Extension!!, only accept .jpg, .jpeg, .png";
		// 	$_SESSION['res_type']="success";
		// }else{
			$id=$_POST['id'];
			$class=$_POST['class'];
			$name=$_POST['name'];
			$code=$_POST['code'];
			$prod_qntty=$_POST['prod_qntty'];
			$price=$_POST['price'];
			// $capital=$_POST['capital'];
			$description=$_POST['description'];

			if(isset($_FILES['images']['name'])&&($_FILES['images']['name']!="")){
				$newimage="images/".$_FILES['images']['name'];
				unlink($oldimage);
				move_uploaded_file($_FILES['images']['tmp_name'], $newimage);
			}
			else{
				$result = $conn->query("SELECT image FROM products WHERE id=$id");
				$row = $result->fetch_assoc();

				$newimage=$row['image'];
			}


			$query="UPDATE products SET name=?,class=?,code=?,prod_qntty=?,price=?,description=?,image=? WHERE id=?";
			$stmt=$conn->prepare($query);
			$stmt->bind_param("sssisssi",$name,$class,$code,$prod_qntty,$price,$description,$newimage,$id);
			$stmt->execute();

			// Clean and insert product units
			$query = "DELETE FROM `products_units` WHERE `product_id` = ?";
			$stmt = $conn->prepare($query);
			$stmt->bind_param("i", $id);
			$stmt->execute();

			for ($i=0; $i < count($_POST['unit']); $i++) { 
				$query = "INSERT INTO `products_units`(`product_id`, `unit`, `unit_value`, `unit_price`) VALUES(?, ?, ?, ?)";
				$stmt = $conn->prepare($query);
				$stmt->bind_param("isss", $id, $_POST['unit'][$i], $_POST['unit_value'][$i], $_POST['unit_price'][$i]);
				$stmt->execute();
			}

			$_SESSION['response']="Product Details Updated Successfully!";
			$_SESSION['res_type']="primary";

			header('location:ad_addproducts.php');
	}

	//get details
	if(isset($_GET['details'])){
		$id=$_GET['details'];
		$query="SELECT * FROM products WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();
		$result=$stmt->get_result();
		$row=$result->fetch_assoc();

		$cid=$row['id'];
		$cclass=$row['class'];
		$cname=$row['name'];
		$cprice=$row['price'];
		$ccode=$row['code'];
		$cprod_qntty=$row['prod_qntty'];
		$description=$row['description'];
		$cimage=$row['image'];
	}

	//delete deatails
	if(isset($_GET['delete'])){
		$id=$_GET['delete'];

		$sql="SELECT image FROM products WHERE id=?";
		$stmt2=$conn->prepare($sql);
		$stmt2->bind_param("i",$id);
		$stmt2->execute();
		$result2=$stmt2->get_result();
		$row=$result2->fetch_assoc();

		$imagepath=$row['image'];
		unlink($imagepath);

		$query="DELETE FROM products WHERE id=?";
		$stmt=$conn->prepare($query);
		$stmt->bind_param("i",$id);
		$stmt->execute();

		header('location:ad_addproducts.php');
		$_SESSION['response']="Successfully Deleted!";
		$_SESSION['res_type']="danger";
	}
?>