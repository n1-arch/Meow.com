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
function ViewUser() {
  var firstNameField = document.getElementById('firstNameField').value;
  var lastNameField = document.getElementById('lastNameField').value;
  var userNameField = document.getElementById('userNameField').value;
  var passwordField = document.getElementById('passwordField').value;
  var emailField = document.getElementById('emailField').value;
  var url = "../ajax/UserInterface.php?firstNameField=" + escape(firstNameField) +
                                    "&lastNameField=" + escape(lastNameField) +
                                    "&userNameField=" + escape(userNameField) +
                                    "&passwordField=" + escape(passwordField) +
                                    "&emailField=" + escape(emailField);
  request.open("GET", url, true);
  request.onreadystatechange = updateViewUser;
  request.send(null);
}

function updateViewUser() {
  if(request.readyState == 4) {
    var resultText = request.responseText;
    var specialBlock = document.getElementById('SignInMainSpecial');
    specialBlock.innerHTML = resultText;
  }
}
</script>-->

<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_users"; // Table name

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  $userNameField = $_POST['userNameField'];
  $passwordField = $_POST['passwordField'];

  $sql3 = "SELECT * FROM $tbl_name WHERE userName='$userNameField' AND password='$passwordField'";
  $result3 = mysql_query($sql3);
  $sql4 = "SELECT * FROM $tbl_name";
  $result4 = mysql_query($sql4) or die(mysql_error());
  $num = mysql_num_rows($result3);
  $row = mysql_fetch_array($result3);
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
      include("includes/mainPartAllUsersSignIn.php");
      include("includes/footerPart.php");
    ?>
  </body>
</html>
