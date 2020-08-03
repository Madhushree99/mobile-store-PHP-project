<?php require 'includes/common.php';

    $name=$_POST['uname'];
	$phno=$_POST['number'];
	$email = mysqli_real_escape_string($con,$_POST['email']);
    $regex_email="/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if(!preg_match($regex_email,$email)){
        ?>
		<script>
            window.alert("Invalid email.. Redirecting you to registration page");
        </script>
        <meta http-equiv="refresh" content="0;url=signup.php" />
        <?php
    }
	if(strlen($phno)!=10){
		?><script>
            window.alert("Phone number must be 10 digits only");
        </script>
		<meta http-equiv="refresh" content="0;url=signup.php" />
        <?php
    }
    $password=md5(mysqli_real_escape_string($con,$_POST['password']));
    if(strlen($password)<8){
        echo "Password should have atleast 8 characters. Redirecting you back to registration page...";
        ?>
        <meta http-equiv="refresh" content="0;url=signup.php" />
        <?php
    }
    $city=mysqli_real_escape_string($con,$_POST['city']);
    $address=mysqli_real_escape_string($con,$_POST['adrs']);
    $duplicate_user="select id from users where email='$email'";
    $duplicate_user_result=mysqli_query($con,$duplicate_user) or die(mysqli_error($con));
    $rows_fetched=mysqli_num_rows($duplicate_user_result);
    if($rows_fetched>0){
        ?>
        <script>
            window.alert("Email already exists in our database!!!");
        </script>
        <meta http-equiv="refresh" content="0;url=signup.php" />
        <?php
    }else{
        $user_registration_query="insert into users(name,email,password,contact,city,address) values ('$name','$email','$password','$phno','$city','$address')";
        $user_registration_result=mysqli_query($con,$user_registration_query) or die(mysqli_error($con));
        ?>
		<script>
            window.alert("Registration Successfull.. Welcome");
        </script>
        <meta http-equiv="refresh" content="0;url=login.php" />
		<?php 
        $_SESSION['id']=mysqli_insert_id($con); 
          }
    
?>