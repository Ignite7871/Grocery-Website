<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<title>User Registration</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel='stylesheet' type='text/css' media='screen' href='main.css'>
<script src='main.js'></script>
<!--CSS link -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
crossorigin="anonymous">
<link rel ="stylesheet" href="style.css">
<!--CSS link -->
<!--font link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/
6.5.1/css/all.min.css" integrity="sha512-
DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWM
n13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!--font link -->
</head>
<body>
<div class="container-fluid my-3">
<h2 class="text-center">New User Registration</h2>
<div class="row d-flex align-items-center justify-content-center">
<div class="col-lg-12 col-xl-6">
<form action="" method="post" enctype="multipart/form-data">
<div class="form-outline mb-4">
<label for="user_name" class="form-label">Username</label>
<input type="text" id="user_username" class="form-control" placeholder="Enter
Your Username" autocomplete="off" required="required" name="user_username"/>
</div>
<div class="form-outline mb-4">
<label for="user_email" class="form-label">Email</label>
<input type="text" id="user_email" class="form-control" placeholder="Enter Your
Email" autocomplete="off" required="required" name="user_email"/>
</div>
<div class="form-outline mb-4">
<label for="user_password" class="form-label">Password</label>
<input type="password" id="user_password" class="form-control"
placeholder="Enter Your Password" autocomplete="off" required="required"
name="user_password"/>
</div>
<div class="form-outline mb-4">
<label for="conf_user_password" class="form-label">Confirm Password</label>
<input type="password" id="conf_user_password" class="form-control"
placeholder="Confirm Password" autocomplete="off" required="required"
name="conf_user_password"/>
</div>
<div class="form-outline mb-4">
<label for="user_address" class="form-label">Address</label>
<input type="password" id="user_address" class="form-control"
placeholder="Enter Your Address" autocomplete="off" required="required"
name="user_address"/>
</div>
<div class="form-outline mb-4">
<label for="user_contact" class="form-label">Contact</label>
<input type="password" id="user_contact" class="form-control"
placeholder="Enter Your Mobile Number" autocomplete="off" required="required"
name="user_contact"/>
</div>
<div class="text-center mt-4 pt-2">
<input type="submit" value="Register" class="bg-info py-2 px3 border-0"
name="user_register">
<p class="small fw-bold mt-2 pt-2 mb-0 ">Already Have an Account ?<a
href="user_login.php">Login</p>
</div>
</form>
</div>
</div>
</div>
</body>
</html>
<?php
if(isset($_POST['user_register'])){
$user_username=$_POST['user_username'];
$user_email=$_POST['user_email'];
$user_password=$_POST['user_password'];
$conf_user_password=$_POST['conf_user_password'];
$user_address=$_POST['user_address'];
$user_contact=$_POST['user_contact'];
$user_ip=getIPAddress();
$select_query="SELECT * FROM `user_table` where username='$user_username'";
$result=mysqli_query($conn,$select_query);
$rows_count=mysqli_num_rows($result);
if($rows_count> 0){
echo "<script>alert('Username Already Exists')</script>";
}
else if($user_password!=$conf_user_password){
echo "<script>alert('Passwords Do not Match')</script>";
}
else{
$insert_query="INSERT INTO `user_table`
(username,user_email,user_password,user_ip,user_address,user_mobile) values
('$user_username','$user_email','$user_password','$user_ip','$user_address','$user_contact')";
$sql_execute=mysqli_query($conn,$insert_query);
if($sql_execute){
echo "<script>alert('Data Inserted Successfully')</script>";
}else{
die(mysqli_error($conn));
}
}
}