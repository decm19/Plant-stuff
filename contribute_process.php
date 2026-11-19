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
	<?php if (isset($_POST['contributor_name'])) {?>

		<h1>Contribution Complete!</h1>

		<p>Here are the details of your submission.</p>

		<?php 
			$connection = include "db/connect.php";

			$sql = "INSERT INTO contributions (contributor_name, plant_name, file_name,	comments) VALUES (\"" . $_POST['contributor_name'] . "\", \"" . $_POST['plant_name'] . "\", \"". $_POST['plant_image'] . "\", \"" . $_POST['comments'] . "\")";
			if (!mysqli_query($connection, $sql)) {
				die("Error adding contribution. Please report this error and include this error message:" . mysqli_error($connection));
			}

		?>

		<p>
			Contributor name: <?php echo $_POST["contributor_name"]; ?><br/>
			Plant name: <?php echo $_POST["plant_name"]; ?><br/>
			Image of plant: <img src="<?php echo $_POST["plant_image"]; ?>" ><br/>
			Comments: <?php echo $_POST["comments"]; ?><br/>
		</p>

	<?php } else {?>

		<p>Error parsing your contribution request. Did you arrive here from the contribution form? If you did, please report this error and attach a screenshot of this page.</p>

	<?php } ?>

</section>
</main>

<?php include "footer.php" ?>	
</body>
</html>
