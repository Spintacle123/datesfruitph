<?php
include 'action.php';

error_reporting(0);
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Product-Details</title>
	<link rel="stylesheet" type="text/css" href="css/pdet10.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,600;0,700;1,500;1,600;1,700&family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
	<script type="text/javascript">
		function sizesselect() {
			var s = document.getElementById("sizeselect");
			var selectedValue = s.options[s.selectedIndex].text;
			document.getElementById("sizevalue").value = selectedValue;
		}
	</script>
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>


	<div class="header">
		<?php include("header.php") ?>
	</div>
	

	<div class="container">
		<div class="product-details flex justify-center pt-[5rem] h-[45rem] rounded-tr-[20px]">
			<div class="flex w-[70%] gap-0 rounded-tr-[20px]" style="gap: 0px">
				<div class="p-img w-[60%]" style="background-image: url(<?= $dimage; ?>);background-repeat: no-repeat; background-size: cover">
					<!-- <img class="w-full h-full" src="<?= $dimage; ?>" alt=""> -->
				</div>
				<div class="w-[40%] p-details h-[100%] bg-orange-200 pl-0 pr-0 rounded-tr-[30px]">
					<div class="bg-orange-300 w-full rounded-tr-[20px] ">
						<h2 class="font-bold titles text-white p-0 m-0 px-4 py-3"><?= $dname; ?></h2>
					</div>
					<!-- <div class="pl-4 pr-4 bg-white h-full">
						<p>Description: <?= $ddescription; ?></p>
						<h2>Quantity: <?= $dprod_qntty; ?></h2>
						<h2>$ <span id="price"> <?= number_format($dprice, 2); ?></span> <span style="font-weight: 400; color: #c6c6c6; font-size: 1.5rem"></span></h2>
					</div> -->
					<div class="pl-4 pr-4 bg-white h-100 p-4 relative overflow-hidden rounded-bl-[30px] border-l">
						<div class="grid grid-cols-2">
							<div class="border-r border-b border-t p-2 border-l font-bold">Grams/Kilos</div>
							<div class="border-r border-b border-t p-2 font-bold">Prices</div>
						</div>
						<?php
							$query="SELECT * FROM products_units WHERE product_id =?";
							$stmt=$conn->prepare($query);
							$stmt->bind_param("i", $_GET['product-details']);
							$stmt->execute();
							$result2=$stmt->get_result();
							$row2=$result2->fetch_all(MYSQLI_ASSOC);

							foreach ($row2 as $key => $value) {
						?>
						<div class="grid grid-cols-2">
							<div class="border-r border-b border-l p-2"><?php echo $value['unit_value']; ?> <?php echo $value['unit']; ?></div>
							<div class="border-r border-b p-2"><?php echo number_format($value['unit_price']); ?> Php</div>
						</div>
						<?php } ?>
						<div class="flex flex-col absolute bottom-0 w-full gap-0">
							<span>We can arrange deliveries nationwide</span>
							<div class="w-100 bg-gray-300 flex flex-1 py-2 px-2 rounded-tl-[10px]">
								<div class="flex justify-center items-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><circle cx="12" cy="10" r="3"/><path d="M12 2a8 8 0 0 0-8 8c0 1.892.402 3.13 1.5 4.5L12 22l6.5-7.5c1.098-1.37 1.5-2.608 1.5-4.5a8 8 0 0 0-8-8Z"/></g></svg>
									<p class="text-[15px] font-medium">Newton Plaza Old Sta Mesa Manila</p>
								</div>
							</div>
							<div class="w-100 bg-gray-300 flex flex-1 py-2 px-2 rounded-tl-[10px]">
								<div class="flex justify-center items-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 256 256"><path fill="currentColor" d="m224 154.8l-47.09-21.11l-.18-.08a19.94 19.94 0 0 0-19 1.75a13.08 13.08 0 0 0-1.12.84l-22.31 19c-13-7.05-26.43-20.37-33.49-33.21l19.06-22.66a11.76 11.76 0 0 0 .85-1.15a20 20 0 0 0 1.66-18.83a1.42 1.42 0 0 1-.08-.18L101.2 32a20.06 20.06 0 0 0-20.78-11.85A60.27 60.27 0 0 0 28 80c0 81.61 66.39 148 148 148a60.27 60.27 0 0 0 59.85-52.42A20.06 20.06 0 0 0 224 154.8ZM176 204A124.15 124.15 0 0 1 52 80a36.29 36.29 0 0 1 28.48-35.54l18.82 42l-19.16 22.82a12 12 0 0 0-.86 1.16A20 20 0 0 0 78 130.08c9.42 19.28 28.83 38.56 48.31 48a20 20 0 0 0 19.69-1.45a11.63 11.63 0 0 0 1.11-.85l22.43-19.07l42 18.81A36.29 36.29 0 0 1 176 204Z"/></svg>
									<p class="text-[15px] font-medium">0917-517-9722 / 0918-909-0831</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>

	<div class="modal-append"></div>

	<br>
	<br>

	<div class="mt-5" id="review_content"></div>


	<!------- More products ------->
	<!-- <div class="container" style="margin-bottom: 10rem; background-color:#f1f1f1; padding: 20px; border-radius: 10px">
		<div class="category">
			<div>
				<h3>MORE PRODUCTS</h3>
			</div>
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
						<span><strong>$ </strong> <?= $row['price'] ?></span>

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
	</div> -->


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

			// Send product details in the server
			$(".addItemBtn").click(function(e) {
				e.preventDefault();
				var $form = $(this).closest(".form-submit");
				var cid = $form.find(".cid").val();
				var cuser_id = $form.find(".cuser_id").val();
				var cimage1 = $form.find(".cimage1").val();
				var cname = $form.find(".cname").val();
				var cprice = $form.find(".cprice").val();
				var ccapital = $form.find(".ccapital").val();
				var ccode = $form.find(".ccode").val();
				var cqty = $form.find(".cqty").val();
				var cno_days = $form.find(".cno_days").val();
				var cd_from = $form.find(".cd_from").val();
				var cd_to = $form.find(".cd_to").val();

				$.ajax({
					url: 'action.php',
					method: 'post',
					data: {
						cid: cid,
						cuser_id: cuser_id,
						cimage1: cimage1,
						cname: cname,
						cprice: cprice,
						ccapital: ccapital,
						ccode: ccode,
						cqty: cqty,
						cno_days: cno_days,
						cd_from: cd_from,
						cd_to: cd_to,

					},
					success: function(response) {
						$("#message").html(response);
						window.scrollTo(0, 0);
						load_cart_item_number();
						$('.modal-append').append(`<div class="modals animate__animated animate__bounceInUp animate__delay-1s">
						<div class="modal-bodys">
							<span class="icon-check"></span>
							<h2>Added to Cart</h2>
							<span style="color:#c6c6c6">Your Booking has been added to cart</span>
							<a href="cart.php" class="btn-cart">Go to Cart</a>
						</div>
					</div>`);
					}
				});
			});

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
 	<script src="https://cdn.tailwindcss.com"></script>

</body>

</html>

<script>
	$(document).ready(function() {
		load_rating_data();


		var datepicker = document.getElementById('datepicker');
		var dateto = document.getElementById("date_to");
		var picker = flatpickr(datepicker, {
			dateFormat: 'Y-m-d',
			locale: 'en',
			disable: [<?php
						include 'config.php';
						$item = $conn->prepare('SELECT * FROM orders');
						$item->execute();
						$result = $item->get_result();
						while ($row = $result->fetch_assoc()) {
							$str = $row['products'];

							$newStr = explode("<br>", $str);

							for ($i = 0; $i < count($newStr); $i++) {
								$name = explode(" (", $newStr[$i]);
								if ($name[$i] == $dname) {
									$date = array("from" => $row['d_from'], "to" => $row['d_to']);
									echo json_encode($date) . ',';
								}
							}
						}
						?>],
			onChange: function(selectedDates, dateStr, instance) {
				const noOfDays = $('#noOfDays').val();
				const price = $('#price').text();
				const dateFrom = dateStr;

				dateto.setAttribute('value', analyzeDate(noOfDays, dateFrom));

				$('#dateTo').text(analyzeDate(noOfDays, dateFrom));
				$('#totals').text(computeTotal(noOfDays, price));

				console.log(selectedDates[0]); // logs the selected date object
				console.log(dateStr); // logs the selected date string in the format 'YYYY-MM-DD'
			}
		});




		function computeTotal(days, price) {
			return parseInt(days) * parseInt(price);
		}

		function disableDate() {
			var datePicker = document.getElementById("date");

			// Disable dates from April 10 to April 12, 2023
			var minDate = new Date("2023-04-01");
			var maxDate = new Date("2023-04-30");
			var disabledDates = ["2023-04-10", "2023-04-11", "2023-04-12"];

			datePicker.setAttribute("min", formatDate(minDate));
			datePicker.setAttribute("max", formatDate(maxDate));

			datePicker.addEventListener("input", function() {
				var selectedDate = new Date(this.value);

				if (disabledDates.includes(formatDate(selectedDate))) {
					this.setCustomValidity("This date is not allowed.");
				} else {
					this.setCustomValidity("");
				}
			});

			function formatDate(date) {
				var year = date.getFullYear();
				var month = String(date.getMonth() + 1).padStart(2, "0");
				var day = String(date.getDate()).padStart(2, "0");

				return year + "-" + month + "-" + day;
			}
		}


		function analyzeDate(days, dateFrom) {

			// Parse the input date string into a Date object
			const date = new Date(dateFrom);

			// Calculate the new date by subtracting the specified number of days
			const newDate = new Date(date.getTime() + (days * 24 * 60 * 60 * 1000));

			// Format the new date as a string in YYYY-MM-DD format
			const formattedDate = newDate.toISOString().slice(0, 10);

			// Return the formatted date string
			return formattedDate
		}

		function load_rating_data() {

			var cid = <?= $did ?>;
			$.ajax({
				url: "submit_rating.php",
				method: "POST",
				data: {
					cid: cid,
					action: 'load_data'
				},
				dataType: "JSON",
				success: function(data) {
					$('#average_rating').text(data.average_rating);
					$('#total_review').text(data.total_review);

					var count_star = 0;
					console.log(data);
					$('.main_star').each(function() {
						count_star++;
						if (Math.ceil(data.average_rating) >= count_star) {
							$(this).addClass('text-warning');
							$(this).addClass('star-light');
						}
					});
					$('#total_five_star_review').text(data.five_star_review);

					$('#total_four_star_review').text(data.four_star_review);

					$('#total_three_star_review').text(data.three_star_review);

					$('#total_two_star_review').text(data.two_star_review);

					$('#total_one_star_review').text(data.one_star_review);

					$('#five_star_progress').css('width', (data.five_star_review / data.total_review) * 100 + '%');

					$('#four_star_progress').css('width', (data.four_star_review / data.total_review) * 100 + '%');

					$('#three_star_progress').css('width', (data.three_star_review / data.total_review) * 100 + '%');

					$('#two_star_progress').css('width', (data.two_star_review / data.total_review) * 100 + '%');

					$('#one_star_progress').css('width', (data.one_star_review / data.total_review) * 100 + '%');

					if (data.review_data.length > 0) {
						var html = '';

						for (var count = 0; count < data.review_data.length; count++) {
							html += '<div class="row mb-3">';

							html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">' + data.review_data[count].name.charAt(0) + '</h3></div></div>';

							html += '<div class="col-sm-11">';

							html += '<div class="card">';

							html += '<div class="card-header"><b>' + data.review_data[count].name + '</b></div>';
							html += '<div class="card-body">';

							for (var star = 1; star <= 5; star++) {
								var class_name = '';

								if (data.review_data[count].rating >= star) {
									class_name = '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="main_star"> <path fill="#bdcd23" d="m12 17.27l4.15 2.51c.76.46 1.69-.22 1.49-1.08l-1.1-4.72l3.67-3.18c.67-.58.31-1.68-.57-1.75l-4.83-.41l-1.89-4.46c-.34-.81-1.5-.81-1.84 0L9.19 8.63l-4.83.41c-.88.07-1.24 1.17-.57 1.75l3.67 3.18l-1.1 4.72c-.2.86.73 1.54 1.49 1.08l4.15-2.5z" /> </svg>';
								}

								html += class_name;
							}

							html += '<br />';

							html += data.review_data[count].review;

							html += '</div>';

							html += '<div class="card-footer text-right">On ' + data.review_data[count].datetime + '</div>';

							html += '</div>';

							html += '</div>';

							html += '</div>';
						}

						$('#review_content').html(html);
					}
				}
			})
		}
	});
</script>

<style>
	@import url('https://fonts.googleapis.com/css2?family=Niconne&display=swap');
	body {
		background-color: white !important;
	}

	* {
		font-family: 'Poppins', sans-serif;
		color: #000;
	}

	a {
		text-decoration: none;
	}

	.container {
		max-width: 1300px;
		background-color: white !important;
	}

	.container>.product-details {
		display: flex;
		width: 100%;
		margin-top: 9rem;
	}



	.container>.product-details>.p-img>img {
		width: 80%;
	}

	.container>.product-details>.p-details>p {
		color: #b0aeae;
	}

	.titles {
		font-family: 'Poppins', sans-serif;

	}
	.container>.product-details>.p-details {
		width: calc(100% / 2);
		display: flex;
		flex-direction: column;
		background-color: #f1f1f1;
		border-left: 5px solid #5bb343;
		padding: 2rem;
	}

	.container>.product-details>.p-details>h2 {
		font-weight: bold;
	}

	.want-to {
		font-weight: bold;
	}

	.days {
		color: #5bb343;
	}

	input {
		display: flex;
		align-items: center;
		padding-left: 10px;
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


	.items {
		display: flex;
		gap: 20px;
	}

	.addItemBtn {
		padding: 10px !important;
		font-size: 19px;
		text-transform: uppercase;
		color: white;
	}

	.items {
		display: flex;
		gap: 20px;
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

.modals {
	position: absolute;
	left: 0;
	top: 0;
	height: 100%;
	width: 100vw;
	background-color: #00000040;
	z-index: 999;
	display: flex;
	justify-content: center;
	align-items: center;
}

.modals > .modal-bodys {
	background-color: #ffffff;
	padding: 10px;
	width: 30%;
	border-radius: 10px;
	display: flex;
	padding: 20px 10px;
	flex-direction: column;
	justify-content: center;
	align-items: center;
}

.icon-check {
	content: url('./assets/img/check.svg');
	height: 7rem;
	width: 7rem;
}

.btn-cart {
	background-color: #5bb343;
	padding: 10px 30px;
	color: white;
	border: none;
	border-radius: 5px;
	margin-top: 3rem;
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

	.product-details{
		background-color: #fff;
	}
</style>