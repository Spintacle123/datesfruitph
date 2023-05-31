<?php
// session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/homestyle1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- rating -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->
  <!-- <link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet'> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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

	<div class="relative">
		<div id="home" class="absolute top-0 -mt-20"></div>
		<div class="absolute flex flex-col justify-center z-40 mt-28 ml-[19rem] w-[35vw] h-[50vh]">
			<h1 class="text-[60px] tracking-[0.54px] leading-[70px] font-bold text-white">A Delectable and Nutritious Fruit</h1>
			<p class="opacity-80 font-normal text-white text-[1.7rem]">Discover the Exquisite Delights and Abundant Nutritional Benefits of Dates: Nature's Sweet and Nourishing Fruit</p>
			<button class="flex mt-5 text-white bg-[#FFD700] w-44 h-9 items-center justify-center rounded-tr-lg rounded-bl-lg">Our Products</button>
		</div>

    <div class="absolute h-[75vh] w-[30vw]"></div>

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

	<!------- "Our Products" ------->
	<div class="relative px-[19rem] pt-[5vh] pb-[5vh] bg-[#f7f2ec]">
		<h2 class="relative z-50 text-[2em] font-bold text-[#DC7105] mb-6">Our Products</h2>
		<div class="row grid grid-cols-5 categories justify-start w-100">
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/fillingdates.png" class="h-31 w-38">
						<p class="text-black">Filed Dates</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/nuts.png" class="h-38 w-38">
						<p class="text-black">Nuts</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/seeds.png" class="h-38 w-38">
						<p class="text-black">Seeds</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/fruits.png" class="h-38 w-38">
						<p class="text-black">Dry Fruits</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/asoorted.png" class="h-38 w-38">
						<p class="text-black">Trail Mix</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/dates.png" class="h-31 w-38">
						<p class="text-black">Dates Fruit</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/dulce.png" class="h-38 w-38">
						<p class="text-black">Turkish Delights</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/baklavA.png" class="h-38 w-38">
						<p class="text-black">Baklava</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/chocolate.png" class="h-38 w-38">
						<p class="text-black">Chocolate</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/asoorted.png" class="h-38 w-38">
						<p class="text-black">Trail Mix</p>
					</div>
				</a>
			</div>
		</div>

		<div class="absolute h-full w-full floral-pattern opacity-5 top-0 left-0 z-0"></div>
	</div>

<!------- "Featured Products" ------->
<div class="relative flex flex-col px-[19rem] pt-[5vh] pb-[5vh] bg-[#e8e4de]">
	<h2 class="text-[2em] font-bold text-[#DC7105] mb-6">Featured Products</h2>
	<div class="row grid grid-cols-5 products justify-start">
		<?php
		include 'config.php';
		$item = $conn->prepare('SELECT * FROM products WHERE capital = "isFeatured" order by ID DESC limit 5');
		$item->execute();
		$result = $item->get_result();
		while ($row = $result->fetch_assoc()) :
		?>
		<div class="h-max">
			<a href="product-details.php?product-details=<?= $row['id']; ?>">
				<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white px-3 py-3 items-start justify-left h-[21em] rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
					<div class="bg-orange-400 text-white rounded-[5px] px-[5px]">
						<p class="text-white text-[0.5em] label my-1">1 BOX (500 grms)</p>
					</div>	
					<div class="w-100 flex justify-center items-center m-auto">
							<img src="<?= $row['image'] ?>" class="h-38 w-38 m-auto">
						</div>
						<div class="w-100 text-left pl-3 pb-4">
							<p class="text-black font-bold  p-0 m-0"><?= $row['name'] ?></p>
							<span>Php 1,900.00</span>
						</div>
					</div>
			</a>
		</div>
		<?php endwhile; ?>
	</div>
	<button class="flex mt-14 text-white bg-orange-400 w-fit px-7 py-5 h-9 mx-auto items-center justify-center rounded-tr-lg rounded-bl-lg">
		Load More
	</button>

	<div class="absolute flex flex-col h-fit w-fit -mt-[2vh] left-0 -ml-[3vw] z-50">
		<img class="flex w-[320px] shrink-0 -ml-[5vw] mt-[0vh] rotate-90" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
		<img class="flex w-[320px] shrink-0 -ml-[5vw] -mt-[5vh] rotate-90 transform scale-x-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
		<img class="flex w-[320px] shrink-0 -ml-[7vw] -mt-[10vh] rotate-90 transform scale-x-[-1] scale-y-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
		<img class="flex w-[320px] shrink-0 -ml-[2vw] -mt-[12vh] rotate-90 transform scale-y-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
	</div>

	<div class="absolute flex flex-col h-fit w-fit -mt-[2vh] right-0 -mr-[3vw] transform scale-x-[-1] scale-y-[-1] z-50">
		<img class="flex w-[320px] shrink-0 -ml-[5vw] mt-[0vh] rotate-90 transform scale-x-[-1] scale-y-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
		<img class="flex w-[320px] shrink-0 -ml-[5vw] -mt-[5vh] rotate-90 transform scale-x-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
		<img class="flex w-[320px] shrink-0 -ml-[7vw] -mt-[10vh] rotate-90 scale-y-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
		<img class="flex w-[320px] shrink-0 -ml-[2vw] -mt-[10vh] rotate-90 transform scale-y-[-1]" src="./assets/Flying-green-leaves-vector-PNG.png" alt="">
	</div>
</div>

<!-- About Us -->
<div class="relative px-[19rem] pt-[10vh] pb-[10vh] bg-[#f7f2ec]">
	<div id="about-us" class="absolute -mt-20 top-0"></div>
	<div class="relative z-50 flex h-full justify-between items-center px-10 mx-auto bg-white rounded-tr-[3rem] rounded-bl-[3rem]">
		<div class="flex basis-1/2 h-full py-12">
			<div class="flex h-fit w-fit justify-center items-center rounded-tr-[3rem] rounded-bl-[3rem] overflow-hidden">
				<img 
					src="./assets/img/DATESSHOP.jpg" 
					class="max-h-[75vh] min-h-[60vh] object-cover"
				>
			</div>
		</div>
		<div class="h-full border-l border-gray-200 mx-4"></div>
		<div class="basis-1/2 flex flex-col my-12">
			<div class="text-3xl font-black">About Us</div>
			<div class="text-[#707070]">At our shop, we take pride in offering a delightful assortment of dates and nuts to satisfy your cravings and provide you with nourishing snacks. We believe in the power of natural and wholesome foods to enhance your well-being.</div>
			<div class="text-[#707070]">Our collection of dates includes a variety of delectable options, from soft and juicy Medjool dates to the sweet and caramel-like flavors of Deglet Noor dates. These luscious fruits are known for their natural sweetness, satisfying texture, and numerous health benefits.</div>	
			<div class="text-[#707070]">In addition to dates, we also bring you a wide selection of premium nuts. Whether you prefer the buttery richness of almonds, the crunchiness of pistachios, or the earthy goodness of walnuts, our shop offers an array of high-quality nuts to suit every taste.</div>
			<div class="text-[#707070]">We carefully source our products from trusted suppliers who share our commitment to quality. Each date and nut is handpicked, ensuring freshness, flavor, and superior quality in every bite... Our friendly and knowledgeable team is here to assist you in finding the perfect combination of dates and nuts to suit your preferences. Whether you're looking for a healthy snack...</div>
			<button class="flex mt-10 text-white bg-orange-400 w-fit px-7 py-5 h-9 ml-auto mr-7 items-center justify-center rounded-tr-lg rounded-bl-lg">
				Read More
			</button>
		</div>
	</div>

	<div class="absolute h-full w-full floral-pattern opacity-5 top-0 left-0 z-0"></div>
</div>

<!------- "Why Choose Us?" ------->
<div class="flex flex-col w-full h-fit px-[19rem] pt-[9vh] pb-[15vh] bg-white">
	<div class="flex flex-col items-center">
		<h1 class="my-0 text-center font-extrabold tracking-tighter">Why Choose Us?</h1>
		<p class="text-center text-[#707070] mx-[14.5vw] text-[1em]">Choose us for exceptional quality, a wide selection, a focus on health and wellness, knowledgeable staff, and a commitment to customer satisfaction. Experience the joy of indulging in premium dates and nuts by visiting our Dates & Nuts Shop today!</p>
	</div>
	<div class="flex justify-between pt-20">
		<div class="flex flex-col w-[23vw] items-center">
			<img class="w-28 h-28" src="./assets/icon/carts.png" alt="">
			<p class="text-center font-bold text-xl">100+ Products</p>
			<p class="text-center text-[#707070] opacity-[0.58] text-[1em]">Indulge in a vast assortment of flavors and textures with our extensive selection of over 100 kinds of nuts, carefully curated to cater to every nut lover's palate.</p>
		</div>
		<div class="flex flex-col w-[23vw] items-center">
			<img class="w-28 h-28" src="./assets/icon/fast-delivery.png" alt="">
			<p class="text-center font-bold text-xl">Price lower than others</p>
			<p class="text-center text-[#707070] opacity-[0.58] text-[1em]">Enjoy the added convenience of free delivery, bringing the delightful flavors of our dates and nuts directly to your doorstep without any additional cost.</p>
		</div>
		<div class="flex flex-col w-[23vw] items-center">
			<img class="w-28 h-28" src="./assets/icon/commission.png" alt="">
			<p class="text-center font-bold text-xl">Delivery Anywhere</p>
			<p class="text-center text-[#707070] opacity-[0.58] text-[1em]">Experience the satisfaction of shopping with us as we offer prices that are consistently lower than our competitors, ensuring you receive exceptional value without compromising on quality.</p>
		</div>
	</div>
</div>


	<!------- brands ------->
	<!-- <br>
	<a href="#top" style="background: #cc0000; color: #fff; padding: 10px; margin-left: 50px; text-decoration: none; border-radius: 2rem;">Back to top</a>
	<br><br> -->


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
	<script>
		document.querySelectorAll('a[href^="#"]').forEach(anchor => {
			anchor.addEventListener('click', function (e) {
				e.preventDefault();

				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});
	</script>

</body>

<style>
	body {
		background-color: #f5f5f5;
		font-family: 'Poppins', sans-serif;
	}

  h1 {
    font-family: 'Poppins', sans-serif;
  }

  .categories{
	gap: 15px !important;
	width: 100%;
  }

  /* .categories > div{
	width: calc(100%/6);
  } */

  .categories > div > a > div > p {
	font-size: 1em;
  }


  .products{
	gap: 15px !important;
  }

  /* .products > div{
	width: calc(100%/6);
  } */

  .products > div > a > div > div > p.label {
	font-size: 0.8em !important;
  }


  .products > div > a > div > div > p {
	font-size: 1em;
  }


  .products > div > a > div > div > span {
	font-size: 0.9em;
	color: #A2A2A2;
  }

	h2 {
		
		font-family: 'Poppins', sans-serif;
	}

	*, h3 {
		font-family: 'Poppins', sans-serif;
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
		gap: 10px;
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