<!DOCTYPE html>
<head>
    <title>LOGIN PAGE</title>
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
    <h4>    LOGIN PAGE    </h4>
    <br>
    <form method="POST">
        <label>USERNAME:</label>
        <input type="text" name="username" required>
        <br><br><br><br>
        <label>PASSWORD: </label>
        <input type="password" name="password" required>
        <br> <br>
        <input type="submit" name="submit">
    </form>    
</body>
</html>

<?php
session_start();
include('connect.php');
if(isset($_SESSION["login"]) && $_SESSION["login"]==1)
    redirect('info.php');
$_SESSION["login"]=0;
if(isset($_POST["submit"]))
{
    $uname=$_POST["username"];
    $psw=$_POST["password"];
    // echo '<br><br><br>'.$_POST["username"].'<br><br>';
    // echo '<br><br>'.$_POST["password"].'<br><br>';
    $sql="SELECT * FROM users";
    $r=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_row($r))
    {
        echo $row[0];
        echo $row[1];
        echo $uname;
        echo $psw;
        if($uname==$row[0] && $psw==$row[1])
        {
            $_SESSION["login"]=1;
            $_SESSION["username"]=$uname;
            redirect('home.php');
        }
    }
    echo "INVALID USERNAME/PASSWORD";
}
?>