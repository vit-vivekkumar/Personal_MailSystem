<?php
// Initialize the session
session_start();
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: mailbox.php");
    exit;
}
// Include config file
require_once "config.php";
require_once "php_login.php";
require_once "php_register.php";
?>
<?php
if(isset($_SESSION["email"])){
            echo '<script type="text/javascript">alert("' . $_SESSION["email"] . '")</script>';
}
            ?>
<html>

<head>
    <meta charset="utf-8">
    <title>Sign in</title>
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
                <div class="formbg2-outer">
                    <div class="formbg2">
                        <div class="formbg2-inner padding-horizontal--48">
                            <span class="padding-bottom--15 center-center"> Sign in to your account</span>
                            <hr><br>
                            <form id="stripe-login" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                method="post">
                                <div class="field padding-bottom--24" <?= (!empty($email_err)) ? 'has-error' : ''; ?>">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="Email" aria-label="Email"
                                        data-msg="Please enter a valid email address." data-error-class="u-has-error"
                                        data-success-class="u-has-success" value="<?= $email; ?>">
                                </div>
                                <small class="help-block"><?= $email_err; ?></small>
                                <div class="field padding-bottom--24"
                                    <?= (!empty($password_err)) ? 'has-error' : ''; ?>">
                                    <div class="grid--50-50">
                                        <label for="password">Password</label>
                                    </div>
                                    <input type="password" name="password">
                                </div>
                                <small class="help-block"><?= $password_err; ?></small>
                                <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                                    <input type="checkbox" class="custom-control-input" id="rememberMeCheckbox">
                                    <label class="custom-control-label" for="rememberMeCheckbox">
                                        Remember Me
                                    </label>
                                </div>
                                <div class="field padding-bottom--24">
                                    <input type="submit" name="submit" value="Sign in">
                                </div>
                                <div class="reset-pass">
                                    <a href="#">Forgot your password?</a>
                                </div>
                                <div class="field">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="footer-link padding-top--24">
                        <span>Don't have an account? <a href="">Create an account</a></span>
                        <div class="listing padding-top--24 padding-bottom--24 flex-flex center-center">
                            <span><a href="#">© PhpMailer</a></span>
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