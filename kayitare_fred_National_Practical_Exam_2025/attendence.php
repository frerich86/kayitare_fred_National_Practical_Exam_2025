<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
        <label for="">StudentName</label>
        <select name="student" id="">
        <?php
        $con=mysqli_connect("localhost","root","","student_records");
        $select=mysqli_query($con,"select * from students");
        while($row=mysqli_fetch_array($select)){
        ?>
        <option value="<?php echo $row[0];?>"><?php echo$row[1]?></option>
        <?php
        }
      ?>
        </select>
        <label for="">CourseId</label>
        <select name="course" id="">
            <?php
        $con=mysqli_connect("localhost","root","","student_records");
        $select=mysqli_query($con,"select  * from courses");
        while($row=mysqli_fetch_array($select)){
            ?>
            <option value="<?php echo $row[0];?>"><?php echo $row[1]?></option>
            <?php
        }
       ?>
        </select>
        <label for="AttandenceDate">AttandenceDate</label>
        <input type="date" name="AttandenceDate" required>
        <label for="AttandenceStatus">AttandenceStatus</label>
        <input type="text" name="AttandenceStatus" required>
        <input type="submit" name="submit" value="submit">
        <input type="reset" name="reset" value="reset" >
    
    </form>
    <?php
     $con=mysqli_connect("localhost","root","","student_records");
     if(isset($_POST['submit'])){
        $SI=$_POST['student'];
        $CI=$_POST['course'];
         $AttendanceDate=$_POST['AttandenceDate'];
         $AttendanceStatus=$_POST['AttandenceStatus'];
    $insert=mysqli_query($con,"insert into attendance values('','$CI','$CI','$AttendanceDate',' $AttendanceStatus')");
    if($query){
                        echo"<script>alert ('Attendance record successful')</script>";
                    }else{
                        echo"<script>alert('Attendance record not successful')</script>";
                    }
     }
?>
    <table border="1">
        <thead>
            <th>StudentId</th>
            <th>CourseId</th>
            <th>AttendanceDate</th>
            <th>AttendanceStatus</th>
        </thead>
        <tbody>
        <tr>
           <?php
                $con=mysqli_connect("localhost","root","","student_records");
      $select=mysqli_query($con,"select * from Students,courses where students.StudentId=Courses.CourseId");
      while($row=mysqli_fetch_array($select)){
           echo"<tr>";
           echo"<td>".$row['StudentId']."</td>";
           echo"<td>".$row['CourseId']."</td>";
           echo"<td>".$row['AttendanceDate']."</td>";
           echo"<td>".$row['AttendanceStatus']."</td>";
      }
            ?>
        </tr>
       </tbody>
    </table>
</body>
</html>


  