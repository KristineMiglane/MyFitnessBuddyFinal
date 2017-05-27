<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: mainMenu.html");
}
require_once 'dbconnect.php';

if(isset($_POST['btn-signup'])) {
 
 $uname = strip_tags($_POST['username']);
 $email = strip_tags($_POST['email']);
 $upass = strip_tags($_POST['password']);
 
 $uname = $DBcon->real_escape_string($uname);
 $email = $DBcon->real_escape_string($email);
 $upass = $DBcon->real_escape_string($upass);
 
 $hashed_password = password_hash($upass, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version
 
 $check_email = $DBcon->query("SELECT email FROM tbl_users WHERE email='$email'");
 $count=$check_email->num_rows;
 
 if ($count==0) {
  
  $query = "INSERT INTO tbl_users(username,email,password) VALUES('$uname','$email','$hashed_password')";

  if ($DBcon->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp;You have now signed up!
     </div>";
  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Something went wrong!
     </div>";
  }
  
 } else {
  
  
  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp;Sorry this email is already taken!
    </div>";
   
 }
 
 $DBcon->close();
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up</title> 
<link rel="stylesheet" href="" type="text/css" />
<style>
    body 
    {
        background-image: url(images/loginback.jpg);
    }
    div 
    {
    border-radius: 5px;
    background-color: #52BAD5;
    padding: 20px;
    }
    input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    }
    button {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

    button:hover {
    background-color: #45a049;
}
h1{
    color: fuchsia;
    font-family:  monospace;
}

    
    
</style>

</head>
<body>

<div class="signin-form">

 <div class="container">
     
        
       <form class="form-signin" method="post" id="register-form">
      
        <h1 class="form-signin-heading">Register A New Account</h1>
        
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
        <br>
      
        
        <div class="form-group">
            <button type="submit" class="btn btn-default" name="btn-signup">
      <span class="glyphicon glyphicon-log-in"></span> &nbsp; Create Account
            </button> <br><br>
            <a href="login.php" class="btn btn-default">Sign In Here</a>
        </div> 
      
      </form>

    </div>
    
</div>

</body>
</html>