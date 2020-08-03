<?php require 'includes/common.php';
?> 
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

<div class="container" id="contain">
 <?php
 $count=1;
$query="select * from items";
$result=mysqli_query($con,$query);
while($row=mysqli_fetch_array($result))
{ ?>
<div class="col-sm-4">
<div class="thumbnail">
<div class="panel"> <?php if(!isset($_SESSION['email'])){ echo 'Mobile'.$count; } else { echo '#'.$count; } ?> </div>
<input type="hidden" name="id" value="<?php echo $row['pid']; ?>" />
<div class="text-center" style="height:350px;"><img src="images/<?php echo $row['image']; ?>" /></div>
<div class="text-info" id="names"><?php echo $row['name'];?></div><div class="text-info" id="names"><?php echo$row['price']; ?> </div>
<?php if (!isset($_SESSION['email'])) {	?> 
<p><a href="login.php" role="button" class="btn btn-primary btn-block">Order Now</a></p> 
<?php } else {  ?>
 <a href="cart-add.php?id=<?php echo $row['pid']; ?>" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a> <?php } ?>
</div>
</div>
<?php $count++; }
?>
</div>
 <?php include 'includes/footer.php'; ?>
 </body>
 </html>