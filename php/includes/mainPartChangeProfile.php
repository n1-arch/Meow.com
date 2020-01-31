<div class="ChangeProfile">
  <div class="ChangeProfileMain">
    <div style="background: url('../img/ElementForCPP.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span>Change Profile!</span></center>
    </div>
    <div class="ChangeProfileMainSpecial">
      <div class="ChangeProfileMainSpecialChangeForm">
        <form action="AllUsers.php" method="post">
          <div class="ChangeProfileMainSpecialChangeFormInputs">
            <input type="hidden" name="userNameField2" value="<?=$userNameField?>">
            <input type="hidden" name="passwordField2" value="<?=$passwordField?>">
            <input type='text' name='firstNameField' value='<?=$firstNameField?>'>
            <input type='text' name='lastNameField' value='<?=$lastNameField?>'>
            <input type='text' name='userNameField' value='<?=$userNameField?>'>
            <input type='text' name='passwordField' value='<?=$passwordField?>'>
            <input type='text' name='emailField' value='<?=$emailField?>'>
            <input type='text' name='statusField' value='<?=$statusField?>'>
            <input type='text' name='hobbyField' value='<?=$hobbyField?>'>
            <input type='text' name='ageField' value='<?=$ageField?>'>
            <input type='text' name='countryField' value='<?=$countryField?>'>
            <input type='text' name='cityField' value='<?=$cityField?>'>
          </div>
          <div class="ChangeProfileMainSpecialChangeFormBtn">
            <input type='submit' name='sub6' value='Change User!'>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
