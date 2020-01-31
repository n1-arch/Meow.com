<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Sign In!</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="shortcut icon" href="../img/ShortCutIcon.png" type="image/png">
    <!--<link rel="stylesheet" href="../technologes/fonts/fontawesome.min.css">-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--<script type="text/javascript">
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
    function SignInUser() {
      var userNameField = document.getElementById('userNameField').value;
      var passwordField = document.getElementById('passwordField').value;
      var url = "../ajax/signIn-mysql.php?userNameField=" + escape(userNameField) +
                                        "&passwordField=" + escape(passwordField);
      request.open("GET", url, true);
      request.onreadystatechange = updateSignInUser;
      request.send(null);
    }

    function updateSignInUser() {
      if(request.readyState == 4) {
        var resultText = request.responseText;
        var specialBlock = document.getElementById('SignInMainSpecial');
        specialBlock.innerHTML = resultText;
      }
    }
  </script>-->
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
      include("includes/mainPartSignIn.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
