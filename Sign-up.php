<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Create account">
    <meta name="description" content="">
    <title>Sign up</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Sign-up.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.21.12, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": ""
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Sign up">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-xl-mode" data-lang="en"><header class="u-clearfix u-header u-header" id="sec-cce4"><div class="u-clearfix u-sheet u-sheet-1"></div></header>
    
    <section class="u-clearfix u-section-1" id="sec-e6e6">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-container-style u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1"><span class="u-file-icon u-icon u-icon-circle u-palette-1-base u-text-white u-icon-1"><img src="images/747376-4a7f268a.png" alt=""></span>
            <h2 class="u-text u-text-default u-text-palette-1-base u-text-1">Create Account</h2>
            <div class="u-align-left u-form u-login-control u-form-1">
              <form method="post" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name">
                  <label for="username-a30d" class="u-label u-text-palette-1-base u-label-1">Username </label>
                  <input type="text" placeholder="Enter your Username" id="user" name="username" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-11 u-input-1" required="">
                </div>
                <div class="u-form-group u-form-group-2">
                  <label for="text-5052" class="u-label u-text-palette-1-base u-label-2">Email Address </label>
                  <input type="text" placeholder="example@auaf.edu.af" id="email" name="email" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-11 u-input-2" required="required">
                </div>
                <div class="u-form-group u-form-password">
                  <label for="password-a30d" class="u-label u-text-palette-1-base u-label-3">Password </label>
                  <input type="password" placeholder="Enter your Password" id="pwd" name="password" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-11 u-input-3" required="">
                </div>
                <div class="u-form-group u-form-group-4">
                  <label for="text-2134" class="u-label u-text-palette-1-base u-label-4">Confirm Password </label>
                  <input type="password" placeholder="Enter your Password" id="pwd" name="text-1" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-11 u-input-4" required="required">
                </div>
                <div class="u-form-group u-form-select u-form-group-5">
                  <label for="select-e13c" class="u-label u-text-palette-1-base u-label-5">Account Type </label>
                  <div class="u-form-select-wrapper">
                    <select id="select-e13c" name="select" class="u-border-2 u-border-grey-10 u-grey-10 u-input u-input-rectangle u-radius-11 u-input-5" required="required">
                      <option value="Student">Student</option>
                      <option value="Instructor">Instructor</option>
                      <option value="Admin">Admin</option>
                    </select>
                    <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px" viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve"><polygon class="st0" points="8,12 2,4 14,4 "></polygon></svg>
                  </div>
                </div>
                <div class="u-form-checkbox u-form-group">
                  <input type="checkbox" id="checkbox-a30d" name="remember" value="On">
                  <label for="checkbox-a30d" class="u-label u-text-palette-1-base u-label-6">Remember me</label>
                </div>
                <div class="u-align-left u-form-group u-form-submit">
                  <a href="#" class="u-active-palette-1-base u-border-none u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-18 u-text-active-white u-text-body-alt-color u-text-hover-white u-btn-1">Sign Up</a>
                  <input type="submit" value="submit" name="reg_user" class="u-form-control-hidden">
                </div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
              <?php include('connect.php') ?>
              
            </div>
            <a href="Sign-in.php" class="u-border-1 u-border-active-grey-10 u-border-hover-grey-10 u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-1-base u-btn-2">Already have an account?</a>
          </div>
        </div>
        <div class="u-container-style u-group u-shape-rectangle u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <img class="u-image u-image-contain u-image-1" src="images/logo.png" data-image-width="2227" data-image-height="2021">
          </div>
        </div>
        <div class="u-container-align-center u-container-style u-group u-image u-shape-rectangle u-image-2" data-image-width="1144" data-image-height="669">
          <div class="u-container-layout u-container-layout-3"></div>
        </div>
      </div>
    </section>
    
    
  
  
</body></html>