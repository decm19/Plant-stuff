<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Register Process" />
    <meta name="keywords" content="FloraDB" />
    <meta name="author" content="VWZ" />
	<title>Login Process</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body class="page-form">
<?php include "header.php" ?>

<main class="form-main">
<section>
    <h1>Login Successful</h1>

	<p>
    	Welcome <?php echo $_POST["username"]; ?><br/>
	</p><a href="index.php">Return to Index Page</a></p>

</section>
</main>

<?php include "footer.php" ?>	
</body>
</html>