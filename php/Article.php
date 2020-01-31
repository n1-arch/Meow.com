<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_articles"; // Table name

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - <?=$_POST['title']?></title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script type="text/javascript">
    try {
     request = new XMLHttpRequest();
    } catch (trymicrosoft) {
      try {
        request = new ActiveXObject("Msxml2.XMLHTTP");
      } catch (othermicrosoft) {
        try {
          request = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (failed) {
          request = null;
        }
      }
    }

    if (request == null)
      alert("Error creating request object!");
    function ViewComments() {
      var idField = document.getElementById('idField').value;
      var url = "../ajax/articlesComments-mysql.php?idField=" + escape(idField);
      request.open("GET", url, true);
      request.onreadystatechange = updateComments;
      request.send(null);
    }

    function updateComments() {
      if(request.readyState == 4) {
        var resultText = request.responseText;
        //alert("Text!");
        //var resultText = "Text!";
        //alert(resultText);
        var specialBlock = document.getElementById('ArticleSpecialCommentsBlock');
        specialBlock.innerHTML = resultText;
        //alert(resultText);
      }
    }
    </script>
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
      include("includes/mainPartArticle.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
