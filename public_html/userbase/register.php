<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: home.php");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
 
 $uname = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 
 $uname = $DBcon->real_escape_string($uname);
 $email = $DBcon->real_escape_string($email);
 $upass = $DBcon->real_escape_string($upass);
 
 $hashed_password = md5($upass);
 
 $check_email = $DBcon->query("SELECT email FROM users WHERE email='$email'");
 $count=$check_email->num_rows;
 
 if ($count==0) {
  
  $query = "INSERT INTO users(username,email,password) VALUES('$uname','$email','$hashed_password')";

  if ($DBcon->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
  }
  
 } else {
  
  
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";
   
 }
 
 $DBcon->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login & Registration System</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="style.css" type="text/css" />

</head>
<body>

<div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h2 class="form-signin-heading">Sign Up</h2><hr />
        
        <?php
  if (isset($msg)) {
   echo $msg;
  }
  ?>
          
        <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="username" required  />
        </div>
        
        <div class="form-group">
        <input type="email" class="form-control" placeholder="Email address" name="email" required  />
        <span id="check-e"></span>
        </div>
        
        <div class="form-group">
        <input type="password" class="form-control" placeholder="Password" name="password" required  />
        </div>
        
      <hr />
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
   </button> 
            <a href="index.php" class="btn btn-default" style="float:right;">Log In Here</a>
        </div> 
      
      </form>

    </div>
    
</div>

</body>
</html>