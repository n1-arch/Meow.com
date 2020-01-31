<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meow.com - Create Your Account!</title>
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
    function SignUpUser() {
      var firstNameField = document.getElementById('firstNameField').value;
      var lastNameField = document.getElementById('lastNameField').value;
      var userNameField = document.getElementById('userNameField').value;
      var passwordField = document.getElementById('passwordField').value;
      var emailField = document.getElementById('emailField').value;
      var statusField = document.getElementById('statusField').value;
      var hobbyField = document.getElementById('hobbyField').value;
      var ageField = document.getElementById('ageField').value;
      var countryField = document.getElementById('countryField').value;
      var cityField = document.getElementById('cityField').value;
      var url = "../ajax/signUp-mysql.php?firstNameField=" + escape(firstNameField) +
                                        "&lastNameField=" + escape(lastNameField) +
                                        "&userNameField=" + escape(userNameField) +
                                        "&passwordField=" + escape(passwordField) +
                                        "&emailField=" + escape(emailField) +
                                        "&statusField=" + escape(statusField) +
                                        "&hobbyField=" + escape(hobbyField) +
                                        "&ageField=" + escape(ageField) +
                                        "&countryField=" + escape(countryField) +
                                        "&cityField=" + escape(cityField);
      request.open("GET", url, true);
      request.onreadystatechange = updateSignUpUser;
      request.send(null);
    }

    function updateSignUpUser() {
      if(request.readyState == 4) {
        var resultText = request.responseText;
        var specialBlock = document.getElementById('SignUpMainSpecial');
        specialBlock.innerHTML = resultText;
      }
    }
  </script>-->
  </head>
  <body>
    <?php
      include("includes/headerPart.php");
      include("includes/mainPartSignUp.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
