<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_comments"; // Table name
  $tbl_name_2="meow_users";

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  $userNameField = $_POST['Input1'];
  $passwordField = $_POST['Input2'];

  $sql15 = "SELECT * FROM $tbl_name_2 WHERE `userName`='$userNameField' AND `password`='$passwordField'";
  $result15 = mysql_query($sql15) or die(mysql_error());
  $num15 = mysql_num_rows($result15);

  $textField = $_POST['Input3'];
  $idField = $_POST['Input4'];
  $dateField = date("Y-m-d h:i:sa");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Success Added Comment!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
    ?>
    <div class="Success3">
      <div class="Success3Main">
      <?php
        if ($num15 >= 0) {
          $sql16 = "INSERT INTO $tbl_name(`id`, `idArticle`, `userName`, `messageText`, `messageDate`) VALUES (NULL, '$idField', '$userNameField', '$textField', '$dateField')";
          $result16 = mysql_query($sql16) or die(mysql_error());
          if ($result16) {
            echo "<div style='background: linear-gradient(45deg, #EECFBA, #C5DDE8);' class='HeaderBlock'><center><span>Success Added Article!</span></center></div><div class='Success3MainSpecial'><div class='Success3MainSpecialText'><center><span>You Have Successfully Added Article On This Site!</span></center></div><a href='News.php'><div class='Success3MainSpecialBtn'><center><span>Return to the News!</span><center></div></a></div>";
          } else {
            echo "Error";
          }
        } else if($num15 <= 0) {
          echo "<div style='background: linear-gradient(45deg, #EECFBA, #C5DDE8);' class='HeaderBlock'><center><span>Error!</span></center></div><div class='Success3MainSpecial'><div class='Success3MainSpecialText'><center><span>Please check your inputs!</span></center></div></div>";
        }
      ?>
      </div>
    </div>
    <?php
      include("includes/footerPart.php");
    ?>
  </body>
</html>
