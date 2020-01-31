<?php
  session_start();
  if(isset($_POST["sub1"])) {
    $from = htmlspecialchars($_POST["Input1"]);
    $to = htmlspecialchars($_POST["Input2"]);
    $message = htmlspecialchars($_POST["Input3"]);
    $_SESSION["Input1"] = $from;
    $_SESSION["Input2"] = $to;
    $_SESSION["Input3"] = $message;
    $error_from = "";
    $error_to = "";
    $error_message = "";
    $error = false;

    if($from == "" || !preg_match("/@/", $from)) {
      $error_from = "Enter Correct Email!";
      $error = true;
    }

    if($to == "" || !preg_match("/@/", $to)) {
      $error_to = "Enter Correct Email!";
      $error = true;
    }

    if(strlen($message) == 0) {
      $error_from = "Enter Correct Message!";
      $error = true;
    }

    if(!$error) {
      $headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plane; charset=utf-8\r\n";
      mail($to, $message, $headers);
      header("Location: success.php");
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Contacts!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
      include("includes/mainPartContacts.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
