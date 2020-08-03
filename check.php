<?php
    require 'includes/common.php';
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        ?>
		<script>
            window.alert("Invalid email.. Redirecting you to registration page");
        </script>
        <meta http-equiv="refresh" content="0;url=pass_reset.php" />
        <?php
    }
    $password=$_POST['password'];
    if(strlen($password) < 8){
        echo "Password should have atleast 8 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="0;url=pass_reset.php" />
        <?php
    }
    $duplicate_user_query="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched==0){
        ?>
        <script>
            window.alert("Email doesn't exists in our database!! Enter correct email or Please register if u don't have account.");
        </script>
        <meta http-equiv="refresh" content="0;url=pass_reset.php" />
        <?php
    }elseif ( $_POST['password']!==$_POST['repassword'] ){ ?>
        <script>
            window.alert("Retyped password is not matching your new password");
        </script>
        <meta http-equiv="refresh" content="0;url=pass_reset.php" />
        <?php }
		else{
		$password=md5(mysqli_real_escape_string($con,$_POST['password']));
		$update = "update users set password='$password' WHERE email = '$email'";
        $update_result=mysqli_query($con,$update) or die(mysqli_error($con));
        ?>
		<script>
            window.alert("Password successfully updated");
        </script>
        <meta http-equiv="refresh" content="0;url=login.php" />
		<?php 
    }   
?>