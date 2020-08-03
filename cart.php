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
 <?php include 'includes/header.php';
$uid=$_SESSION['id']; ?>
 <div class="container" id="contain">
 <table class="table table-bordered table-hover text-center">
 <thead>
 <tr><th>Item Number</th><th>Price</th></tr>
 </thead>
 <?php $count=1; $total=0;
 $query="select * from user_items where user_id='$uid' and status='Added to cart'";
 $result=mysqli_query($con,$query);
 while($row=mysqli_fetch_array($result)){
 $pid=$row['item_id'];
?>
 <tbody>
 <?php $query2="select * from items where pid='$pid'";
 $result2=mysqli_query($con,$query2);
 $row2=mysqli_fetch_array($result2);
$total+=$row2['price']; ?>
 <tr><td><?php echo $row['item_id']; ?></td><td><?php echo $row2['price']; ?></td>
 <td><a class="btn btn-danger" href="remove.php?id=<?php echo $row['id'];?>">Cancel</a></td></tr>
 </tbody> 
<?php $count++; } ?>
<tfoot>
 <tr><td>Total</td><td><?php echo $total; ?></td><?php if($total!=0){ ?> <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td> <?php } ?></tr>
 </tfoot>
 </table>
 </div>
 <?php include 'includes/footer.php'; ?>
 </body>
 </html>