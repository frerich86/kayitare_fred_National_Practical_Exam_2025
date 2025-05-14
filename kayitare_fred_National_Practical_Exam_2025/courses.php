<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <div class="legend">
<label for="">CourseName</label>
<input type="text" name="CourseName" placeholder="enter your coursename">
<label for="">CourseDescription</label>
<input type="text" name="CourseDescription" placeholder="enter your description">
<label for="">Duration</label>
<input type="time" name="Duration" placeholder="press the duration time">

<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">
    </form>
    <table border="1">
    <thead>
        <tr>
            <th>CourseName</th>
            <th>CourseDescription</th>
            <th>Duration</th>
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
    $cn=$_POST['CourseName'];
     $cd=$_POST['CourseDescription'];
      $dur=$_POST['Duration'];
$insert=mysqli_query($con,"insert into courses values('','$cn','$cd','$dur')");

}
?>
<?php
$con=mysqli_connect("localhost","root","","student_records");
$select=mysqli_query($con,"select * from courses");
while($row=mysqli_fetch_array($select)){
    $id=$row['CourseId'];
    echo"<tr>";
    echo "<td>".$row["CourseName"]."</td>";
    echo "<td>".$row["CourseDescription"]."</td>";
    echo "<td>".$row["Duration"]."</td>";
    echo"<td> <a href='delete_courses.php?id=$id'>delete</a></td>";
    echo"<td> <a href='update_courses.php?id=$id'>update</a></td>";
}
?>