<!DOCTYPE html>
<head>
    <title>REGISTER PAGE</title>
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
    <h4>    REGISTER PAGE    </h4>
    <br>
    <form method="POST" action="register.php">
        <label>USERNAME:</label>
        <input type="text" name="username" required>
        <br><br><br><br>
        <label>PASSWORD: </label>
        <input type="password" name="password" required>
        <br><br><br><br>
        <label>Re-Enter Password: </label>
        <input type="password" name="password-repeat" required>
        <br> <br>
        <input type="submit" name="submit">
    </form>    
</body>
</html>

<?php
include('connect.php');
if(isset($_POST["submit"]))
{
    $uname=$_POST["username"];
    $psw=$_POST["password"];
    // echo '<br>'.$_POST["username"].'<br>';
    // echo '<br>'.$_POST["password"].'<br>';
    // echo '<br>'.$_POST["password-repeat"].'<br>';
    if($_POST["password"]==$_POST["password-repeat"])
    {
        $sql="INSERT INTO users(username,password)
                VALUES('$uname','$psw')";
        $r=mysqli_query($conn,$sql);
        mkdir(__DIR__ . $uname, 0655); //Creates a folder for each User
    }
    else
    {
        echo "Please Try Again";
    }
}
?>