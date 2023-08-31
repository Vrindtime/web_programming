<html>
<?php 
session_start();
$_SESSION['user'] = 'user';
$_SESSION['pass'] = 'pass';
?>
<head>
    <title>Login Page using session in php</title>
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
            box-shadow: 2px 2px 5px black;
        }

        form {
            padding: 8%;
            font-size: 24px;
        }

        input {
            padding: 2%;
            margin: 2%;
        }

        input[type="text"],
        input[type="password"] {
            font-size: 24px;
            padding: 2%;
            margin: 5% 2%;
        }

        input[type="submit"] {
            font-size: 24px;
            text-transform: uppercase;
            padding: 3% 5%;
            border: none;
            border-radius: 15px;
            color: white;
            background-color: black;
        }

        p {
            font-size: 24px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Login Form</h1>
        <form method="POST" action="./login.php">
            <label for="uid">UserName: </label><input type="text" name="uid" id="uid" placeholder="Enter user"><br>
            <label for="pid">Password: </label><input type="password" name="pid" id="pid" placeholder="Enter pass"><br>
            <input type="submit" value="sumbit" name="submit"><br>
        </form>
    </div>
</body>

</html>