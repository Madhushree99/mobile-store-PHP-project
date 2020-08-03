<?php
    require 'includes/common.php';
$id=$_REQUEST['id']; 
$query = "DELETE FROM user_items WHERE id='$id'";
$result = mysqli_query($con,$query);
header("Location: cart.php");
?>