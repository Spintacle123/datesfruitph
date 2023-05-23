<?php
  include('process.php')
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Menu</title>
	<link rel="stylesheet" type="text/css" href="css/prod17.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> <!-- addtocart -->
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;0,600;0,700;1,500;1,600;1,700&family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="header">
		<?php include("header.php") ?>
	</div>

	
		<div class="sort">
      <form method="post" action="inquire.php" id="register_form">
        <div class="inquire">
            <div class="img-i"></div>
            <div>
              <h1>For Inquiries</h1>
              <span class="desc">"If you have any inquiries about our tools, our knowledgeable and friendly team is always here to assist you and provide expert guidance."</span>
              <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
                <input style="padding: 20px" type="email" name="email" placeholder="Enter Email" value="<?php echo $email; ?>" required>
                <?php if (isset($email_error)): ?>
                  <span><?php echo $email_error; ?></span>
                <?php endif ?>
              </div>
              <div>
                <textarea style="width: 100%;padding: 20px" rows="10" type="text" name="message" placeholder="Enter your message" value="<?php echo $message; ?>" required></textarea>
              </div>
            
              <div>
                <button type="submit" name="inquire" id="reg_btn">Inquire</button>
              </div>
            </div>
        </div>
      </form>
		</div>
	
	<!------- footer ------->
	<?php include("footer.php") ?>