<?php
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle18.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- rating -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->
  <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>

	<div class="header">
		<?php include("header.php") ?>
	</div>

	<div>
		<div class="absolute flex flex-col z-40 mt-28 ml-[12rem] w-[35vw] h-[50vh]">
			<h1 class="text-[60px] tracking-[0.54px] leading-[70px] font-medium text-white">A Delectable and Nutritious Fruit</h1>
			<p class="opacity-80 font-normal">Discover the Exquisite Delights and Abundant Nutritional Benefits of Dates: Nature's Sweet and Nourishing Fruit</p>
			<button class="flex mt-5 text-white bg-[#FFD700] w-44 h-9 items-center justify-center rounded-tr-lg rounded-bl-lg">Our Products</button>
		</div>

    <div class="absolute h-[75vh] w-[30vw] bg-gradient-to-r from-black to-transparent z-30"></div>

		<div class="swiper dates-slider mt-[10vh] font-medium w-[100vw]">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide image-ad bg-[url('./assets/img/benefits-of-dates-for-women.jpg')]"></div>
				<div class="swiper-slide image-ad bg-[url('./assets/img/main-ad.jpg')]"></div>
				<div class="swiper-slide image-ad bg-[url('./assets/img/card.jpg')]"></div>
				...
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination z-50"></div>

			<!-- If we need navigation buttons -->
			<!-- <div class="swiper-button-prev"></div> -->
			<!-- <div class="swiper-button-next"></div> -->

			<!-- If we need scrollbar -->
			<div class="swiper-scrollbar"></div>
		</div>
	</div>

	<div class="container">
		<div class="category">
			<div>
				<h3>GARDEN TOOLS</h3>
				<p>Our garden tools for hire are top-quality, built to last, and meticulously maintained to ensure <br> optimal performance for every gardening task.</p>
			</div>
			<a href="products.php">SHOW MORE</a>
		</div>
		<div class="items">
			<?php
			include 'config.php';
			// $item = $conn->prepare('SELECT * FROM products WHERE class = "Garden Tools" order by ID DESC limit 5');
			$item = $conn->prepare("SELECT products.*, sum(reviews.rating)/count(reviews.rating) as rating from products left join reviews on reviews.product_id = products.id WHERE products.class = 'Garden Tools' group by products.id order by products.id limit 5 ");
			$item->execute();
			$result = $item->get_result();
			while ($row = $result->fetch_assoc()) :
			?>
				<div class="card animate__animated animate__bounceInUp">
					<a href="product-details.php?product-details=<?= $row['id']; ?>">
						<?php if ($row['purchased'] == 0) { ?>
							<span class="label-new">New</span>
						<?php } ?>
						<img class="" src="<?= $row['image'] ?>">
						<p><?= $row['name'] ?></p>
						<span><strong>$ </strong> <?= $row['price'] ?> <span class="color: #c6c6c6; font-size: 11px">/day</span> </span>

						<div class="ratings">
							<span>Rating</span>
							<?php
							if ($row['rating']) {
								for ($i = 0; $i < round($row['rating']); $i++) {
									echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="main_star">
											<path fill="#bdcd23" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z" />
										</svg>';
								}
							} else {
								echo 'No Rating Found';
							}
							?>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<div class="container animate__animated animate__bounceIn animate__delay-1s">
		<div class="ads-1"></div>
	</div>

	<div class="container">
		<div class="category">
			<div>
				<h3>CARPENTER TOOLS</h3>
				<p>Our garden tools for hire are top-quality, built to last, and meticulously maintained to ensure <br> optimal performance for every gardening task.</p>
			</div>
			<a href="products.php">SHOW MORE</a>
		</div>
		<div class="items">
			<?php
			$i = 1;
			include 'config.php';
			// $item = $conn->prepare('SELECT * FROM products WHERE class = "Carpentry Tools" order by ID DESC limit 5');
			$item = $conn->prepare("SELECT products.*, sum(reviews.rating)/count(reviews.rating) as rating from products left join reviews on reviews.product_id = products.id WHERE products.class = 'Carpentry Tools' group by products.id order by products.id limit 5 ");

			$item->execute();
			$result = $item->get_result();
			while ($row = $result->fetch_assoc()) : $i++
			?>
				<div class="card animate__animated animate__bounceInUp animate__delay-2s">
					<a href="product-details.php?product-details=<?= $row['id']; ?>">
						<?php if ($row['purchased'] == 0) { ?>
							<span class="label-new">New</span>
						<?php } ?>
						<img class="" src="<?= $row['image'] ?>">
						<p><?= $row['name'] ?></p>
						<span><strong>$ </strong> <?= $row['price'] ?> <span class="color: #c6c6c6; font-size: 11px">/day</span></span>

						<div class="ratings">
							<span>Rating</span>
							<div class="flex">
								<?php
								if ($row['rating']) {
									for ($i = 0; $i < round($row['rating']); $i++) {
										echo '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="main_star">
											<path fill="#bdcd23" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z" />
										</svg>';
									}
								} else {
									echo 'No Rating Found';
								}
								?>
							</div>
						</div>
					</a>
				</div>
			<?php endwhile; ?>
		</div>
	</div>

	<!------- new arrivals product ------->
	<div class="small-container1">
		<br>
		<h2 class="title" style="color:#fff;">New Products to Serve</h2>
		<div class="row">
			<?php
			include 'config.php';
			$item = $conn->prepare('SELECT * FROM products order by ID DESC limit 4');
			$item->execute();
			$result = $item->get_result();
			while ($row = $result->fetch_assoc()) :
			?>
			<div class="col-4">
				<a href="product-details.php?product-details=<?= $row['id']; ?>">
				<img src="<?= $row['image'] ?>">
				<h4><?= $row['name'] ?></h4>
				<p><strong>Php: </strong> <?= $row['price'] ?></p>
			</a>
			</div>
			<?php endwhile; ?>
		</div>
	</div>


	<!------- brands ------->
	<br>
	<a href="#top" style="background: #cc0000; color: #fff; padding: 10px; margin-left: 50px; text-decoration: none; border-radius: 2rem;">Back to top</a>
	<br><br>


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

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<script type="text/javascript">
		$(document).ready(function() {
			// Load total no.of items added in the cart and display in the navbar
			load_cart_item_number();

			function load_cart_item_number() {
				$.ajax({
					url: 'action.php',
					method: 'get',
					data: {
						cartItem: "cart_item"
					},
					success: function(response) {
						$("#cart-item").html(response);
					}
				});
			}
		});

		const swiper = new Swiper('.swiper', {
			// Optional parameters
			// direction: 'vertical',
			loop: true,

			// If we need pagination
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},

			// Navigation arrows
			navigation: {
				nextEl: '.swiper-button-next',
				prevEl: '.swiper-button-prev',
			},

			// And if we need scrollbar
			scrollbar: {
				el: '.swiper-scrollbar',
			},

			autoplay: {
				delay: 5000,
			},
		});
	</script>
  <script src="https://cdn.tailwindcss.com"></script>
</body>

<style>
	body {
		background-color: #f5f5f5;
    font-family: 'Ubuntu'
	}

  h1 {
    font-family: 'Ubuntu'
  }

	*, h3 {
		color: #000;
    font-family: 'Ubuntu'
	}

	.image-ad {
		height: 75vh;		
		background-position: center;
		background-size: cover;
		width: 100vw;
	}

	.image-ad>div {
		height: 100%;
	}

	.image-ad>div>div>h1 {
		font-weight: bold;
		margin-top: 10rem;
		color: white;
		font-size: 5rem;
		line-height: 1em;
	}

	.image-ad>div>div>p {
		font-size: 1em;
		margin-top: 30px;
	}

	.image-ad>div>div>a {
		border-radius: 5px;
		font-size: 1.4rem;
		margin-left: 0px;
	}

	.container {
		padding-top: 100px;
		padding-bottom: 10px;
		/* padding: 70px 40px; */
	}

	.items {
		display: flex;
		gap: 20px;
		margin-top: 40px;
	}


	.items>div:nth-child(1)>div {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.items>div {
		width: calc(100% / 5);
	}

	.garden-items {
		display: flex;
		gap: 30px;
	}

	.items p {
		color: #a6a6a6 !important;
		font-size: 1.3rem;
	}

	.card>a>h4 {
		color: #000;
	}

	.card>a>span {
		font-size: 1.4rem;
		margin-top: 25px;
	}


	.card>a>p {
		font-size: 1rem;
		margin-top: 25px;
	}

	.card>a>img {
		max-width: 150px;
		height: 150px;
		align-self: center;
	}

	.card {
		transition: all 0.6s ease-in-out 0s;
		display: flex;
		justify-content: center;
		background-color: #fff;
		border-radius: 10px;
		padding: 20px 30px 10px 30px;
		border: 1px solid #f1f1f1;
	}

	.card:hover {
		transition: all;
		border: 2px solid #5bb343;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	.category {
		display: flex;
		justify-content: space-between;
		align-items: end;
	}

	.category>a {
		font-size: 1.3em;
		color: #009688;
	}

	.category>div>h3 {
		font-weight: bold;
		color: #5bb343;
	}

	.category>div>p {
		color: #998e8e;
	}

	.label-new {
		background-color: #5bb343;
		padding: 5px 15px;
		border-radius: 5px;
		color: #fff;
		font-size: 0.9em !important;
	}

	.ratings {
		padding-top: 7px;
		border-top: 1px solid #f1f1f1;
		margin-top: 20px;
	}

	.ads-1 {
		content: url('./images/ad.jpg');
		width: 100%;
		border-radius: 10px;
	}

	.dates-slider .swiper-pagination-bullet{
    width: 15px;
    height: 15px;
		background-color: #cecece;
	}

	.swiper-scrollbar {
		visibility: hidden;
	}
</style>
</html>