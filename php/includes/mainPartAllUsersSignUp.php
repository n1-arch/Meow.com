<div class="AllUsers">
  <div class="AllUsersMain">
    <div style="background: url('../img/ElementForSUM.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span>All Users!</span></center>
    </div>
    <div class="AllUsersMainSpecial">
      <div class="AllUsersMainSpecialUsers">
        <?php
          if ($result2) {
            echo "<div class='AllUsersMainSpecialUsersHello'><h1>Hello $firstNameField, $lastNameField!</h1></div>";

            while ($rowU = mysql_fetch_array($result5)) {
              printf("<form method='POST' action='UserInterface.php'><div class='AllUsersMainSpecialUsersUser'><div class='AllUsersMainSpecialUsersUserIFL'><img src='image.php?id=%s' /><p>%s, %s</p><input id='firstNameField' type='hidden' name='firstNameField' value='%s' /><input id='lastNameField' type='hidden' name='lastNameField' value='%s' /><input id='userNameField' type='hidden' name='userNameField' value='%s' /><input id='passwordField' type='hidden' name='passwordField' value='%s' /><input id='emailField' type='hidden' name='emailField' value='%s' /><input type='hidden' name='statusField' value='%s' /><input type='hidden' name='hobbyField' value='%s' /><input type='hidden' name='ageField' value='%s' /><input type='hidden' name='countryField' value='%s' /><input type='hidden' name='cityField' value='%s' /><input type='hidden' name='userNameField2' value='$userNameField' /><input type='hidden' name='passwordField2' value='$passwordField' /></div><div class='AllUsersMainSpecialUsersUserBtn'><input name='sub2' type='submit' value='View User!' /></div></div></form>", $rowU[0], $rowU[1], $rowU[2], $rowU[1], $rowU[2], $rowU[3], $rowU[4], $rowU[5], $rowU[6], $rowU[7], $rowU[8], $rowU[9], $rowU[10]);
            }
          } else {
            echo "<div class='AllUsersMainSpecialUsersHello'><h1>Error!</h1></div>";
          }
        ?>
      </div>
    </div>
  </div>
</div>
