<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="stylephp.css">
   <!-- Favicons -->
   <link href="Images/mountain-province-seal.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Roboto:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Work+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
<header  class="header d-flex align-items-center">
<div
        class="container-fluid container-xl d-flex align-items-center justify-content-between"
      >
        <p class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <img src="Images/Logo.png" alt=""/>
          <h1 class="landing">Mountain Province</h1>
</p>
      </div>
    </header>
  <div class="container">
    <div class="wrapper">
    
      <div class="title"><span>Login</span></div>

      <form action="login_data.php" method="post">
      <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

        <div class="row">
          <i class="fas fa-user"></i>
          <input type="text" name="uname" placeholder="User Name">
        </div>
        <div class="row">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password">
        </div>

        <div class="row button">
          <input type="submit" value="Login">
        </div>
        <div class="signup-link">Not a member? <a href="signup.php">Sign Up now</a></div>
      </form>
    </div>
  </div>
  <footer>
    <div class="watermark">
      Louie Jay L. Natividad
    </div>
  </footer>
</body>
</html>
