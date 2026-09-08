<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            padding: 4px;
            display: flex;
            justify-content: center;
            height: 100vh;
            align-items: center;
            margin: 0;
        }

        .table-card {
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            width: 100%;
            max-width: 650px;
            overflow: hidden;
        }

        .table-header {
            background-color: #007bff;
            color: #ffffff;
            font-weight: bold;
            padding: 14px 20px;
            font-size: 16px;
        }

        .table-body {
            padding: 10px 20px;
            font-size: 14px;
            color: #333333;
            line-height: 2.2;
        }

        /* Styles each line printed by PHP */
        .table-body br {
            margin-bottom: 8px;
        }
    </style>
</head>
<body>

<div class="table-card">
    <div class="table-header">Registered Courses</div>
    <div class="table-body">
      
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

    </div>
</div>

</body>
</html>
