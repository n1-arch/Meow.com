<?php
  header("content-type:image/jpeg");

  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_articles"; // Table name

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    if ($id > 0) {
      $sql13 = "SELECT `image` FROM $tbl_name WHERE `id`=".$id;
      $result13 = mysql_query($sql13) or die(mysql_error());
      if (mysql_num_rows($result13) == 1) {
        $image = mysql_fetch_array($result13) or die(mysql_error());;
        header("Content-type: image/*");
        echo $image['image'];
      }
    }
  }
?>
