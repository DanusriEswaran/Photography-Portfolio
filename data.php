<?php
$servername="localhost:3307";
$username="root";
$password="";
$database="final_database";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("Error deleting record: ".mysqli_error($con));
}
?>
