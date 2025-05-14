<?php
$con=mysqli_connect("localhost","root","","student_records");
$id=$_REQUEST['id'];
$fetch=mysqli_query($con,"select * from students where StudentId='$id'");
while($row=mysqli_fetch_array($fetch)){
    $id=$row["id"];
    $CourseName=$row["CourseName"];
    $CourseDescription=$row["CourseDescription"];
    $Duration=$row["Duration"];
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update-courses.php</title>
</head>
<body>
   <form method="POST">
<label for="">CourseName</label>
<input type="text" name="CourseName" value="<?php echo $CourseName ?>">
<label for="">CourseDescription</label>
<input type="text" name="CourseDescription" value="<?php echo $CourseDescription ?>">
<label for="">Duration</label>
<input type="time" name="Duration" value="<?php echo $Duration ?>">
<input type="submit" name="submit" value="submit">
<input type="reset" name="reset" value="reset">
    </form> 
</body>
</html>
<?php
$con=mysqli_connect("localhost","root","","student_records");
if(isset($_POST['submit'])){
    $name=$_POST['CourseName'];
    $description=$_POST['CourseDescription'];
    $duration=$_POST['Duration'];
$update=mysqli_query($con,"update students set CourseName='$name',CourseDescription=$CourseDescription,Duration='$duration' where CourseId='$id' ");
header('location:courses.php');
}

?>