<?php

function redirect($url) 
{
    ob_start();
    header('Location: '.$url);
    ob_end_flush();
    die();
}

$dbhost='localhost:3306';
$dbuser='root';
$dbpass='';
$dbname='cn';
$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
if($conn)
{
    // echo "<br><br><br><br><br>Connected to cn Database<br>";
}
?>