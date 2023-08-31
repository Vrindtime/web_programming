<html>
<head>
    <title>Student Operations</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        .container {
            height: 45vh;
        }
        form {
            padding: 5%;
        }
        select {
            font-size: 14px;
            padding: 2%;
        }
        input[type="submit"],
        input[type="reset"] {
            background-color: black;
        }
        .input {
            margin: 5% 0%;
        }
    </style>
</head>
<body>
    <?php require('./conn.php');?>
    <h1>Student Operations</h1>
    <div class="container">
        <form action="./op.php" method="POST">
            <div class="input">
                <label for="sid">Select Student Id:</label>
                <select name="sid">
                    <?php
                    while ($row = mysql_fetch_array($result)) {
                        $name = $row['name'];
                        $sno = $row['sno'];

                        echo "<option value='$sno'>$name</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="input">
                <label for="name">Operations: </label>
                <div class="op">
                    <label for="name">Update</label>
                    <input type="radio" name="oper" value="update">
                </div>
                <div class="op">
                    <label for="name">Delete</label>
                    <input type="radio" name="oper" value="delete">
                </div>
            </div>
            <input type="submit" name="submit">
        </form>
    </div>
</body>
</html>