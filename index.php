<!DOCTYPE html>
<html>
<head>
    <title>Victor's Guest Book</title>
    <link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet" /> 
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
    <link href="./main.css" rel="stylesheet" type="text/css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="./slideshow.js"></script>
    <script src="./main.js"></script>
</head>

<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

        // check if there is any data from the form
        if (isset($_POST["name"]))
        {
            include("settings.php");
            $con = mysqli_connect($ip, $username, $password, $database);

            // hoping that this doesn't pop up on the day lmao
            if (mysqli_connect_errno())
                echo "failed: " . mysqli_connect_error();

            $query = "INSERT INTO messages (name, message) VALUES ('" . $_POST["name"] . "', '" . $_POST["message"] . "')";
            mysqli_query($con, $query);
            mysqli_close($con);
        }
    ?>
    <img id="slideshow" />
    <div id="mainbody">
        <h1>Remembering Victor Khong</h1>
        <p>Thank you for being a part of our celebration for the life of Victor Khong. Feel free to leave your name and a message below.</p>
        <br />

        <form method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" id="name" placeholder="Please enter your name" required />
            <label for="message">Message: </label>
            <input type="text" name="message" id="message" placeholder="Optionally, also enter a short message" size="75" />
            <br /><br />
            <input type="submit" id="submit" value="Sign the Book" />
        </form>
    </div>
</body>
</html>