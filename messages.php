<!DOCTYPE html>
<html>
<head>
    <title>Victor's Guest Book</title>
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet" /> 
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
    <link href="./main.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        include("settings.php");
        $con = mysqli_connect($ip, $username, $password, $database);

        if (mysqli_connect_errno())
            echo "failed: " . mysqli_connect_error();

        $query = "SELECT * FROM messages";
        $result = mysqli_query($con, $query);
        mysqli_close($con);

        echo "<table>";
        echo "<tr><th>Name</th><th>Message</th></tr>";
        while ($row = $result->fetch_assoc())
        {
            $name = $row["name"];
            $message = $row["message"];
            echo "<tr><td>" . $name . "</td><td>" . $message . "</td></tr>";
        }
        echo "</table>";
    ?>
</body>
</html>