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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
</head>

<body>
<div class="desktop-view">
	<div class="header">
		<?php include("header.php") ?>
	</div>

	<div class="relative">
		<div id="home" class="absolute top-0 -mt-20"></div>
		<div class="relative z-50">
			<div class="absolute flex flex-col justify-center z-40 mt-28 mr-[50vw] w-[35vw] h-[50vh] top-0 right-0 flex-wrap">
				<h1 class="text-[3.75rem] tracking-[0.034rem] leading-[4.375rem] font-semibold text-white">A Delectable and Nutritious Fruit</h1>
				<p class="opacity-80 font-normal text-white text-[1.7rem]">Discover the Exquisite Delights and Abundant Nutritional Benefits of Dates: Nature's Sweet and Nourishing Fruit</p>
				<button class="flex mt-5 text-white bg-[#FFD700] w-44 h-9 items-center justify-center rounded-tr-lg rounded-bl-lg">Our Products</button>
			</div>
		</div>

		<div class="relative swiper dates-slider mt-[10vh] font-medium w-[100vw]">
			<div class="absolute h-[75vh] w-[75vw] bg-gradient-to-r from-black z-40"></div>

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide image-ad bg-[url('./images/fruits.jpg')]"></div>
				<div class="swiper-slide image-ad bg-[url('./images/preperation.jpg')]"></div>
				<div class="swiper-slide image-ad bg-[url('./images/datesstore.jpg')]"></div>
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
					<div id="clickableDiv_parameter1" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/fillingdates.png" class="h-31 w-38">
						<p class="text-black">Filed Dates</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter2" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/nuts.png" class="h-38 w-38">
						<p class="text-black">Nuts</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter3" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/seeds.png" class="h-38 w-38">
						<p class="text-black">Seeds</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter4" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/fruits.png" class="h-38 w-38">
						<p class="text-black">Dry Fruits</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter5" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/asoorted.png" class="h-38 w-38">
						<p class="text-black">Trail Mix</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter6" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/dates.png" class="h-31 w-38">
						<p class="text-black">Dates Fruit</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter7" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/dulce.png" class="h-38 w-38">
						<p class="text-black">Turkish Delights</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter8" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/baklavA.png" class="h-38 w-38">
						<p class="text-black">Baklava</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter9" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/chocolate.png" class="h-38 w-38">
						<p class="text-black">Chocolate</p>
					</div>
				</a>
			</div>
			<div class="relative z-50">
				<a href="#">
					<div id="clickableDiv_parameter10" class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white  p-4 items-center h-[16em] justify-center rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
						<img src="./assets/img/category/asoorted.png" class="h-38 w-38">
						<p class="text-black">Trail Mix</p>
					</div>
				</a>
			</div>
		</div>
		<div class="absolute h-full w-full floral-pattern opacity-5 top-0 left-0 z-0"></div>
	</div>

	<!------- "Featured Products" ------->
	<div class="relative px-[19rem] flex flex-col  pt-[5vh] pb-[5vh] bg-[#e8e4de]">
		<h2 class="text-[2em] font-semibold text-center  text-[#DC7105] mb-6">Featured Products</h2>
		<div class="row grid grid-cols-5 products justify-start">
			<?php
			include 'config.php';
			$item = $conn->prepare('SELECT * FROM products WHERE isfeatured = 1 order by ID DESC limit 5');
			$item->execute();
			$result = $item->get_result();
			while ($row = $result->fetch_assoc()) :
			?>
			<div class="h-max">
				<a href="product-details.php?product-details=<?= $row['id']; ?>" class="w-full">
 				<div class="hover:opacity-90 hover:rounded-tl-[2em] hover:rounded-br-[2em] hover:rounded-tr-[0em] hover:rounded-bl-[0em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white px-4 py-3 items-start justify-left h-max rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
    			<div class="w-full flex flex-col justify-center items-center m-auto">
      			<img src="<?= $row['image'] ?>" class="h-[200px] w-[200px] m-auto">
    		</div>
    			<p class="text-[1.1em] font-bold"><?= $row['name'] ?></p>
    			<?php
      			$query = "SELECT * FROM products_units WHERE product_id =?";
      			$stmt = $conn->prepare($query);
      			$stmt->bind_param("i", $row['id']);
      			$stmt->execute();
      			$result2 = $stmt->get_result();
      			$row2 = $result2->fetch_assoc();

      			// Check if the array is empty
      		if (!empty($row2)) {
    		?>
      			<div class="text-white rounded-[5px] px-[5px] w-max">
        		<p class="mt-2">Price Start at:</p>
        		<p class="text-[0.9em] border-2 rounded-md px-4  label my-1"><span><strong>PHP </strong> <?= $row2['unit_price'] ?> <span class="color: #c6c6c6; font-size: 11px">/<?php echo $row2['unit']; ?></span></span></p>
      			</div>
    		<?php } ?>
  			</div>
			</a>
			</div>
			<?php endwhile; ?>
			<button class="flex mt-14 col-span-5 text-white bg-orange-400 w-fit px-7 py-5 h-9 mx-auto items-center justify-center rounded-tr-lg rounded-bl-lg">
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
	</div>
	<!-- About Us -->
	<div class="relative px-[19rem] pt-[10vh] pb-[10vh] bg-[#f7f2ec]">
		<div id="about-us" class="absolute -mt-20 top-0"></div>
		<div class="relative z-50 flex h-full justify-between items-center px-10 mx-auto bg-white rounded-tr-[3rem] rounded-bl-[3rem]">
			<div class="flex basis-1/2 h-full py-12">
				<div class="flex h-fit w-fit justify-center items-center rounded-tr-[3rem] rounded-bl-[3rem] overflow-hidden">
					<img src="./assets/img/DATESSHOP.jpg" class="max-h-[75vh] min-h-[60vh] object-cover">
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
				<p class="text-center font-bold text-xl">Delivery Anywhere in the Phillippines</p>
				<p class="text-center text-[#707070] opacity-[0.58] text-[1em]">We offer convenient delivery services, ensuring that our delightful assortment of dates and nuts can be enjoyed anywhere in the Philippines.</p>
			</div>
			<div class="flex flex-col w-[23vw] items-center">
				<img class="w-28 h-28" src="./assets/icon/commission.png" alt="">
				<p class="text-center font-bold text-xl">Price lower than others</p>
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
</div>
	<script>
		// Get all the clickable div elements
		var clickableDivs = document.querySelectorAll("[id^='clickableDiv_parameter']");

		// Attach a click event listener to each div
		clickableDivs.forEach(function(div) {
			div.addEventListener("click", function() {
				// Get the <p> element inside the clicked <div>
				var searchTerm = this.querySelector("p");

				// Encode the search term to be passed as a parameter
				var encodedSearchTerm = encodeURIComponent(searchTerm);

				// Redirect to the other page with the parameter in the URL
				window.location.href = 'products.php?search=' + searchTerm.textContent;
			});
		});
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
			anchor.addEventListener('click', function(e) {
				e.preventDefault();

				document.querySelector(this.getAttribute('href')).scrollIntoView({
					behavior: 'smooth'
				});
			});
		});
	</script>


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

	<div class="relative">
  <div id="home" class="absolute pl-4"></div>
  <div class="relative z-50">
    <div class="absolute flex flex-col z-40 mr-[60vw] w-[35vw] h-[40vh] top-0 right-0 flex-wrap ">
      <h1 class="text-2xl md:text-[2.75rem] tracking-tight leading-[1.5rem] font-semibold text-white pt-8">A&nbsp;Delectable&nbsp;and Nutritious Fruit</h1>
      <div class= "-m-12 pl-12 pt-8">
		<p class="opacity-80 font-normal text-sm md:text-[1.7rem]">Discover the Exquisite Delights and Abundant Nutritional Benefits of Dates: Nature's Sweet and Nourishing Fruit</p>
	</div>
		<button class="flex mt-8 text-sm text-white bg-[#FFD700] w-28 h-7 items-center justify-center rounded-tr-lg rounded-bl-lg">Our Products</button>
    </div>
  </div>
</div>


		<div class="relative swiper dates-slider mt-[8vh] font-medium w-[100vw]">
			<div class="absolute h-[75vh] w-[75vw] bg-gradient-to-r from-black z-40"></div>

			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide image-ad bg-[url('./images/fruits.jpg')]"></div>
				<div class="swiper-slide image-ad bg-[url('./images/preperation.jpg')]"></div>
				<div class="swiper-slide image-ad bg-[url('./images/datesstore.jpg')]"></div>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination z-50"></div>

			<!-- If we need navigation buttons -->
			<!-- <div class="swiper-button-prev"></div> -->
			<!-- <div class="swiper-button-next"></div> -->

			<!-- If we need scrollbar -->
			<div class="swiper-scrollbar"></div>
		</div>
	<div class="relative px-6 pt-8 pb-8 bg-[#f7f2ec]">
    <h2 class="relative z-50 text-2xl font-bold text-[#DC7105] mb-4">Our Products</h2>
    <div class="grid grid-cols-3 gap-4 pb-12 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3">
	<a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter1" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/nuts.png" class="h-38 w-38 object-contain" alt="Nuts">
                <p class="text-black">Dry Fruits</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter2" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/nuts.png" class="h-38 w-38 object-contain" alt="Nuts">
                <p class="text-black">Nuts</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter3" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/nuts.png" class="h-38 w-38 object-contain" alt="Nuts">
                <p class="text-black">Filed Dates</p>
            </div>
        </a>
		<a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter4" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/nuts.png" class="h-38 w-38 object-contain" alt="Nuts">
                <p class="text-black">Nuts</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter5" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/asoorted.png" class="h-38 w-38" alt="Trail Mix">
                <p class="text-black">Trail Mix</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter6" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/nuts.png" class="h-38 w-38 object-contain" alt="Nuts">
                <p class="text-black">Nuts</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter7" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/nuts.png" class="h-38 w-38 object-contain" alt="Nuts">
                <p class="text-black">Nuts</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter8" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/baklavA.png" class="h-38 w-38" alt="Baklava">
                <p class="text-black">Baklava</p>
            </div>
        </a>
        <a href="#" class="hover:opacity-90">
            <div id="clickableDiv_parameter9" class="flex flex-col bg-white p-4 items-center justify-center rounded-tl-2xl rounded-br-2xl overflow-hidden">
                <img src="./assets/img/category/asoorted.png" class="h-38 w-38" alt="Trail Mix">
                <p class="text-black">Trail Mix</p>
            </div>
        </a>
    </div>
    <div class="absolute h-full w-full floral-pattern opacity-5 top-0 left-0 z-0"></div>

<!--featured product-->
<div class="relative px-6 pt-8 pb-8 bg-[#e8e4de]">
    <h2 class="text-2xl font-semibold text-center text-[#DC7105] mb-6">Featured Products</h2>
    <div class="flex flex-row overflow-x-auto overflow-y-hidden">
        <?php
        include 'config.php';
        $item = $conn->prepare('SELECT * FROM products WHERE isfeatured = 1 ORDER BY ID DESC LIMIT 5');
        $item->execute();
        $result = $item->get_result();
        while ($row = $result->fetch_assoc()) :
        ?>
        <div class="hover:opacity-90 hover:rounded-[2em] hover:border-4 hover:border-[#ffca94] transition-all flex flex-col bg-white px-4 py-3 items-start justify-left rounded-tr-[2em] rounded-bl-[2em] overflow-hidden">
            <a href="product-details.php?product-details=<?= $row['id']; ?>" class="w-full">
                <div class="w-full flex flex-col justify-center items-center m-auto">
                    <img src="<?= $row['image'] ?>" class="h-48 w-48 object-cover" alt="<?= $row['name'] ?>">
                </div>
                <p class="text-lg font-bold"><?= $row['name'] ?></p>
                <?php
                $query = "SELECT * FROM products_units WHERE product_id = ?";
                $stmt = $conn->prepare($query);
                $stmt->bind_param("i", $row['id']);
                $stmt->execute();
                $result2 = $stmt->get_result();
                $row2 = $result2->fetch_assoc();

                // Check if the array is not empty
                if (!empty($row2)) {
                ?>
                <div class="text-white rounded-[5px] px-[5px] w-max">
                    <p class="mt-2">Price Start at:</p>
                    <p class="text-sm border-2 rounded-md px-4 label my-1">
                        <span><strong>PHP</strong> <?= $row2['unit_price'] ?></span>
                        <span class="color: #c6c6c6; font-size: 11px">/<?= $row2['unit'] ?></span>
                    </p>
                </div>
                <?php } ?>
            </a>
        </div>
        <?php endwhile; ?>
    </div>
    <button class="flex mt-14 text-white bg-orange-400 w-fit px-7 py-5 h-9 mx-auto items-center justify-center rounded-tr-lg rounded-bl-lg">
        Load More
    </button>
</div>
<div class="relative px-6 pt-12 pb-8 bg-[#f7f2ec]">
    <div id="about-us" class="mt-4 sm:mt-8"></div>
    <div class="flex flex-col justify-center items-center py-4 sm:py-8">
        <img src="./assets/img/DATESSHOP.jpg" class="h-auto max-h-[60vh] w-full rounded-tl-2xl rounded-br-2xl object-cover" alt="About Us Image">
    </div>
    <div class="border-t border-gray-200 mx-4"></div>
    <div class="flex flex-col justify-center items-center py-4 sm:py-8 px-4 sm:px-6">
        <h2 class="text-2xl sm:text-3xl font-black mb-4 sm:mb-6">About Us</h2>
        <p class="text-[#707070] text-center text-sm sm:text-base">
            At our shop, we take pride in offering a delightful assortment of dates and nuts to satisfy your cravings and provide you with nourishing snacks. We believe in the power of natural and wholesome foods to enhance your well-being.
        </p>
        <p class="text-[#707070] text-center text-sm sm:text-base">
            Our collection of dates includes a variety of delectable options, from soft and juicy Medjool dates to the sweet and caramel-like flavors of Deglet Noor dates. These luscious fruits are known for their natural sweetness, satisfying texture, and numerous health benefits.
        </p>
        <p class="text-[#707070] text-center text-sm sm:text-base">
            In addition to dates, we also bring you a wide selection of premium nuts. Whether you prefer the buttery richness of almonds, the crunchiness of pistachios, or the earthy goodness of walnuts, our shop offers an array of high-quality nuts to suit every taste.
        </p>
        <p class="text-[#707070] text-center text-sm sm:text-base">
            We carefully source our products from trusted suppliers who share our commitment to quality. Each date and nut is handpicked, ensuring freshness, flavor, and superior quality in every bite. Our friendly and knowledgeable team is here to assist you in finding the perfect combination of dates and nuts to suit your preferences. Whether you're looking for a healthy snack...
        </p>
        <button class="flex mt-6 sm:mt-10 text-white bg-orange-400 w-fit px-7 py-5 h-9 mx-auto items-center justify-center rounded-tr-lg rounded-bl-lg">
            Read More
        </button>
    </div>
    <div class="absolute h-full w-full floral-pattern opacity-5 top-0 left-0 z-0"></div>
</div>



<div class="flex flex-col w-full px-6 pt-8 pb-8 bg-white">
    <div class="flex flex-col items-center">
        <h1 class="my-0 text-center font-extrabold tracking-tighter">Why Choose Us?</h1>
        <p class="text-center text-[#707070] mx-4 sm:mx-[14.5vw] text-base sm:text-[1em]">Choose us for exceptional quality, a wide selection, a focus on health and wellness, knowledgeable staff, and a commitment to customer satisfaction. Experience the joy of indulging in premium dates and nuts by visiting our Dates & Nuts Shop today!</p>
    </div>
    <div class="flex flex-col sm:flex-row justify-between mt-8 sm:mt-20">
        <div class="flex flex-col items-center sm:w-[23vw]">
            <img class="w-16 h-16 sm:w-28 sm:h-28" src="./assets/icon/carts.png" alt="">
            <p class="text-center font-bold text-xl mt-4">100+ Products</p>
            <p class="text-center text-[#707070] opacity-60 text-base sm:text-[1em] mt-2">Indulge in a vast assortment of flavors and textures with our extensive selection of over 100 kinds of nuts, carefully curated to cater to every nut lover's palate.</p>
        </div>
        <div class="flex flex-col items-center sm:w-[23vw] mt-8 sm:mt-0">
            <img class="w-16 h-16 sm:w-28 sm:h-28" src="./assets/icon/fast-delivery.png" alt="">
            <p class="text-center font-bold text-xl mt-4">Delivery Anywhere in the Philippines</p>
            <p class="text-center text-[#707070] opacity-60 text-base sm:text-[1em] mt-2">We offer convenient delivery services, ensuring that our delightful assortment of dates and nuts can be enjoyed anywhere in the Philippines.</p>
        </div>
        <div class="flex flex-col items-center sm:w-[23vw] mt-8 sm:mt-0">
            <img class="w-16 h-16 sm:w-28 sm:h-28" src="./assets/icon/commission.png" alt="">
            <p class="text-center font-bold text-xl mt-4">Price lower than others</p>
            <p class="text-center text-[#707070] opacity-60 text-base sm:text-[1em] mt-2">Experience the satisfaction of shopping with us as we offer prices that are consistently lower than our competitors, ensuring you receive exceptional value without compromising on quality.</p>
        </div>
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
	<style>
		body{
			background-color: #F7F2EC;
			margin: 0;
			padding: 0;
		}
		.container > div.footer {
			padding-left: 2rem;
			padding-right: 2rem;
		}
		.flex {
			display: flex;
			gap: 20px;
		}
		.flex  a {
			 color: white !important;
		}
		.con{
			margin-bottom: 2;
			color: #DC7105
		}
		h3{
			font-weight: bold;
			margin: 0;
		}
		p{
			color: #707070;
			font-size: 11px;
			margin: 0;
		}
		.logos > a > img {
			width: 200px;
			height: auto;
		}
		.logos {
			display: flex;
		}
	</style>

	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
	<script src="https://cdn.tailwindcss.com"></script>

	</div>
      </div>
</body>

<style>
	body {
		background-color: #f5f5f5;
		font-family: 'Poppins', sans-serif;
	}

	h1 {
		font-family: 'Poppins', sans-serif;
	}

	.categories {
		gap: 15px !important;
		width: 100%;
	}

	/* .categories > div{
	width: calc(100%/6);
  } */

	.categories>div>a>div>p {
		font-size: 1em;
	}


	.products {
		gap: 15px !important;
		align-items: start;
	}

	/* .products > div{
	width: calc(100%/6);
  } */

	.products>div>a>div>div>p.label {
		font-size: 0.8em !important;
	}


	.products>div>a>div>div>p {
		font-size: 1em;
	}


	.products>div>a>div>div>span {
		font-size: 0.9em;
		color: #A2A2A2;
	}

	h2 {
		font-family: 'Poppins', sans-serif;
	}

	*,
	h3 {
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

.dates-slider .swiper-pagination-bullet {
  width: 15px;
  height: 15px;
  background-color: #cecece;
}

.swiper-scrollbar {
  visibility: hidden;
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

/* Adjust image size for mobile view */
@media (max-width: 767px) {
  .swiper-slide {
    background-size: cover;
    background-position: center;
    height: 30vh; /* Adjust the height as needed */
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

</html>