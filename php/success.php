<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Success!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
    ?>
    <div class="Success">
      <div class="SuccessMain">
        <div style="background: url('../img/ElementForMAP.jpg') no-repeat center center;" class="HeaderBlock">
          <center><span>Success Feed Back!</span></center>
        </div>
        <div class="SuccessMainSpecial">
          <div class="SuccessMainSpecialText">
            <center><span>You Have Successfully Sent A Message To Email</span></center>
          </div>
        </div>
      </div>
    </div>
    <?php
      include("includes/footerPart.php");
    ?>
  </body>
</html>
