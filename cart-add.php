<?php require 'includes/common.php';
$item_id=$_REQUEST['id'];
$user_id=$_SESSION['id'];
$insert="insert into user_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$results = mysqli_query($con, $insert) or die(mysqli_error($con));
			   if($results){ ?>
			   <script>
			   window.alert("Item added to cart");
			   </script>
			   <meta http-equiv="refresh" content="0;url=index.php"/>
			   <?php }
				   else {   
                   echo 'Not added to cart.. Something went wrong!!!';
               }
   ?>
          