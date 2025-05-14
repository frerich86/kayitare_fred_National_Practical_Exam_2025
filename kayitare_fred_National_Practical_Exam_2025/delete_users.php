<?php
$con=mysqli_connect("localhost","root","","student_records");
$id=$_REQUEST['id'];
$delete=mysqli_query( $con,"delete from users where userid=$id");
if($con){

    echo "<script>alert('delete successfully')";
    header("location:users.php");
}
else{
echo "<script>alert('delete unsuccessfully')";
}

?>