<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Register Process" />
    <meta name="keywords" content="FloraDB" />
    <meta name="author" content="VWZ" />
	<title>Register Process</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body class="page-form">
<?php include "header.php" ?>

<main class="form-main">
<section>

	<h1>Registration Successful</h1>

	<p>
	Welcome <?php echo $_POST["fname"]; ?> <?php echo $_POST["lname"]; ?><br/>
	Your username is: <?php echo $_POST["username"]; ?><br/>
	Your email address is: <?php echo $_POST["email"]; ?><br/>
	Telephone: <?php echo $_POST["phone"]; ?><br/>
	Your address is: <?php echo $_POST["address"]; ?>, <?php echo $_POST["postcode"]; ?> <?php echo $_POST["cityname"]; ?>, <?php echo $_POST["state"]; ?>
	</p>

</section>
</main>

<?php include "footer.php" ?>	
</body>
</html>