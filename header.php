<?php
session_start();

$currentUrl = $_SERVER['REQUEST_URI']; // Get the current page URL
$currentPage = basename($currentUrl);

// Check if the current page URL matches the specific page
$isSpecificPage = ($currentPage === 'home.php'); // Replace '/specific-page' with the actual path or identifier of your specific page
?>
<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>

   <!-- <link rel="stylesheet" type="text/css" href="css/homestyle1.css"> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- rating -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
   <div class="navbar px-[19rem] pt-3 pb-5 h-[6rem] bg-black border-b-4 border-yellow-400 floral-pattern">
      <div class="logos -mb-20">
         <a href="home.php" class="rounded-full h-[9rem] w-[9rem] overflow-hidden">
            <img src="./assets/datesfruits.png" class="">
         </a>
      </div>
      <nav class="flex flex-col">
         <ul id="MenuItems" class="flex items-center ml-auto mr-0 justify-between">
            <?php if (!$isSpecificPage) : ?>
               <li class="w-[7.5rem] overflow-hidden"><a href="home.php">Home</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="products.php">Products</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="gifting.php">Gifting</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="home.php#about-us">About Us</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="home.php#contact-us">Contact</a></li>
            <?php endif; ?>
            <?php if ($isSpecificPage) : ?>
               <li class="w-[7.5rem] overflow-hidden"><a href="#home">Home</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="products.php">Products</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="gifting.php">Gifting</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="#about-us">About Us</a></li>
               <li class="w-[7.5rem] overflow-hidden"><a href="#contact-us">Contact</a></li>
            <?php endif; ?>
         </ul>
      </nav>
   </div>

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
   </script>
   <script src="https://cdn.tailwindcss.com"></script>
</body>

<style>
   *,
   body {
      font-family: 'Poppins', sans-serif;
   }

   h5 {
      font-family: 'Poppins', sans-serif;
      color: #abff5f;
      margin-left: 30px;
      border-left: 2px solid;
      padding-left: 20px;
      display: flex;
      justify-content: center;
      align-content: center;
      gap: 5px;
   }

   .logos {
      display: flex;
   }

   nav ul li:hover {
      /* background-color: none; */
   }

   .logos>a>img {
      width: 200px;
      height: auto;
   }

   .a-address {
      margin-top: 7px;
      margin-left: 20px;
   }

   .navbar {
      border-radius: 0px;
      z-index: 9999;
   }

   .cart {
      display: flex;
      justify-content: center;
      align-items: 'center';
      position: relative;
      margin-bottom: -20px;
   }

   .cart>span,
   .cart>svg {
      margin-bottom: -10px !important;
   }

   .cart>#cart-item {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 20px;
      width: 20px;
      position: absolute;
      background-color: red !important;
      color: white !important;
      font-size: 10px;
      margin-right: -25px;
      margin-top: -5px;
   }

   .floral-pattern {
      background-image: url('./images/pats.png');
      background-size: 40%;
      background-repeat: repeat;
   }
</style>

</html>