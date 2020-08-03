<?php
    require 'includes/common.php';
    $email = $_SESSION['email'];
	$np = $_POST['np'];
	$old=md5(mysqli_real_escape_string($con,$_POST['op']));
	$query="select password from users where email='$email'";
	$result=mysqli_query($con,$query) or die(mysqli_error($con));
	$row=mysqli_fetch_array($result);
	if(strlen($np)< 8){
        echo "Password should have atleast 8 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="0;url=settings.php" />
        <?php
    }
	if($row['password'] == $old); {
		
       if( $_POST['np']!==$_POST['rnp'] ){ ?>
        <script>
            window.alert("You have incorrectly retyped the New Password.");
        </script>
        <meta http-equiv="refresh" content="0;url=settings.php" />
        <?php }
		else{
		$np=md5(mysqli_real_escape_string($con,$_POST['np']));
		$update = "update users set password='$np' WHERE email = '$email'";
        $update_result=mysqli_query($con,$update) or die(mysqli_error($con));
        ?>
		<script>
            window.alert("Password successfully updated");
        </script>
        <meta http-equiv="refresh" content="0;url=index.php" />
		<?php 
    } } 
    
?>