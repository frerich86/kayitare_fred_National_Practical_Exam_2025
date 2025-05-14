<?php
$con=mysqli_connect("localhost","root","","student_records");
$id=$_REQUEST['stid'];
$sql=mysqli_query( $con,"select * from students where StudentId='$id'");
while($row=mysqli_fetch_array($sql)){

  $FName=$row["FirstName"];
  $LName=$row["LastName"];
  $gender=$row["Gender"];
  $dob=$row["DateOfBirth"];
  $CN=$row["ContactNumber"];
  $email=$row["Email"];
  $address=$row["Address"];
  $EnrollmentDate=$row["EnrollmentDate"];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
body{
 background-color:rgb(228, 237, 241);

}
form{
    border: 2px solid white;
    margin-top: 30px;
   width: 50%;
   /* margin-left:25%; */
   /* padding: 12px; */
}
input{
    width:fit-content;
}
</style>
<body>
    <form method="POST">
<h1>REGISTRATION FORM</h1>
<legend for="FirstName">FirstName</legend>
<input type="text" name="FirstName" value="<?php echo $FName ?>" required>
<legend for="LastName">LastName</legend>
<input type="text" name="LastName" value="<?php echo $LName ?>" required>
<legend for="Gender">Gender</legend>    
<input type="radio" name="Gender" value="<?php echo $gender ?>" >male
<input type="radio" name="Gender" value="<?php echo $gender ?>" >female
<legend for="DateOfBirth">DateOfBirth</legend>
<input type="Date" name="DateOfBirth" value="<?php echo $dob ?>"  required>
<legend for="ContactNumber">ContactNumber</legend>
<input type="number" name="ContactNumber" value="<?php echo $CN ?>"  required>
<legend for="Email">Email</legend>
<input type="Email" name="Email" value="<?php echo $email ?>"  required>
<legend for="Address">Address</legend>
<input type="text" name="Address" value="<?php echo $address ?>"  required>
<legend for="EnrollmentDate">EnrollmentDate</legend>
<input type="date" name="EnrollmentDate" value="<?php echo $EnrollmentDate ?>"  required><br>
<input type="submit" name="submit" value="submit" required>
<input type="reset" name="reset"><br>
<button><a href="#">Create_New_Account</a></button>
</form>
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student_records");
if(isset($_POST["submit"])){
  $id=$_POST["StudentId"];
  $FName=$_POST["FirstName"];
  $LName=$_POST["LastName"];
  $gender=$_POST["Gender"];
  $dob=$_POST["DateOfBirth"];
  $CN=$_POST["ContactNumber"];
  $email=$_POST["Email"];
  $address=$_POST["Address"];
  $EnrollmentDate=$_POST["EnrollmentDate"];
  $id=$_REQUEST["id"];
$sql=mysqli_query( $con,"update students set StudentId='$id',FirstName='FName',LastName='LName',Gender='$gender',DateOfBirth='$dob',ContactNumber='$CN',Email='$email',$address='Address',$EnrollmentDate='EnrollmentDate' where StudentId='$id' ");
header("location:students.php");
}
?>