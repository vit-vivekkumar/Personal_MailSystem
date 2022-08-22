<?php
    // Include config file
    require_once 'config.php';
    // Include register file
    include 'php_register.php';
?>
<html>
<head>
  <meta charset="utf-8">
  <title>Create Account</title>
  <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
  <div class="login-root">
    <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
      <div class="loginbackground box-background--white padding-top--64">
        <div class="loginbackground-gridContainer">
         
          
        </div>
      </div>
      <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
        <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
        </div>
        
        <div class="formbg-outer">
          <div class="formbg">
            <div class="formbg-inner padding-horizontal--48">
                
              <span class="padding-bottom--15"><img src="img/icon.png" alt="">Create your Account </span>
              <div class="box"></div><br>
              <form id="stripe-login" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="field padding-bottom--24">
                    <label for="username">Your Name</label>
                  <input id="input2" type="text" name="fname" placeholder="first name" value="<?= $fname; ?>">
                  <input id="input2" type="text" name="lname" placeholder="last name" value="<?= $lname; ?>">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="email">Username </label>
                  </div>
                  <input type="text" name="email"value="<?= $email; ?>" placeholder="Username" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                  <button class="txt-btn field ">@personalmail.com</button><br>
                  <small class="help-block"><?= $email_err; ?></small>
                </div>
                <div class="field padding-bottom--24 "<?= (!empty($password_err)) ? 'has-error' : ''; ?>">
                    
                    <label for="username">Password<small style="color: rgb(143, 147, 150);"> ( Use 8 or more characters with a mix of letters, numbers & symbols ).</small></label>
                    
                  <input id="input2" type="password"  name="password" placeholder="Password" value="<?= $password; ?>">
                  <input id="input2" type="password" name="confirm_password" placeholder="Confirm Password" value="<?= $confirm_password; ?>"><br>
                  <small class="help-block"><?= $password_err; ?></small><br>
                  <small class="help-block"><?= $confirm_password_err; ?></small>
                </div>
                <div class="field padding-bottom--24">
                  <input type="submit" name="submit" value="Create Account">
                </div>
              </form>
            </div>
          </div>
          <div class="footer-link padding-top--24">
            <span>You have an account? <a href="sigin.php">Sign in</a></span>
            <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
              <span><a href="#">© MailSystem</a></span>
              <span><a href="#">Contact</a></span>
              <span><a href="#">@21MCA0153 & 21MCA0008</a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>