<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="author" content="LYH">
<title>Contribution Form</title>
<link rel="stylesheet" href="style/style.css">
</head>

<body class="page-form">
<?php include "header.php" ?>
  <main class="form-main">
  <section>
    <h1>Contribution Form</h1>
    <form id="contribute" method="post" action="mailto:abc@gmail.com">
      <p>
        <label for="contributor_name">Contributor name:</label>
        <input type="text" id="contributor_name" name="contributor_name" required maxlength="25" pattern="[a-zA-Z ]+">
      </p>

      <p>
        <label for="plant_name">Plant name:</label>
        <input type="text" id="plant_name" name="plant_name" required maxlength="25" pattern="[a-zA-Z ]+">
      </p>

      <p>
        <label for="plant_image">Upload image of plant:</label>
        <input type="file" id="plant_image" name="plant_image" required>
      </p>
      
      <p>
        <label for="comments">Comments:</label>
        <textarea rows="5" cols="30" id="comments" name="comments"></textarea>
      </p>
      
      <button type="submit" value="Submit">Submit</button>
    </form>
  </section>
  </main>
    <?php include "footer.php" ?>
</body>

</html>
