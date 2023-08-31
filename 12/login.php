<?php
    session_start();
?>
<html>
<head>
    <title>Login Status</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            padding: 0;
            display: grid;
            place-content: center;
            height: 100vh;
            text-align: center;
            text-transform: uppercase;
            background-color: #f5f5f5;

        }

        .container {
            width: 50vw;
            height: 50vh;
            border: 1px solid white;
            border-radius: 15px;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            box-shadow: 2px 2px 5px black;
        }
        p {
            font-size: 28px;
        }
        a{
            font-size: 18px;
            padding: 2% 5%;
            text-decoration: none;
            color: white;
            background-color: black;
            border-radius: 12px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php 
        if (isset($_POST['submit'])) {
            $uid = $_POST['uid'];
            $pid = $_POST['pid'];
            if ($uid == $_SESSION['user'] && $pid == "pass") {
                echo "<p>Your are logged in</p>";
            } else {
                echo "<p>Please Login</p>";
                echo "<a href='./index.php'>Return to Login Form</a>";
            }
        }
        ?>
    </div>
</body>
</html>
