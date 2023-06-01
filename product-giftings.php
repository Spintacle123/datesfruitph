<?php
include 'action.php';

error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Exclusive Product | YAME T-SHIRT COLLECTION</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/pdet10.css"> -->
	<link rel="stylesheet" type="text/css" href="css/pdetails1.css">
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
		<div class="row">
			<div class="col-2">
				<img src="<?= $dimage; ?>" width="100%" id="ProductImg" style="padding-bottom: 7px;">

				<div class="small-img-row">
					<div class="small-img-col">
						<img src="<?= $dimage1; ?>" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="<?= $dimage2; ?>" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="<?= $dimage3; ?>" width="100%" class="small-img">
					</div>
					<div class="small-img-col">
						<img src="<?= $dimage4; ?>" width="100%" class="small-img">
					</div>
				</div>
			</div>

			<div class="col-2">
				<h2><?= $dname; ?></h2>
				<h4><strong>₽</strong> <?= $dprice; ?></h4>
				<h2>Product Details <i class="fa fa-indent"></i></h2>
				<br>
				<p><?= $ddescription; ?></p>
			</div>
		</div>
	</div>

	<!------- More products ------->

	<div class="small-container">
		<div class="row row-2">
			<h2><b>More Products</b></h2>
			<a href="products.php"><b>View More</b></a>
		</div>
	</div>


	<!------- products ------->
	<div class="small-container">
		<div class="row">
			<?php
			$item = $conn->prepare('SELECT * FROM giftings order by rand() limit 4');
			$item->execute();
			$result = $item->get_result();
			while ($row = $result->fetch_assoc()) :
			?>
				<div class="col-4">
					<a href="product-details.php?product-details=<?= $row['id']; ?>">
						<img src="<?= $row['image'] ?>">
						<h4><?= $row['name'] ?></h4>
						<p><strong>₽</strong> <?= $row['price'] ?></p>
					</a>
				</div>
			<?php endwhile; ?>
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

</html>