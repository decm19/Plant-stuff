<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="author" content="LYH">
<title>Enquiry</title>
<link rel="stylesheet" href="style/style.css">
</head>

<body>
<?php include "header.php" ?>

<main class="form-main">
<section>

  <!-- Right side: the form card -->
  <div class="enquiry-card">
    <h1>Enquiry Form</h1>

    <form id="enquiryForm" action="#" method="post">

      <div class="name-row">
        <div class="name-field">
          <label for="firstName">First Name:</label>
          <input
            type="text"
            id="firstName"
            name="firstName"
            maxlength="25"
            pattern="[A-Za-z]+"
            title="Alphabetical characters only"
            placeholder="e.g. Jane"
            required>
        </div>

        <div class="name-field">
          <label for="lastName">Last Name:</label>
          <input
            type="text"
            id="lastName"
            name="lastName"
            maxlength="25"
            pattern="[A-Za-z]+"
            title="Alphabetical characters only"
            placeholder="e.g. Doe"
            required>
        </div>
      </div>

      <label for="email">Email Address:</label>
      <input
        type="email"
        id="email"
        name="email"
        placeholder="e.g. jane.doe@example.com"
        required>

      <label for="phone">Phone Number:</label>
      <input
        type="tel"
        id="phone"
        name="phone"
        maxlength="10"
        pattern="[0-9]{8,10}"
        title="Numbers only, up to 10 digits"
        placeholder="e.g. 0123456789"
        required>

      <label for="enquiryType">Enquiry:</label>
      <select id="enquiryType" name="enquiryType" required>
        <option value="" disabled selected>Please select</option>
        <option value="families">Families</option>
        <option value="genera">Genera</option>
        <option value="species">Species</option>
      </select>

      <label for="comments">Comments:</label>
      <textarea
        id="comments"
        name="comments"
        rows="5"
        cols="40"
        placeholder="Tell us more about your enquiry..."
        required></textarea>

      </br></br>
      <button type="submit">Submit Enquiry</button>
	  </br></br>

    </form>
  </div>

</section>
</main>

<?php include "footer.php" ?>

</body>
</html>
