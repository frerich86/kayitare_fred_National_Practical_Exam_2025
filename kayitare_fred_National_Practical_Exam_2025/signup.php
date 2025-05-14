<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <form method="POST">
<h1>SIGNUP</h1>
<div class="legend">
<legend for="UserName">UserName</legend>
<input type="text" name="UserName" placeholder="Enter your name">
<legend for="Password">Password</legend>
<input type="password" name="Password" placeholder="Enter your Password">
</div>
<input type="reset" name="reset" value="login">
<a href="logout.php">cancel</a>
</form> 
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student_records");
if(isset($_POST['submit'])){
    $username=$_POST['UserName'];
    $password=$_POST['Password'];
$insert=mysqli_query($con,"insert into users values('','$username','$password')");
if($con){
    echo "<script>alert('register successfully')</script>";
    header('location:login.php');
}
else{
   echo "<script>alert('register unsuccessfully')</script>";
}
}
    ?>