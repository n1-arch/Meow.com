<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_users"; // Table name

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  $firstNameField = $_POST['firstNameField'];
  $lastNameField = $_POST['lastNameField'];
  $userNameField = $_POST['userNameField'];
  $passwordField = $_POST['passwordField'];
  $emailField = $_POST['emailField'];
  $statusField = $_POST['statusField'];
  $hobbyField = $_POST['hobbyField'];
  $ageField = $_POST['ageField'];
  $countryField = $_POST['countryField'];
  $cityField = $_POST['cityField'];

  if(!empty($_FILES['imgField']['name'])) {
    if ($_FILES['imgField']['error'] == 0) {
      if(substr($_FILES['imgField']['type'], 0, 5)=='image') {
        $imageField = file_get_contents($_FILES['imgField']['tmp_name']);
        $imageField = mysql_escape_string($imageField);
        $sql2 = "INSERT INTO $tbl_name(`id`, `firstName`, `lastName`, `userName`, `password`, `email`, `status`, `hobby`, `birthday`, `country`, `city`, `image`) VALUES (NULL, '$firstNameField', '$lastNameField', '$userNameField', '$passwordField', '$emailField', '$statusField', '$hobbyField', '$ageField', '$countryField', '$cityField', '$imageField')";
        $result2 = mysql_query($sql2);
        $sql5 = "SELECT * FROM $tbl_name";
        $result5 = mysql_query($sql5);
      } else {
          echo "Ваш файл не картинка!";
      }
    } else {
      echo "При загрузке была ошибка!";
    }
  } else {
    echo "Файл не пришел!";
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Create Account!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
      include("includes/mainPartAllUsersSignUp.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
