<?php include 'includes/common.php'; ?>
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
 <div class="container">
 <div class="row container" id="contain">
 <div style="float:left;">
 <h2> LIVE SUPPORT </h2>
 <p>24 hours | 7 days a week | 365 days a year Live Technical Support</p>
 <p>It is a long established fact that a reader will be distracted by the content of a page when looking at its layout.<br/>
The point of using Lorem is that it has many variations of passengers.</p>
 </div>
 <div style="float:right;">
 <img src="images/1.png" width="250px" height="150px"/>
 </div>
 </div>
 </div>
 <div class="container">
 <div class="row container" id="contain">
 <div style="float:left;">
<h2> CONTACT US </h2> 
<form method="POST" action="index.php">
 <div class="form-group">
 <h3>Name:</h3>
 <input type="text" name="name"  class="form-control" required />
 </div>
 <div class="form-group">
 <h3>Email:</h3>
 <input type="email" name="email" class="form-control" required />
 </div>
 <div class="form-group">
 <h3>Message:</h3>
 <textarea name="msg" rows="5" cols="10" class="form-control" required> </textarea>
 </div>
 <input type="submit" value="Submit" class="btn btn-primary"/>
 </form>
 </div>
 <div style="float:right;">
 <h2>Company Information</h2>
 <p>500 Lorem Ipsum Dolor Sit,<br/> 26-07-2020 Sit Amet,Lorem,<br/>India<br/>Email:info@mycompany.com</p>
 </div>
 </div>
 </div>
 <?php include 'includes/footer.php'; ?>
 </body>
 </html>
