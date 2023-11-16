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
    <br> 
    <h3>&nbspINFO </h3>
    <?php
    session_start();
    include('connect.php');
    echo "USERNAME:  ".$_SESSION["username"];
    ?>
    <br><br>
    <form method="POST">
        <input type="submit" value="logout" name="logout">
    </form>

</body>
</html>

<?php
if(isset($_POST["logout"]))
{
    $_SESSION["login"]=0;
    redirect('login.php');
}
