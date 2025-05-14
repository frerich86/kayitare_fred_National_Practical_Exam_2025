<?php
$con=mysqli_connect("localhost","root","","student_records");
$id=$_REQUEST['id'];
$sql=mysqli_query( $con,"delete from courses where CourseId='$id'");
header("location:courses.php");