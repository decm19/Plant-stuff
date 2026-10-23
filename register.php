<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Register Form" />
  <meta name="keywords" content="FloraDB" />
  <meta name="author" content="VWZ" />
<title>Register</title>
 <link rel="stylesheet" href="style/style.css">

</head>
<body>
<?php include "header.php" ?>

<main class="form-main">
<section>
<form id="detail" method="post" action="mailto:106758389@students.swinburne.edu.my" >


<h1>Register Form</h1>

<div class="form-personal">

	<label for ="fname">First name:</label>
	<input type="text" id="fname"  name="fname" placeholder="Your first name" required="required" maxlength="25" size="30" pattern="[A-Za-z]+" /><br/> 
	
	<label for ="lname">Last name:</label>
	<input type="text" id="lname"  name="lname" placeholder="Your last name" required="required" maxlength="25" size="30" pattern="[A-Za-z]+" /><br/> 
	
	<label for="email">Email:</label>
	<input type="email" name="contact"  placeholder="name@domain.com" required = "required" size="30"/> 
	

</div>


<fieldset>
    <legend>Address</legend>
        
		<label for ="street">Street Address:</label>
		<input type="text" id="street"  name="street address" required="required" maxlength="40" size="40" /><br/> 
        
		<label for ="cityname">City/Town:</label>
		<input type="text" id="cityname"  name="cityname" placeholder="e.g. Kuching" required="required" maxlength="20" size="30" /><br/> 
	    
		<label>State:</label>
		             <select name="state">
					        <option selected>Johor</option>
							<option>Kedah</option>
							<option>Kelantan</option>
							<option>Melaka</option>
							<option>Negeri Sembilan</option>
							<option>Pahang</option>
							<option>Penang</option>
							<option>Perak</option>
							<option>Perlis</option>
							<option>Selangor</option>
							<option>Terengganu</option>
							<option>Kuala Lumpur</option>
							<option>Putrajaya</option>
							<option>Sabah</option>
							<option>Sarawak</option>
							<option>Labuan</option>
					 </select><br/>
		
		<label for ="postcode">Postcode:</label>
		<input type="text" id="postcode"  name="postcode" required="required" maxlength="5" size="10" /><br/> 
</fieldset>

<p><label>Phone 
<input type="tel" name="phone" 
placeholder="(##) ####-####"  required="required" pattern="\(\d{2}\) +\d{4}-\d{4}" /> 
</label></p> 


</br></br> 

<button type = "submit" value = "Submit">Register</button> 
<button type = "reset" value = "Reset">Reset</button> 
</br></br>


</form>
</section>
</main>

<?php include "footer.php" ?>

</body>
</html>
