<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_articles"; // Table name
  $tbl_name_2="meow_users";

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  $userNameField = $_POST['Input1'];
  $passwordField = $_POST['Input2'];

  $sql6 = "SELECT * FROM $tbl_name_2 WHERE `userName`='$userNameField' AND `password`='$passwordField'";
  $result6 = mysql_query($sql6) or die(mysql_error());
  $num6 = mysql_num_rows($result6);

  $titleField = $_POST['Input3'];
  $dateField = $_POST['Input4'];
  $messageField = $_POST['Input5'];
  $typeField = $_POST['Input6'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Success Added Article!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
    ?>
    <div class="Success2">
      <div class="Success2Main">
      <?php
        if ($num6 >= 1) {
          if(!empty($_FILES['Input7']['name'])) {
            if ($_FILES['Input7']['error'] == 0) {
              if(substr($_FILES['Input7']['type'], 0, 5)=='image') {
                $imageField = file_get_contents($_FILES['Input7']['tmp_name']);
                $imageField = mysql_escape_string($imageField);
                $sql7 = "INSERT INTO $tbl_name(`id`, `title`, `body`, `date`, `userName`, `type`, `image`) VALUES (NULL, '$titleField', '$messageField', '$dateField', '$userNameField', '$typeField', '$imageField')";
                $result7 = mysql_query($sql7) or die(mysql_error());
                if ($result7) {
                  echo "<div style='background: linear-gradient(45deg, #EECFBA, #C5DDE8);' class='HeaderBlock'><center><span>Success Added Article!</span></center></div><div class='Success2MainSpecial'><div class='Success2MainSpecialText'><center><span>You Have Successfully Added Article On This Site!</span></center></div><a href='News.php'><div class='Success2MainSpecialBtn'><center><span>Return to the News!</span><center></div></a></div>";
                } else {
                  echo "Error";
                }
              } else {
                  echo "Ваш файл не картинка!";
              }
            } else {
              echo "При загрузке была ошибка!";
            }
          } else {
            echo "Файл не пришел!";
          }
        } else if($num6 <= 0) {
            echo "<div style='background: linear-gradient(45deg, #EECFBA, #C5DDE8);' class='HeaderBlock'><center><span>Error!</span></center></div><div class='Success2MainSpecial'><div class='Success2MainSpecialText'><center><span>Please check your inputs!</span></center></div></div>";
        }
      ?>
      </div>
    </div>
    <?php
      include("includes/footerPart.php");
    ?>
  </body>
</html>
