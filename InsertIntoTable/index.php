<?php
$host="localhost";
$username="root";
$password="";
$db="new_course";

$con=mysqli_connect($host, $username, $password, $db);

if(isset($_POST["submit"])){
    $cname=$_POST["cname"];
    $cd=$_POST["cd"];
    $query="INSERT INTO course VALUES ('$cname', '$cd')";
    mysqli_query($con, $query);
}
?>
