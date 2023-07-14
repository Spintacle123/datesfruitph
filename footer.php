<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
   <!-- <link rel="stylesheet" type="text/css" href="css/footer.css"> -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div id="contact-us" class="footer border-t border-gray-300">
		<div class="container" style="padding-top: 0px">
			<div class="footer flex foot px-32">
				<div style="margin-right: 400px">
					<div class="-mt-6 ml-12 flex">
						<a href="home.php" class="rounded-full h-24 w-24 overflow-hidden">
							<img src="./assets/datesfruits.png" class="">
						</a>
					</div>
					<h3>DATES FRUITS PH</h3>
					<p class="ml-7">hello@datefruits.com.ph</p>
				</div>
				<div class="mt-3">
					<p class="mt-5">Contact Us: </p>
					<p class="con">(833-1931) / +639123456789</p>
					<p class="mt-5">Follow Us: </p>
					<div class="grid grid-cols-1 md:grid-cols-3 gap-4">
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
		<div class="copyright">
			<?php 
				$date = date('Y');
				echo '<p class="copyright">Copyright '.$date.' - Datesfruitsph All right reserved </p>';
			?>
		</div>
	</div>
	<style>
		body{
			background-color: #F7F2EC;
		}
		.container > div.footer {
			display: flex;
			align-items: center;
			justify-content: space-between;
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
		}
		p{
			color: #707070;
			font-size: 11px;
		}
		.copyright{
			text-align: center;
			margin-bottom: 15px
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
</body>

</html>
 
