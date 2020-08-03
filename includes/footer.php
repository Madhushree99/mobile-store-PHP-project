<?php if (!isset($_SESSION['email'])) { ?> 
<div class="footer">
 <div class="container-fluid">
 <div class="col-sm-4" id="col">
 <h4>Information</h4>
 <h5><a href="about.php" id="col">About Us</a></h5>
 <h5><a href="contact.php" id="col">Contact Us</a></h5>
 </div>
 <div class="col-sm-4" id="col">
 <h4>My Account</h4>
 <h5><a href="login.php" id="col">Login</a></h5>
 <h5><a href="signup.php" id="col">Sign Up</a></h5>
 </div>
 <div class="col-sm-4" id="col">
 <h4>Contact Us</h4>
 <h5>+91-123-000000</h5>
 </div>
 </div>
 </div>
<?php } ?>