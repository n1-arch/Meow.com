<div class="Article">
  <div class="ArticleSpecial">
    <div class="ArticleSpecialTitle">
      <center><h1><?=$_POST['title'];?></h1></center>
    </div>
    <div class="ArticleSpecialBody">
      <center><h3><?=$_POST['body'];?></h3></center>
    </div>
    <div class="ArticleSpecialDate">
      <center><h4><?=$_POST['date'];?></h4></center>
    </div>
    <div class="ArticleSpecialUser">
      <center><h5><?=$_POST['user'];?></h5></center>
    </div>
    <div class="ArticleSpecialComments">
      <form action="success3.php" method="post">
        <div class="ArticleSpecialCommentsInputs">
          <center><input type="text" name="Input1" placeholder="Enter Your Login..."></center>
          <center><input type="password" name="Input2" placeholder="Enter Your Password..."></center>
          <center><textarea name="Input3" rows="8" cols="80" placeholder="Enter Text..."></textarea></center>
          <input type="hidden" id="idField" name="Input4" value="<?=$_POST['id'];?>">
          <div class="ArticleSpecialCommentsInputsBtn">
            <input type="submit" value="Create a Comment!">
          </div>
        </div>
      </form>
      <div class="ArticleSpecialCommentsBtn">
        <input type="button" onclick="ViewComments()" value="View All Comments">
      </div>
      <div id='ArticleSpecialCommentsBlock' class="ArticleSpecialCommentsBlock">

      </div>
    </div>
  </div>
</div>
