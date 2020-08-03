<?php require 'includes/common.php'; ?>
<html> 
<head> 
<title>E-Store</title> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link href="style.css" rel="stylesheet" type="text/css"/> 
</head>
 <body> 
 <?php include 'includes/header.php'; ?>
 <div class="container" id="content">
 <div class="panel panel-primary">
 <div class="panel panel-body">
 <h4>LOGIN <a href="index.php"><div style="float:right"><span class="glyphicon glyphicon-remove" style="align:right;color:gray;"> </span> </a></div></h4>
 </div>
 <div class="panel-body">
 <p class="text-warning">Don't have an account?<a href="signup.php">Register</a></p>
 <form method="POST" action="login_submit.php">
 <div class="form-group">
 <input type="email" name="email" placeholder="Email" class="form-control" required />
 </div>
 <div class="form-group">
 <input type="password" name="password" placeholder="Password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number,one lowercase letter and minimum of 8 characters" />
 </div>
 <input type="submit" value="Login" class="btn btn-primary"/>
 </form>
 </div>
 <div class="panel-body">
 <a href="pass_reset.php">Forgot Password?</a>
 </div>
 </div>
 </div>
 <?php include 'includes/footer.php'; ?>
 </body>
 </html>