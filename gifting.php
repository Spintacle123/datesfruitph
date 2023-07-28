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
</style>