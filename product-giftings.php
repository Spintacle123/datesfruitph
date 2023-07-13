<?php
include 'action.php';

error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product Gifting</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/pdet10.css"> -->
	<link rel="stylesheet" type="text/css" href="css/pdetails2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->

</head>

<body>

	<div class="header">
		<?php include("header.php") ?>
	</div>

	<!------- exclusive product details ------->
	<div class="small-container single-product">
		<div id="message"></div>
		<div class="row mb-12 mt-10">
			<div class="col-2">
				<img src="<?= $dimage; ?>" class="h-[28rem] w-[32rem] rounded-[2rem] mb-2" id="ProductImg">

				<div class="small-img-row">
					<div class="small-img-col ml-2">
						<img src="<?= $dimage1; ?>" class="small-img rounded-[1rem]">
					</div>
					<div class="small-img-col ml-2">
						<img src="<?= $dimage2; ?>" class="small-img rounded-[1rem]">
					</div>
					<div class="small-img-col ml-2">
						<img src="<?= $dimage3; ?>" class="small-img rounded-[1rem]">
					</div>
					<div class="small-img-col ml-2">
						<img src="<?= $dimage4; ?>" class="small-img rounded-[1rem]">
					</div>
				</div>
			</div>

			<div class="col-2">
				<h2 class="font-medium"><?= $dname; ?></h2>
				<h4 class=" "><span class="text-red-500">PHP: </span> <?= number_format($dprice, 2); ?></h4>
				<h6 class=" font-bold mt-32">Product Details:</h6>
				<p class=" text-black font-normal text-lg"><?= $ddescription; ?></p>
			</div>
		</div>
	</div>

	<!------- footer ------->
	<?php include("footer.php") ?>


	<!------- js for toggle menu ------->
	<script type="text/javascript">
		var MenuItems = document.getElementById("MenuItems");

		MenuItems.style.maxHeight = "0px";

		function menutoggle() {
			if (MenuItems.style.maxHeight == "0px") {
				MenuItems.style.maxHeight = "200px";
			} else {
				MenuItems.style.maxHeight = "0px";
			}
		}
	</script>

	<!------- js for product gallery ------->

	<script type="text/javascript">
		var ProductImg = document.getElementById("ProductImg");
		var SmallImg = document.getElementsByClassName("small-img");

		SmallImg[0].onclick = function() {
			ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function() {
			ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function() {
			ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function() {
			ProductImg.src = SmallImg[3].src;
		}
	</script>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
</body>

<style>
</style>

</html>