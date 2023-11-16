<!DOCTYPE html>
<html>
<head>
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <ul>
        <li><a href="home.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="about.asp">About</a></li>
      </ul>

</body>
</html>

<?php
session_start();
include('connect.php');
if(isset($_SESSION["login"]))
{
    if($_SESSION["login"]==0)
        redirect('login.php');    
}
else
redirect('login.php');

// $sql="SELECT * FROM users";
// $r=mysqli_query($conn,$sql);
// $row=mysqli_fetch_row($r);
// echo "$row[0] $row[1]";
?>