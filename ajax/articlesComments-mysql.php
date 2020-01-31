<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_comments"; // Table name

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");
  $idField = $_REQUEST['idField'];
  //echo "$idField";

  $sql17 = "SELECT * FROM $tbl_name WHERE idArticle='$idField'";
  //echo "$sql17";
  $result17 = mysql_query($sql17);// or die(mysql_error());

  while ($rowC = mysql_fetch_array($result17)) {
    printf("<div class='ArticleSpecialCommentsBlockComment'><div class='ArticleSpecialCommentsBlockCommentUser'><center><h3>%s</h3></center></div><div class='ArticleSpecialCommentsBlockCommentText'><center><h4>%s</h4></center></div><div class='ArticleSpecialCommentsBlockCommentDate'><center><h5>%s</h5></center></div></div>", $rowC[2], $rowC[3], $rowC[4]);
  }
?>
