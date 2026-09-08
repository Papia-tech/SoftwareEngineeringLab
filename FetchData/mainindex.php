<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "new_course";

// Exactly matching the 1st code's connection line
$con = mysqli_connect($host, $username, $password, $db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT cname, cd FROM course";
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "Course: " . $row["cname"] . " - Description: " . $row["cd"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
