<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="meow.com"; // Database name
$tbl_name="meow_users"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die(mysql_error());
mysql_select_db("$db_name")or die(mysql_error());

$userNameField2 = $_POST['userNameField2'];
$passwordField2 = $_POST['passwordField2'];

$firstNameField = $_POST['firstNameField'];
$lastNameField = $_POST['lastNameField'];
$userName = $_POST['userNameField'];
$passwordField = $_POST['passwordField'];
$emailField = $_POST['emailField'];
$statusField = $_POST['statusField'];
$hobbyField = $_POST['hobbyField'];
$ageField = $_POST['ageField'];
$countryField = $_POST['countryField'];
$cityField = $_POST['cityField'];

$sql10 = "UPDATE $tbl_name SET firstName='$firstNameField', lastName='$lastNameField', userName='$userNameField', password='$passwordField', email='$emailField' WHERE userName='$userNameField2' AND password='$passwordField2'";
$result10 = mysql_query($sql10);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - All Users!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
      include("includes/mainPartAllUsers.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
