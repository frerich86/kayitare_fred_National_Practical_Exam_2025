<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T_students</title>
       <style>
 body{
 background-color:rgb(228, 237, 241);
 max-width: 100%;

}
form{
    border: 2px solid white;
    margin-top: 30px;
   width: 50%;
   margin-left:25%; 
    padding: 12px;
    width: fit-content;
}
table{
    max-width: 100%;
}
td a{
    text-decoration: none;
}
input{
    margin: 5px;
}
input[type='text'],input[type='time'],input[type='date'],input[type='number'],input[type='email']{
    display: flex;
    flex-direction: column;
    width: 95%;
}
form a{
    text-decoration: none;
}
 nav a{
        text-decoration: none;
        gap: 30px;
    }
    nav{
                display: flex;
        flex-direction: row;
        justify-content: center;
        gap: 30px;
    }

    </style>
</head>
<body>
<form method="POST">
  <nav>
        <a href="index.php">Home</a>
        <a href="users.php">Users</a>
        <a href="courses.php">Courses</a>
        <a href="students.php">Students</a>
        <a href="attendence.php">Attandence</a>
        <a href="grade.php">Grade</a>
        <a href="login.php">Login</a>
        <a href="register.php">SignUp</a>
        <a href="logout.php">Logout</a>
        </nav>

<h1>REGISTRATION FORM</h1>
<legend for="FirstName">FirstName</legend>
<input type="text" name="FirstName" placeholder="Enter your FastName" required>
<legend for="LastName">LastName</legend>
<input type="text" name="LastName" placeholder="Enter your LastName" required>
<legend for="Gender">Gender</legend>    
<input type="radio" name="Gender">male
<input type="radio" name="Gender">female
<legend for="DateOfBirth">DateOfBirth</legend>
<input type="Date" name="DateOfBirth" placeholder="Enter your DateOfBirth" required>
<legend for="ContactNumber">ContactNumber</legend>
<input type="number" name="ContactNumber" placeholder="Enter your ContactNumber" required>
<legend for="Email">Email</legend>
<input type="Email" name="Email" placeholder="Enter yourEmail" required>
<legend for="Address">Address</legend>
<input type="text" name="Address" placeholder="Enter your Address" required>
<legend for="EnrollmentDate">EnrollmentDate</legend>
<input type="date" name="EnrollmentDate"  required><br>
<input type="submit" name="submit" value="submit" required>
<input type="reset" name="reset"><br>
<a href="signup.php">Create_New_Account</a>
</form>
  <table border="1">
<thead>
    <tr>
        <th>StudentId</th>
        <th>FirstName</th>
        <th>LastName</th>
        <th>Gender</th>
        <th>DateOfBirth</th>
        <th>ContactNumber</th>
        <th>Email</th>
        <th>Address</th>
        <th>EnrollmentDate</th>
        <th>delete</th>
        <th>update</th>
    </tr>
</thead>

<tbody>
    <tr>   
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student_records");
if(isset($_POST['submit'])){
    $fname=$_POST['FirstName'];
    $lname=$_POST['LastName'];
    $gender=$_POST['Gender'];
    $dateofbirth=$_POST['DateOfBirth'];
    $contactnumber=$_POST['ContactNumber'];
    $email=$_POST['Email'];
    $address=$_POST['Address'];
    $EnrollmentDate=$_POST['EnrollmentDate'];
 $insert=mysqli_query($con,"insert into students values('','$fname','$lname','$gender','$dateofbirth','$contactnumber',' $email','$address','$EnrollmentDate')");
}
?>
<?php
$con=mysqli_connect("localhost","root","","student_records");
$select=mysqli_query($con,"select * from students");
while($row=mysqli_fetch_array($select)){
    echo"<tr>";
    $id=$row['StudentId'];
    echo"<td>".$row["StudentId"]."</td>";
echo"<td>".$row['FirstName']."</td>";
echo"<td>".$row['LastName']."</td>";
echo"<td>".$row['Gender']."</td>";
echo"<td>".$row['DateOfBirth']."</td>";
echo"<td>".$row['ContactNumber']."</td>";
echo"<td>".$row['Email']."</td>";
echo"<td>".$row['Address']."</td>";
echo"<td>".$row['EnrollmentDate']."</td>";
echo "<td> <a href='delete_students.php?id=$id'>delete</a><td/>";
echo"<td> <a href='update_students.php?stid=$id'>update</a><td/>";
echo"</tr>";
}
?>