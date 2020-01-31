<div class="Contacts">
  <div class="ContactsQuestions">
    <div style="background: url('../img/ElementForQP.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span>Your Questions!</span></center>
    </div>
    <div class="ContactsQuestionsSpecial">
      <div class="ContactsQuestionsSpecialText">
        <center><span>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor
          in reprehenderit in voluptate velit esse cillum dolore
          eu fugiat nulla pariatur. Excepteur sint occaecat
          cupidatat non proident, sunt in culpa qui officia
          deserunt mollit anim id est laborum.</span></center>
      </div>
      <div class="ContactsQuestionsSpecialArrow">
        <center><span><i class="fas fa-arrow-down"></i></span></center>
      </div>
    </div>
    <a href="#"><div style="background: url('../img/ElementForQP.jpg') no-repeat center center;" class="MainBtn">
      <center><span>My Email!</span></center>
    </div></a>
  </div>
  <div class="ContactsSignIn">
    <div style="background: url('../img/ElementForSIP.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span>Sign In!</span></center>
    </div>
    <div class="ContactsSignInNeed">
      <div class="ContactsSignInNeedText">
        <center><span>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.</span></center>
      </div>
      <div class="ContactsSignInNeedArrow">
        <center><span><i class="fas fa-arrow-down"></i></span></center>
      </div>
    </div>
    <a href="SignIn.php"><div style="background: url('../img/ElementForSIP.jpg') no-repeat center center;" class="MainBtn">
      <center><span>Sign In!</span></center>
    </div></a>
  </div>
  <div class="ContactsRegister">
    <div style="background: url('../img/ElementForREP.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span>Sign Up!</span></center>
    </div>
    <div class="ContactsRegisterSpecial">
      <div class="ContactsRegisterSpecialText">
        <center><span>Lorem ipsum dolor sit amet, consectetur
          adipisicing elit, sed do eiusmod tempor incididunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut
          aliquip ex ea commodo consequat. Duis aute irure dolor in
          reprehenderit in voluptate velit esse cillum dolore eu
          fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id
          est laborum.</span></center>
      </div>
      <div class="ContactsRegisterSpecialArrow">
        <center><span><i class="fas fa-arrow-down"></i></span></center>
      </div>
    </div>
    <a href="SignUp.php"><div style="background: url('../img/ElementForREP.jpg') no-repeat center center;" class="MainBtn">
      <center><span>Sign Up!</span></center>
    </div></a>
  </div>
  <div class="ContactsFeedBack">
    <div style="background: url('../img/ElementForFBP.jpg') no-repeat center center;" class="HeaderBlock">
      <center><span>Feed Back!</span></center>
    </div>
    <div class="ContactsFeedBackMain">
      <div class="ContactsFeedBackMainSpecial">
        <form class="ContactsFeedBackMainSpecialForm" action="Contacts.php" method="post">
          <div class="ContactsFeedBackMainSpecialFormPart">
            <center><input type="text" name="Input1" class="MainInput" placeholder="Enter Your Name..." value="<?=$_SESSION["Input1"];?>"></center>
            <center><input type="text" name="Input2" class="MainInput" placeholder="Enter Your Email..." value="<?=$_SESSION["Input2"];?>"></center>
          </div>
          <div class="ContactsFeedBackMainSpecialFormPart">
            <center><textarea name="Input3" rows="8" cols="60" placeholder="Enter Your Message..."><?=$_SESSION["Input3"]?></textarea></center>
          </div>
          <center><div class="ContactsFeedBackMainSpecialFormAllErrors">
            <center><span><?=$error_from?></span></center>
            <center><span><?=$error_to?></span></center>
            <center><span><?=$error_message?></span></center>
          </div></center>
          <div class="ContactsFeedBackMainSpecialFormBtn">
            <center><input type="submit" name="sub1" value="Send!"></center>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
