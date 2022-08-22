<?php
    // Include config file
    require_once 'config.php';
    // Include register file
    include 'php_register.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Signin | Pmail</title>
<!-- --------------style css --------------->
<link rel="stylesheet" href="assets/styles.css">

</head>
<body>
<div class="login-form">
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="text-center">
            <a href="index.html" aria-label="Space">
                <img class="mb-3" src="assets/image/logo.png" alt="Logo" width="60" height="60">
            </a>
          </div>
        <div class="text-center mb-4">
            <h1 class="h3 mb-0">Please sign up</h1>
            <p>Fill out the form to get started.</p>
        </div>
     
        <div class="js-form-message mb-3">
            <div class="js-focus-state input-group form" <?= (!empty($email_err)) ? 'has-error' : ''; ?>">
              <div class="input-group-prepend form__prepend">
                <span class="input-group-text form__text">
                  <i class="fa fa-user form__text-inner"></i>
                </span>
              </div>
              <input type="email" class="form-control form__input" name="email"value="<?= $email; ?>" placeholder="Email" aria-label="Email" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
            </div>
            <span class="help-block"><?= $email_err; ?></span>
        </div>
		<div class="form-group" <?= (!empty($password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-lock"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="password" placeholder="Password" value="<?= $password; ?>">				
            </div>
            <span class="help-block"><?= $password_err; ?></span>
        </div> 
        <div class="form-group" <?= (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-key"></i>
                    </span>                    
                </div>
                <input type="password" class="form-control" name="confirm_password" placeholder="Confirm Password" value="<?= $confirm_password; ?>">				
            </div>
            <span class="help-block"><?= $confirm_password_err; ?></span>
        </div>          
    
        <div class="form-group mb-3">
            <button type="submit" class="btn btn-primary login-btn btn-block">Signup</button>
        </div>
        
        <div class="text-center mb-3">
            <p type="submit" class="text-muted">Have an account? <a href="login.php">Signin</a></p>
        </div>
		<div class="or-seperator"><i>OR</i></div>
        
        <div class="row mx-gutters-2 mb-4">
            <div class="col-sm-6 mb-2 mb-sm-0">
              <button type="button" class="btn btn-block btn-sm btn-facebook">
                <i class="fa fa-facebook mr-2"></i>
                Signin with Facebook
              </button>
            </div>
            <div class="col-sm-6">
              <button type="button" class="btn btn-block btn-sm btn-twitter">
                <i class="fa fa-twitter mr-2"></i>
                Signin with Twitter
              </button>
            </div>
        </div>
        <p class="small text-center text-muted mb-0">All rights reserved. © Space. 2020 soengsouy.com.</p>
    </form>
</div>

</body>
</html>