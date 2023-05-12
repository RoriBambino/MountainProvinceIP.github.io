<?php
session_start();

if(isset($_SESSION['id']) && ($_SESSION['user_name'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home |</title>
        <link rel="stylesheet" href="stylephp.css">
        <style>
          body{
            flex-direction: column;
            text-align: center;
          }
        </style>
      </head>
      <body>
      <p class="appology">Sorry <?php echo $_SESSION['name'];?>, This Webpage is still under construction.</p>
      <br>
      <div class="logout">
      <a href="https://roribambino.github.io/MountainProvinceWeb.github.io/">View the Mountains</a>
      </div>
      <br>
      <br>
      <div class="logout">
        <a  href="logout.php">Logout </a>
      </div>
      
        <footer>
          <div class="watermark">
            Louie Jay L. Natividad
          </div>
        </footer>
      </body>
    </html>
    <?php
    }else{
      header("Location: login.php");
      exit();   
    }
?>