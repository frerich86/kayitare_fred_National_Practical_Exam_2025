
<html>
<head>
<title>inserting and selecting by use of foreign key</title>
</head>
<boby>
<!-- attendenceid(pk),studentid(fk) and coursesid(fk)  -->

<form method="post">
<label for="">studentid</label>
<select name="student" id="" required>
<?php
$con=mysqli_connect("localhost","root","","review");
$query=mysqli_query($con,"select * from students");
while($row=mysqli_fetch_array($query)){
?>
<option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
<?php
}
?>
</select>
<label for="">courseid</label>
<select name="course" id="" required>
<?php
$con=mysqli_connect("localhost","root","","review");
$query=mysqli_query($con,"select * from courses");
while($row=mysqli_fetch_array($query)){
?>
<option value="<?php echo $row[0]?>"><?php echo $row[1]?></option>
<?php
}
?>
</select>
<label for="">attendencedate</label>
<input type="date" name="attendencedate" required>
<label for="">courseid</label>
<input type="text" name="attendencestatus" required>
<input type="submit" name="submit" value="submit" required>
<input type="reset" name="reset" value="reset" required>

<?php
$con=mysqli_connect("localhost","root","","review");
if(isset($_POST['submit'])){
$student=$_POST['student'];
$course=$_POST['course'];
$attendencedate=$_POST['attendencedate'];
$attendencestatus=$_POST['attendencestatus'];
$query=mysqli_query($con,"insert into attendance values('','$student','$course','$attendencedate','$attendencestatus')");
}
?>

<table border="1">
  <thead>
<tr>
<th>students</th>
<th>course</th>
<th>attendencedate</th>
<th>attendencestatus</th>
<th>delete</th>
<th>update</th>
</tr>
<tbody>
<tr>
<?php
$con=mysqli_connect("localhost","root","","review");
$query=mysqli_query($con,"select * from attendance");
while($row=mysqli_fetch_array($query)){
   echo"<tr>";
   echo"<td>".$row['student']."</td>";
   echo"<td>".$row['course']."</td>";
   echo"<td>".$row['attendencedate']."</td>";
   echo"<td>".$row['attendencestatus']."</td>";
   echo"<td><a href='delete.php?id=$id'>delete</a></td>";
   echo"<td><a href='update.php?id=$id'>update</a></td>";
}

?>
</tr>
</tbody>


</form>

</body>
</html>