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
              <form id="stripe-login">
                <div class="field padding-bottom--24">
                    <label for="username">Your Name</label>
                  <input id="input2" type="text" name="fname" placeholder="first name">
                  <input id="input2" type="text" name="lname" placeholder="last name">
                </div>
                <div class="field padding-bottom--24">
                  <div class="grid--50-50">
                    <label for="email">Email </label>
                  </div>
                  <input type="email" name="email" placeholder="Email :abc@pmail.com">
                </div>
                <div class="field padding-bottom--24">
                    <label for="username">Password</label>
                  <input id="input2" type="password" name="password" placeholder="Password ">
                  <input id="input2" type="password" name="cpassword" placeholder="Conform Password"><br>
                  <small style="color: rgb(143, 147, 150);">Use 8 or more characters with a mix of letters, numbers & symbols</small>
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