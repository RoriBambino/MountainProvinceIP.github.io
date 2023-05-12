<!DOCTYPE HTML>  
<html>
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="stylephp.css">
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
  <style>
    body{
      overflow: visible;
    }
  </style>
</head>
<body>  

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
        <div class="title"><span>Sign In Form</span></div>
        <form action="signup_check.php" method="post" >

        <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	  <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>

          <div class="row">
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          </div>
          <div class="row">
          <br>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"><br>
          <?php }?>
          </div>
          <br>
          <div class="row">
            <input type="text" name="email" placeholder="Email Address" id="email">
          </div>
          <br>
          <div class="row">
            <input type="text" name="contact" placeholder="Contact Number" id="contact">
          </div>
          <br>
          <div class="row">
            <input type="text" name="address" placeholder="Address" id="address">
          </div>
          <br>
          

          <div class="row">
           
            <input type="password" name="password" placeholder="Password">
           
          </div>
          <br>
          <div class="row">
           
            <input type="password" placeholder="Confirm Password" name="confirmpass">
           
          </div>
          
        <br>

          
          <div class="row button">
            <input type="submit" name="SignUp" value="Sign Up">
          </div>
          <div class="signup">
        <span class="signup">Already have an account?
        <a href="login.php"><label for="check">Login</label></a> 
        </span>
        </form>
        
      </div>
      </div>
    </div>

 
 
    <footer>
      <div class="watermark">
        Louie Jay L. Natividad
      </div>
    </footer>
</body>
</html>


