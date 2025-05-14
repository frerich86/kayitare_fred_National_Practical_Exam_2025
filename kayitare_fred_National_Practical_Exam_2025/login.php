<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
        <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="POST">
<h1>LOGINFORM</h1>
<div class="legend">
<legend for="UserName">UserName</legend>
<input type="text" name="UserName" placeholder="Enter your name">
<legend for="Password">Password</legend>
<input type="password" name="Password" placeholder="Enter your Password">
</div>
<input type="submit" name="submit" value="Login">
<input type="reset" name="reset" value="cancel">
</form>
</body>
</html>
<?php
session_start();
$con=mysqli_connect("localhost","root","","student_records");
if(isset($_POST['submit'])){
    $username=$_POST['UserName'];
    $password=$_POST['Password'];
$query=mysqli_query($con,"select * from users where username='$username' and password='$password'");
$row=mysqli_fetch_array($query);
$count=mysqli_num_rows($query);
if($count>0){
$_SESSION['UserName']=$row['UserName'];
$_SESSION['Password']=$row['Password'];
echo"<script>alert('login successfully')</script>";
}
else{
echo"<script>alert('login failed')</script>";
}
header("location:index.php");
}
?>