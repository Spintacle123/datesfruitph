<?php
include 'action.php';
include 'config.php';

error_reporting(0);

$query = "SELECT * FROM categories";
$result1 = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Menu</title>
	<link rel="stylesheet" type="text/css" href="css/prod18.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,600;0,700;1,500;1,600;1,700&family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<div class="desktop-view">
	<div class="header">
		<?php include("header.php") ?>
	</div>

	<div class="small-container">
		<div class="flex justify-start">
			<div class="flex justify-start flex-row space-x-[40rem] pt-[6rem]">
				<h1>Product Giftings</h1>
			</div>
		</div>

		<div class="sort">
			<div class="items">
				<?php

				if (isset($_GET['page'])) {
					$page = $_GET['page'];
				} else {
					$page = 1;
				}

				$prod_per_page = 4;
				$start_from = ($page - 1) * $prod_per_page;

				$item = $conn->prepare("SELECT * FROM giftings WHERE status = 1 order by rand() limit $start_from,$prod_per_page");
				$item->execute();
				$result = $item->get_result();
				while ($row = $result->fetch_assoc()) :
				?>
					<div class="card animate__animated animate__bounceInUp animate__delay-3s rounded-tr-[2rem] border rounded-bl-[4rem]">
						<a href="product-giftings.php?exclusive-details=<?= $row['id']; ?>">
							<?php if ($row['purchased'] == 0) { ?>
								<div class="pb-3"><span class="label-new">New</span></div>
							<?php } ?>
							<img class="" src="<?= $row['image'] ?>">
							<p><?= $row['name'] ?></p>
							<span><strong>PHP: </strong> <?= $row['price'] ?></span>
							<div class="flex justify-end -mr-[2rem]">
								<div class="p-[0.2rem] border rounded-tr-lg rounded-bl-lg bg-[#EABF22] w-fit">
									<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24">
										<path fill="white" fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1Zm-.5 5a1 1 0 1 0 0 2h.5a1 1 0 1 0 0-2h-.5ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
									</svg>
								</div>
							</div>
							<?php
							$query = "SELECT * FROM products_units WHERE product_id =?";
							$stmt = $conn->prepare($query);
							$stmt->bind_param("i", $row['id']);
							$stmt->execute();
							$result2 = $stmt->get_result();
							$row2 = $result2->fetch_assoc();
							?>
						</a>
					</div>
				<?php endwhile; ?>

			</div>
		</div>
	</div>
	<br><br>
	<div class="page-btn">
		<!------- Pagination ------->
		<div class=" flex justify-center">
			<?php
			$pr_query = "select * from giftings";
			$pr_result = mysqli_query($conn, $pr_query);
			$total_record = mysqli_num_rows($pr_result);

			$total_pages = ceil($total_record / $prod_per_page);


			if ($page > 1) {
				echo "<a class='arrow -mr-[1.5rem] href='gifting.php?page=" . ($page - 1) . "'>&#129144</a>";
			}

			for ($i = 1; $i < $total_pages; $i++) {
				echo "<a class='-mr-[1.5rem]' href='gifting.php?page=" . $i . "'>$i</a>";
			}

			if ($i > $page) {
				echo "<a class='arrow' href='gifting.php?page=" . ($page + 1) . "'>&#129146</a>";
			}
			?>
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

	<!------- js sorting ------->
	<script type="text/javascript">
		$(document).ready(function() {
			$("#fetchval").on('change', function() {
				var value = $(this).val();
				//alert(value);

				$.ajax({
					url: "fetch.php",
					type: "POST",
					data: 'request=' + value,
					success: function(data) {
						$(".sort").html(data);
					}
				});
			});
		});
	</script>

	<script>
		// Get the parameter value from the URL
		var searchParam = new URLSearchParams(window.location.search).get('search');

		// Decode the parameter value if needed
		var decodedSearchTerm = decodeURIComponent(searchParam);

		// Use the parameter value as needed
		if (decodedSearchTerm !== "null") {
			$.ajax({
				url: "sort.php",
				type: "POST",
				data: 'request=' + decodedSearchTerm,
				success: function(data) {
					$(".sort").html(data);
				}
			});
		}
	</script>

	<script>
		function performSearch() {
			var searchTerm = document.getElementById('search-input').value;
			$.ajax({
				url: "search.php",
				type: "POST",
				data: 'request=' + searchTerm,
				success: function(data) {
					$(".sort").html(data);
				}
			});
		}
	</script>

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
	</script>
	</div>

	<div class="mobile-view">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="navbar pt-3 pb-5 h-[5rem] bg-black border-b-4 border-yellow-400 floral-pattern">
   <div class="mr-64 pt-2 pl-2 opacity-70 hamburger-icon" onclick="toggleMenu()">
      <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 512 512">
         <path fill="white" d="M32 96v64h448V96H32zm0 128v64h448v-64H32zm0 128v64h448v-64H32z"/>
      </svg>
   </div>
   <div class="logos -mb-20 pr-8">
      <a href="home.php" class="rounded-full h-[6rem] w-[6rem] overflow-hidden">
         <img src="./assets/datesfruits.png" class="" style="max-width: 100%; max-height: 100%;">
      </a>
   </div>
</div>

<div class="menu">
   <ul>
      <li><a href="home.php">Home</a></li>
      <li><a href="products.php">Products</a></li>
      <li><a href="gifting.php">Gifting</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.php">About Us</a></li>
   </ul>
</div>

<script>
function toggleMenu() {
   var menu = document.querySelector(".menu");
   menu.style.display = (menu.style.display === "none") ? "block" : "none";
}
</script>




<div class="small-container">
	<div class="flex justify-center">
		<div class="flex justify-start flex-row">
			<h1 class="text-2xl mb-2 mt-12 mr-32">Product Giftings</h1>
		</div>
	</div>

	<div class="sort">
	<div class="items">
		<?php
		if (isset($_GET['page'])) {
			$page = $_GET['page'];
		} else {
			$page = 1;
		}

		$prod_per_page = 4;
		$start_from = ($page - 1) * $prod_per_page;

		$item = $conn->prepare("SELECT * FROM giftings WHERE status = 1 ORDER BY RAND() LIMIT $start_from, $prod_per_page");
		$item->execute();
		$result = $item->get_result();
		while ($row = $result->fetch_assoc()) :
		?>
			<div class="card animate__animated animate__bounceInUp animate__delay-3s rounded-tr-[2rem] border rounded-bl-[4rem]">
				<a href="product-giftings.php?exclusive-details=<?= $row['id']; ?>">
					<?php if ($row['purchased'] == 0) { ?>
						<div class="pb-3"><span class="label-new">New</span></div>
					<?php } ?>
					<div class="image-container">
						<img class="image" src="<?= $row['image'] ?>">
					</div>
					<p><?= $row['name'] ?></p>
					<span><strong>PHP: </strong><?= $row['price'] ?></span>
					<div class="flex justify-end">
						<div class="p-[0.2rem] border rounded-tr-lg rounded-bl-lg bg-[#EABF22] w-fit">
							<svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 24 24">
								<path fill="white" fill-rule="evenodd" d="M12 1C5.925 1 1 5.925 1 12s4.925 11 11 11s11-4.925 11-11S18.075 1 12 1Zm-.5 5a1 1 0 1 0 0 2h.5a1 1 0 1 0 0-2h-.5ZM10 10a1 1 0 1 0 0 2h1v3h-1a1 1 0 1 0 0 2h4a1 1 0 1 0 0-2h-1v-4a1 1 0 0 0-1-1h-2Z" clip-rule="evenodd" />
							</svg>
						</div>
					</div>
					<?php
					$query = "SELECT * FROM products_units WHERE product_id =?";
					$stmt = $conn->prepare($query);
					$stmt->bind_param("i", $row['id']);
					$stmt->execute();
					$result2 = $stmt->get_result();
					$row2 = $result2->fetch_assoc();
					?>
				</a>
			</div>
		<?php endwhile; ?>
	</div>
</div>

<div id="contact-us" class="footer border-t border-gray-300">
		<div class="container" style="padding-top: 0px">
			<div class="footer flex flex-col items-center justify-between px-6 py-8">
				<div class="text-center">
					<div class="-mt-6 flex justify-center">
						<a href="home.php" class="rounded-full h-16 w-16 overflow-hidden">
							<img src="./assets/datesfruits.png" class="">
						</a>
					</div>
					<h3 class="text-center font-bold">DATES FRUITS PH</h3>
					<p class="ml-7 text-center">hello@datefruits.com.ph</p>
				</div>
				<div class="mt-3">
					<p class="mt-5 text-center">Contact Us:</p>
					<p class="con text-center">(833-1931) / +639123456789</p>
					<p class="mt-5 text-center">Follow Us:</p>
					<div class="grid grid-cols-3 gap-4 justify-center">
						<div class="bg-white w-12 h-12 rounded-full flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5Z"/></svg>
						</div>
						<div class="bg-white w-12 h-12 rounded-full flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23Z"/></svg>
						</div>
						<div class="bg-white w-12 h-12 rounded-full flex items-center justify-center">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8A1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5a5 5 0 0 1-5 5a5 5 0 0 1-5-5a5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3Z"/></svg>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr class="h-px bg-gray-200 border-0 dark:bg-gray-900 py-[2px]">
		<div class="text-center">
			<?php 
				$date = date('Y');
				echo '<p class="text-center text-gray-600 text-sm mt-3">© '.$date.' - Datesfruitsph. All rights reserved.</p>';
			?>
		</div>
	</div>
	</div>

</body>

</html>
<style>
	* {
		font-family: 'Josefin Sans', sans-serif !important;
	}

	.items {
		display: flex;
		gap: 10px;
		margin-top: 40px;
		flex-wrap: wrap;
		justify-content: center;
	}


	.items>div:nth-child(1)>div {
		display: flex;
		justify-content: center;
		align-items: center;
	}

	.items>div {
		width: calc(70%/4);
		justify-content: center;
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
		/* border-radius: 10px; */
		padding: 20px 30px 10px 30px;
		/* border: 1px solid #f1f1f1; */
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

	.samp {
		transition: all 0.6s ease-in-out 0s;
		display: flex;
		justify-content: center;
		background-color: #EFEFEF;
	}

	.samp:hover {
		transition: all;
		border: 2px solid #FF8000;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}


@media screen and (min-width: 768px) {
  .sort .items {
    display: block;
  }
}

	/* Hide desktop view on mobile screens */
@media (max-width: 767px) {
  .desktop-view {
    display: none;
  }
}

/* Hide mobile view on desktop screens */
@media (min-width: 768px) {
  .mobile-view {
    display: none;
  }
}
.menu {
		position: absolute;
		width: 100%;
         top: 5rem;
         z-index: 999;
         background-color: #000;
         padding: 1rem;
         display: none;
      }
      .menu ul {
         list-style-type: none;
         padding: 0;
         margin: 0;
      }
      .menu ul li {
		z-index: 999;
         margin-bottom: 1rem;
      }
      .menu ul li a {
         color: #fff;
         text-decoration: none;
      }

</style>