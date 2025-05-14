<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
   <style>
    .navigation{
        background-color:rgb(228, 237, 241);
       text-align: center;
       padding: 20px 5px;
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
    <div class="navigation">
        <div>
            <h1>WELCOME TO THE STUDENT MANAGEMENT RECORDS</h1>
        </div>
        <nav>
        <a href="index.php">Home</a>
        <a href="users.php">Users</a>
        <a href="courses.php">Courses</a>
        <a href="students.php">Students</a>
        <a href="">Attandence</a>
        <a href="">Grade</a>
        <a href="login.php">Login</a>
        <a href="register.php">SignUp</a>
        <a href="logout.php">Logout</a>
        </nav>
    </div>
</body>
</html>