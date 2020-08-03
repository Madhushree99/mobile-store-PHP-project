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
<?php  
	$uid=$_SESSION['id'];
	$update = "update user_items set status='Confirmed' WHERE user_id = '$uid'";
    $update_result=mysqli_query($con,$update) or die(mysqli_error($con)); ?>
	<div class="container" id="contain">
	<div class="container panel text-center" id="contain"> <?php if($update_result){ echo 'Thank you for ordering from E-store. Your order shall be delivered
	to you shortly.'; ?> <br/></div><div class="container text-center">Order some more items <a href="index.php"> here </a> </div>
	<?php  } else { echo 'oops!! Something went wrong. Your order did not place. Try again!!'; } ?> </div>
<?php include 'includes/footer.php'; ?>
</body>
</html>
			   