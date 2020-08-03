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
 <h4>Change Password <a href="index.php"><div style="float:right"><span class="glyphicon glyphicon-remove" style="align:right;color:gray;"> </span> </a></div></h4>
 <form method="POST" action="settings_script.php">
 <div class="form-group">
 <input type="password" name="op" placeholder="Old password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number,one lowercase letter and minimum of 8 characters"/>
 </div>
 <div class="form-group">
 <input type="password" name="np" placeholder="New password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number,one lowercase letter and minimum of 8 characters"/>
 </div>
 <div class="form-group">
 <input type="password" name="rnp" placeholder="Re-type password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Must contain at least one number,one lowercase letter and minimum of 8 characters"/>
 </div>
 <input type="submit" value="Change" class="btn btn-primary"/>
 </form>
 </div>
 <?php include 'includes/footer.php'; ?>
 </body>
 </html>