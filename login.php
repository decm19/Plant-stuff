<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Login Form" />
  <meta name="keywords" content="FloraDB" />
  <meta name="author" content="OYY" />
  <title>Explore</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body class="page-form">
  <?php include "header.php" ?>  
  <main class="form-main">
  <section>
  <form>
    
	<h1>Login</h1>
        <p>
        <label>Login:</label>
        <input type="text" maxlength="10" pattern="[A-Za-z]+" required>
        </p>
        <p>
        <label>Password:</label>
        <input type="text" maxlength="25" pattern="[A-Za-z]+" required>
        </p>
       
  </br></br> 
  <button type = "submit" value = "Sign In">Sign In</button> 
  <button type = "reset" value = "Clear">Clear</button> 
  </br></br>
  
  
  </form>
  </section>
  </main>
  <?php include "footer.php" ?>
</body>
</html>
