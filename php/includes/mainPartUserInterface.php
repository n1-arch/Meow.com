<div class="UserInterface">
  <div class="UserInterfaceMain">
    <div style="background: url('../img/ElementForUIM.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span><?=$firstNameField?> <?=$lastNameField?>!</span></center>
    </div>
    <div class="UserInterfaceMainSpecial">
      <div class='UserInterfaceMainSpecialUser'>
        <div class='UserInterfaceMainSpecialUserHeader'>
          <h1><?=$firstNameField?> <?=$lastNameField?></h1>
        </div>
        <div class='UserInterfaceMainSpecialUserText'>
          <p><?=$userNameField?></p>
          <p><?=$emailField?></p>
          <p><?=$statusField?></p>
          <p><?=$hobbyField?></p>
          <p><?=$ageField?></p>
          <p><?=$countryField?></p>
          <p><?=$cityField?></p>
        </div>
        <?php
          if ($userNameField2 == $userNameField && $passwordField2 == $passwordField) {
            // code...
            echo "<div class='UserInterfaceMainSpecialUserHiddens'><form method='POST' action='ChangeProfile.php'><input type='hidden' name='firstNameField' value='$firstNameField' /><input type='hidden' name='lastNameField' value='$lastNameField' /><input type='hidden' name='userNameField' value='$userNameField' /><input type='hidden' name='passwordField' value='$passwordField' /><input type='hidden' name='emailField' value='$emailField' /><input type='hidden' name='statusField' value='$statusField' /><input type='hidden' name='hobbyField' value='$hobbyField' /><input type='hidden' name='ageField' value='$ageField' /><input type='hidden' name='countryField' value='$countryField' /><input type='hidden' name='cityField' value='$cityField' /></div><div class='UserInterfaceMainSpecialUserBtn'><input type='submit' name='subChange' value='Change Profile!' /></form>";
          }
        ?>
      </div>
    </div>
  </div>
</div>
