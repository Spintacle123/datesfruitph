<?php
   session_start();
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- rating -->
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

   
         <div class="navbar">
            <div class="logos">
               <a href="home.php">
               <a href="home.php">
                  <img src="./assets/img/datesfruits.jpg" style="border-radius: 10rem; heigth: 45px; width: 45px"></a>
                  <h5 style="color:#fff">Dates Fruits</h5>
               </a>
            </div>
            <nav>
               <ul id="MenuItems">
                  <li><a href="home.php">Home</a></li>
                  <li><a href="products.php">Products</a></li>
                  <li><a href="aboutus.php">About Us</a></li>
                  <li><a href="inquire.php">Contact Us</a></li>
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

<style>

   h5{
      font-family: 'Josefin Sans', sans-serif;
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

   nav ul li:hover{
      background-color: none;
   }

   .logos > a > img {
      width: 200px;
      height: auto;
   }

   .a-address{
      margin-top: 7px;
      margin-left: 20px;
   }

   .navbar {
      border-radius: 0px;
      padding-left: 8rem;
      padding-right: 8rem;
      z-index: 9999;
   }

   .cart {
      display: flex;
      justify-content: center;
      align-items: 'center';
      position: relative;
      margin-bottom: -20px;
   }

   .cart > span,
   .cart > svg {
      margin-bottom: -10px !important;
   }

   .cart > #cart-item {
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
</style>


</html>
