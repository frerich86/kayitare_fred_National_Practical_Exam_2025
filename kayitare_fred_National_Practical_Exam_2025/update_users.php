<?php
$con = mysqli_connect("localhost","root","","student_records");
$id = $_REQUEST['id'];
$fetch =mysqli_query($con,"select * from users where UserId='$id'");
while ($row = mysqli_fetch_array($fetch)) {
    $id=$row["UserId"];
    $userid= $row["UserId"];
    $UserName =$row['UserName'];
    $Password =$row['Password'];
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
<body>
    
<form method="POST">
    <div class="legend">
<label for="">username</label>
<input type="text" name="UserName" value="<?php echo $UserName ?>">
<label for="">password</label>
<input type="text" name="Password" value="<?php echo $Password ?>">
</div>
<input type="submit"  name="submit" value="submit">
<input type="reset" name="reset" value="reset">

</form>
</body>
</html>
<?php
$con = mysqli_connect("localhost","root","","student_records");
if(isset($_POST['submit'])){
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $id=$_REQUEST['id'];
    mysqli_query($con,"update users set UserName='$UserName',Password ='$Password' where UserId='$d'");
    header('location:users.php');
}
?>