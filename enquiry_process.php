<?php
/* Remove surrounding whitespace and slashes from text input */
function sanitise_input($data) {
	return stripslashes(trim($data));
}

/* Escape a value for safe display in HTML */
function e($data) {
	return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
}

$ok = false;
$errors = array();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["firstName"])) {

	$firstname = sanitise_input($_POST["firstName"]);
	$lastname  = isset($_POST["lastName"])    ? sanitise_input($_POST["lastName"])    : "";
	$email     = isset($_POST["email"])       ? sanitise_input($_POST["email"])       : "";
	$phone     = isset($_POST["phone"])       ? sanitise_input($_POST["phone"])       : "";
	$enquiry   = isset($_POST["enquiryType"]) ? sanitise_input($_POST["enquiryType"]) : "";
	$comments  = isset($_POST["comments"])    ? sanitise_input($_POST["comments"])    : "";

	/* Server-side validation */
	if (!preg_match("/^[A-Za-z]{1,25}$/", $firstname)) {
		$errors[] = "First name must be 1 to 25 alphabetical characters only.";
	}
	if (!preg_match("/^[A-Za-z]{1,25}$/", $lastname)) {
		$errors[] = "Last name must be 1 to 25 alphabetical characters only.";
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50) {
		$errors[] = "Please enter a valid email address (max 50 characters).";
	}
	if (!preg_match("/^[0-9]{8,10}$/", $phone)) {
		$errors[] = "Phone number must be 8 to 10 digits only.";
	}
	if (!in_array($enquiry, array("families", "genera", "species"), true)) {
		$errors[] = "Please select a valid enquiry type.";
	}
	if ($comments === "") {
		$errors[] = "Comments are required.";
	}

	if (empty($errors)) {
		$connection = include "db/connect.php";

		/* Table normally created by db/init.php; this is a safety net */
		mysqli_query($connection, "CREATE TABLE IF NOT EXISTS enquiries (
			id INT(6) UNSIGNED AUTO_INCREMENT UNIQUE PRIMARY KEY,
			firstname VARCHAR(30) NOT NULL,
			lastname VARCHAR(30),
			email VARCHAR(50),
			phone VARCHAR(20),
			enquiry VARCHAR(20),
			comments TEXT
		)");

		$stmt = mysqli_prepare($connection, "INSERT INTO enquiries (firstname, lastname, email, phone, enquiry, comments) VALUES (?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $lastname, $email, $phone, $enquiry, $comments);

		if (mysqli_stmt_execute($stmt)) {
			$ok = true;
		} else {
			die("Error adding enquiry. Please report this error and include this error message: " . mysqli_error($connection));
		}
		mysqli_stmt_close($stmt);
		mysqli_close($connection);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Enquiry Process" />
	<meta name="keywords" content="FloraDB" />
	<meta name="author" content="LYH" />
	<title>Enquiry Process</title>
	<link rel="stylesheet" href="style/style.css">
</head>
<body class="page-form">
<?php include "header.php" ?>

<main class="form-main">
<section>
	<?php if ($ok) { ?>

		<h1>Enquiry Submitted</h1>

		<p>Thank you! Here are the details of your enquiry.</p>

		<p>
			Name: <?php echo e($firstname); ?> <?php echo e($lastname); ?><br/>
			Email address: <?php echo e($email); ?><br/>
			Telephone: <?php echo e($phone); ?><br/>
			Enquiry about: <?php echo e(ucfirst($enquiry)); ?><br/>
			Comments: <?php echo nl2br(e($comments)); ?><br/>
		</p>

		<p><a href="enquiry.php">Submit another enquiry</a></p>

	<?php } elseif (!empty($errors)) { ?>

		<h1>Enquiry Not Submitted</h1>

		<p>Please fix the following and try again:</p>
		<p>
		<?php foreach ($errors as $error) { echo e($error) . "<br/>"; } ?>
		</p>
		<p><a href="enquiry.php">Back to Enquiry Form</a></p>

	<?php } else { ?>

		<p>Error parsing your enquiry. Did you arrive here from the enquiry form? If you did, please report this error and attach a screenshot of this page.</p>

	<?php } ?>
</section>
</main>

<?php include "footer.php" ?>
</body>
</html>

