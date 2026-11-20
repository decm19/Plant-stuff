<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Login Form" />
  <meta name="keywords" content="FloraDB" />
  <meta name="author" content="OYY" />
  <title>Login</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body class="page-form">
  <?php include "header.php" ?>
  <main class="form-main">
  <section>
    <form method="post" action="login_process.php">
      <h1>Login</h1>
      <p>
        <label for="username">Login:</label>
        <input type="text" id="username" name="username" maxlength="10" pattern="[A-Za-z]+" required>
      </p>
      <p>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" maxlength="25" required>
      </p>
      <button type="submit">Sign In</button>
      <button type="reset">Clear</button>
    </form>
  </section>
  </main>
  <?php include "footer.php" ?>
</body>
</html>
