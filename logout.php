<?php 
session_start();
require 'includes/common.php';
if(isset($_SESSION['email'])){
session_unset();
header('location:index.php');
}
?>