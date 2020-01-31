<?php
  $host="localhost"; // Host name
  $username="root"; // Mysql username
  $password=""; // Mysql password
  $db_name="meow.com"; // Database name
  $tbl_name="meow_articles"; // Table name

  // Connect to server and select databse.
  mysql_connect("$host", "$username", "$password")or die("cannot connect");
  mysql_select_db("$db_name")or die("cannot select DB");

  $sql8 = "SELECT * FROM $tbl_name WHERE type='IT'";
  $result8 = mysql_query($sql8);// or die(mysql_error());

  while ($rowArt = mysql_fetch_array($result8)) {
    printf("<form action='Article.php' method='POST'><div class='NewsMainSpecialArticle' style='background: url(image2.php?id=%s) no-repeat center center;'><div class='NewsMainSpecialArticleTitle'><center><h1>%s</h1></center></div><input type='hidden' name='id' value='%s'><input type='hidden' name='title' value='%s'><input type='hidden' name='body' value='%s'><input type='hidden' name='date' value='%s'><input type='hidden' name='user' value='%s'><input type='hidden' name='type' value='%s'><div class='NewsMainSpecialArticleBtn'><center><input type='submit' name='sub2' value='View More!'></center></div></div></form>", $rowArt[0], $rowArt[1], $rowArt[0], $rowArt[1], $rowArt[2], $rowArt[3], $rowArt[4], $rowArt[5]);
  }
?>
