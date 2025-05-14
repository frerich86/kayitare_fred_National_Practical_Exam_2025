<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T_users</title>
          <style>
 body{
 background-color:rgb(228, 237, 241);

}
form{
    border: 2px solid white;
    margin-top: 30px;
   width: 50%;
   margin-left:25%; 
    padding: 12px;
}
table{
    text-align: center;
    margin:6% 6%;
}
td a{
    text-decoration: none;
}
input{
    margin: 5px;
}
input[type='text'],input[type='time']{
    display: flex;
    flex-direction: column;
    width: 95%;
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
<form method="POST">
<h1>REGISTRATION FORM</h1>
<div class="legend">
<legend for="UserName">UserName</legend>
<input type="text" name="UserName" placeholder="Enter your name">
<legend for="Password">Password</legend>
<input type="password" name="Password" placeholder="Enter your Password">

<input type="submit" name="submit" value="submit">
<input type="reset" name="reset">
</form>
<table border="1">
   <thead>
      <tr>
         <th>UserId</th>
         <th>UserName</th>
         <th>Password</th>
         <th>delete</th>
         <th>update</th>
      </tr>
   </thead>
   <tbody>
      <tr>
</div>
    
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student_records");
if(isset($_POST['submit'])){
    $username=$_POST['UserName'];
    $password=$_POST['Password'];
    $insert=mysqli_query($con,"insert into users values('',' $username',' $password')");
}
?>
<?php
$con=mysqli_connect("localhost","root","","student_records");
  $select=mysqli_query($con,"select * from users");
while($row=mysqli_fetch_array($select)){
 $id=$row["UserId"];
   echo "<tr>";
   echo"<td>".$row["UserId"]."</td>";
   echo"<td>".$row['UserName']."</td>";
   echo"<td>".$row['Password']."</td>";
   echo"<td> <a href='delete_users.php?id=$id'>delete</a></td>";
     echo"<td> <a href='update_users.php?id=$id'>update</a></td>";
    echo"</tr>";
 
   header("locaton:users.php");
}
?>