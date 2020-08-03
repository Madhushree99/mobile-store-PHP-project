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
 <h1>SIGN UP</h1>
 <form action="signup_script.php" method="POST">
 <div class="form-group">
 <input type="text" name="uname" placeholder="Name" class="form-control" required />
 </div>
 <div class="form-group">
 <input type="email" name="email" placeholder="Email" class="form-control" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
 </div>
 <div class="form-group">
 <input type="password" name="password" placeholder="Password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number,one lowercase letter and minimum of 8 characters" />
 </div>
 <div class="form-group">
 <input type="text" name="number" pattern="[0-9]{10}" title="Phone numbers must be 10 digits only" maxlength="10" placeholder="Contact" class="form-control" required />
 </div>
 <div class="form-group">
 <input type="text" name="city" placeholder="City" class="form-control" required />
 </div>
 <div class="form-group">
 <input type="text" name="adrs" placeholder="Address" class="form-control" required />
 </div>
 <div class="form-group" style="float:right;">
 <input type="submit" value="Submit" class="btn btn-primary"/>
 </div>
 </form>
 </div>
 <?php include 'includes/footer.php'; ?>
 </body>
 </html>