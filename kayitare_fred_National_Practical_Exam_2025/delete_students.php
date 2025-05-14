<?php
$con=mysqli_connect("localhost","root","","student_records");
$id=$_REQUEST['id'];
$sql= mysqli_query($con,"delete from students where StudentId='$id'");
if($sql){
    echo "record deleted successful";
}
else{
    echo "record not deleted successful";
}
header('location:students.php');
?>