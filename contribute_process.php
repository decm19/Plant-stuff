<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Register Process" />
    <meta name="keywords" content="FloraDB" />
    <meta name="author" content="VWZ" />
	<title>Contribution submitted!</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body class="page-form">
<?php include "header.php" ?>

<main class="form-main">
<section>

	<h1>Contribution Complete!</h1>

	<p>Here are the details of your submission.</p>

	<p>
		Contributor name: <?php echo $_POST["contributor_name"]; ?><br/>
		Plant name: <?php echo $_POST["plant_name"]; ?><br/>
		Image of plant: <img src="<?php echo $_POST["plant_image"]; ?>" ><br/>
		Comments: <?php echo $_POST["comments"]; ?><br/>
	</p>

</section>
</main>

<?php include "footer.php" ?>	
</body>
</html>
