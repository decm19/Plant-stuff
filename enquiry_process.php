<?php
/*
 * File:        enquiry_process.php
 * Author:      LYH
 * Description: Receives the enquiry form, sanitises and validates the input,
 *              stores it in the enquiry table (mysqli) and shows the saved details.
 */

/* ---- Database settings: change to match your XAMPP setup ---- */
$host   = "localhost";
$user   = "root";
$pwd    = "";
$sql_db = "plants_db";

/* Remove surrounding whitespace and slashes from text input */
function sanitise_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return $data;
}

/* Escape a value for safe display in HTML */
function e($data) {
    return htmlspecialchars($data, ENT_QUOTES, "UTF-8");
}

/* Only accept data arriving from the form */
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: enquiry.php");
    exit();
}

$first_name   = isset($_POST["firstName"])   ? sanitise_input($_POST["firstName"])   : "";
$last_name    = isset($_POST["lastName"])    ? sanitise_input($_POST["lastName"])    : "";
$email        = isset($_POST["email"])       ? sanitise_input($_POST["email"])       : "";
$phone        = isset($_POST["phone"])       ? sanitise_input($_POST["phone"])       : "";
$enquiry_type = isset($_POST["enquiryType"]) ? sanitise_input($_POST["enquiryType"]) : "";
$comments     = isset($_POST["comments"])    ? sanitise_input($_POST["comments"])    : "";

/* ---------- Server-side validation ---------- */
$errors = array();

if (!preg_match("/^[A-Za-z]{1,25}$/", $first_name)) {
    $errors[] = "First name must contain 1 to 25 alphabetical characters only.";
}
if (!preg_match("/^[A-Za-z]{1,25}$/", $last_name)) {
    $errors[] = "Last name must contain 1 to 25 alphabetical characters only.";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 100) {
    $errors[] = "Please enter a valid email address (max 100 characters).";
}
if (!preg_match("/^[0-9]{8,10}$/", $phone)) {
    $errors[] = "Phone number must contain 8 to 10 digits only.";
}
if (!in_array($enquiry_type, array("families", "genera", "species"), true)) {
    $errors[] = "Please select a valid enquiry type.";
}
if ($comments === "" || strlen($comments) > 1000) {
    $errors[] = "Comments are required and must be 1000 characters or fewer.";
}

/* ---------- Save to database ---------- */
$saved = null;

if (empty($errors)) {
    $conn = @mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        $errors[] = "Sorry, we could not connect to the database. Please try again later.";
    } else {
        /* Create the table the first time this page runs */
        mysqli_query($conn, "CREATE TABLE IF NOT EXISTS enquiry (
            enquiry_id   INT UNSIGNED NOT NULL AUTO_INCREMENT,
            first_name   VARCHAR(25)  NOT NULL,
            last_name    VARCHAR(25)  NOT NULL,
            email        VARCHAR(100) NOT NULL,
            phone        VARCHAR(10)  NOT NULL,
            enquiry_type ENUM('families','genera','species') NOT NULL,
            comments     TEXT         NOT NULL,
            submitted_at TIMESTAMP    NOT NULL DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (enquiry_id)
        )");

        $sql  = "INSERT INTO enquiry (first_name, last_name, email, phone, enquiry_type, comments)
                 VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "ssssss",
            $first_name, $last_name, $email, $phone, $enquiry_type, $comments);

        if (mysqli_stmt_execute($stmt)) {
            $new_id = mysqli_insert_id($conn);
            mysqli_stmt_close($stmt);

            /* Read the saved record back to show what is in the database */
            $stmt = mysqli_prepare($conn, "SELECT enquiry_id, first_name, last_name, email, phone,
                                                  enquiry_type, comments, submitted_at
                                           FROM enquiry WHERE enquiry_id = ?");
            mysqli_stmt_bind_param($stmt, "i", $new_id);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $saved  = mysqli_fetch_assoc($result);
            mysqli_stmt_close($stmt);
        } else {
            $errors[] = "Sorry, your enquiry could not be saved. Please try again.";
            mysqli_stmt_close($stmt);
        }
        mysqli_close($conn);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="author" content="LYH">
<title>Enquiry Confirmation</title>
<link rel="stylesheet" href="style/style.css">
</head>

<body>
<?php include "header.php" ?>

<main class="form-main">
<section>
  <div class="enquiry-card">

<?php if ($saved): ?>
    <h1>Thank You</h1>
    <p><strong>Success:</strong> your enquiry has been submitted. Here are the details we received:</p>

    <table>
      <tr><th scope="row">Reference No.</th><td><?php echo e($saved["enquiry_id"]); ?></td></tr>
      <tr><th scope="row">Name</th><td><?php echo e($saved["first_name"] . " " . $saved["last_name"]); ?></td></tr>
      <tr><th scope="row">Email</th><td><?php echo e($saved["email"]); ?></td></tr>
      <tr><th scope="row">Phone</th><td><?php echo e($saved["phone"]); ?></td></tr>
      <tr><th scope="row">Enquiry Type</th><td><?php echo e(ucfirst($saved["enquiry_type"])); ?></td></tr>
      <tr><th scope="row">Comments</th><td><?php echo nl2br(e($saved["comments"])); ?></td></tr>
      <tr><th scope="row">Submitted</th><td><?php echo e($saved["submitted_at"]); ?></td></tr>
    </table>

    <p><a href="enquiry.php">Submit another enquiry</a></p>

<?php else: ?>
    <h1>Submission Failed</h1>
    <p>Please fix the following and try again:</p>
    <ul>
<?php foreach ($errors as $error): ?>
      <li><?php echo e($error); ?></li>
<?php endforeach; ?>
    </ul>
    <p><a href="enquiry.php">Back to Enquiry Form</a></p>
<?php endif; ?>

  </div>
</section>
</main>

<?php include "footer.php" ?>

</body>
</html>
