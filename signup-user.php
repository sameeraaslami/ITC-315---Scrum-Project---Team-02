
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/logo.jpg">

    <title>Student Grading System</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="assets/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.js"></script>
    <style>
      body{
        display: flex;
        height: calc(100%);
        width: calc(100%);
        justify-content: center;
        align-items: center;
      }
      .login-form {
  display: block;
  position: fixed;
  border:5px solid grey;
  border-radius: 20px;
  padding: 30px;
  width: 400px;
  background-color: white;
  left:500px;
  top:180px;
 } 
 .erlert{
  display:block;
  border-radius:5px;
  background-color:rgba(230, 103, 42, 0.37);
  padding: 5px;
}
    </style>
  </head>
<body>
  

<div class="container">

  <div class="login-form" id="login_modal" role="dialog" >


  <center><h3 style="color:#2979ff; border-radius:5px"><b>Sign Up</b></h3></center>
  
  

  <form class="form-horizontal" method="post">
    <div class="form-group">
      <div class="col-md-15">
      <div class="text-center">
      <span class="badge badge-pill" style="width: 94%; border-radius: 20px">
        <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" value="<?php echo $username; ?>">
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-15">
      <div class="text-center">
      <span class="badge badge-pill" style="width: 94%; border-radius: 20px">
        <input type="text" class="form-control" name="email" placeholder="Email" autocomplete="off" value="<?php echo $email; ?>">
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-15">
      <div class="text-center">
      <span class="badge badge-pill" style="width: 94%; border-radius: 20px">
          
        <input type="password" class="form-control" name="password_1" placeholder="Password">
      </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-15">
      <div class="text-center">
      <span class="badge badge-pill" style="width: 94%; border-radius: 20px">
          
        <input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
      </div>
      </div>
    </div>
    <div class="form-group">        
    <div class="text-center">
      <!--<button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">Create New</button>-->
        <button type="submit"  class="text-center" style=" width: 64%; border-radius:20px" name="reg_user" >Register</button>

        <div class="form-group">        
    <div class="text-center">
      <div class="link login-link text-center">Already have account? <a href="login.php">Sign In</a></div>
       
       
      </div>
    </div>
  </form>
  <?php include('server.php') ?>
   </div>          
</div>


    <script src="assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
  
</html>
      I am done with the signup page. If there any changes needed in this part please let me know. I will work on that. 
