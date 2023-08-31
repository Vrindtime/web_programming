<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("student") or die(mysql_error());
?>
<html>
<head>
    <title>Student Details</title>
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
        h1 {
            font-size: 32px;
            text-transform: uppercase;
            text-decoration: underline;
        }
        .container {
            width: 30vw;
            height: 80vh;
            border: 1px solid white;
            border-radius: 15px;
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 2px 2px 5px black;
        }
        form {
            padding: 15%;
            font-size: 14px;
        }
        input {
            padding: 2%;
            margin: 2%;
        }
        input[type="text"],input[type="password"],
        input[type="number"],input[type="date"] {
            font-size: 14px;
            padding: 2%;
        }
        input[type="submit"],input[type="reset"] {
            font-size: 14px;
            text-transform: uppercase;
            padding: 4% 3%;
            border: none;
            border-radius: 15px;
            color: white;
            background-color: black;
        }
        input[type="reset"] {
            background-color: lightcoral;
        }
        p {
            font-size: 24px;
        }
        input {
            padding: 0% 2%;
        }
        .input {
            display: flex;
            flex-direction: column;
        }
        .input label {
            text-align: start;
            font-size: 18px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <h1>Student Details</h1>
    <div class="container">
        <form action="#" method="POST">
            <div class="input">
                <label for="sno">Admission number</label>
                <input type="number" name="sno" placeholder="Enter Admin.no Here"><br>
            </div>
            <div class="input">
                <label for="name">Student Name</label>
                <input type="text" name="name" placeholder="Enter Name Here"><br>
            </div>
            <div class="input">
                <label for="DOB">Date Of Birth</label>
                <input type="date" name="DOB"><br>
            </div>
            <div class="input">
                <label for="address">Student Address</label>
                <textarea name="address" id="address" rows="5" placeholder="House Name                                                       Street Name                                                        City Name                                                          Pincode"></textarea><br>
            </div>
            <div class="input">
                <label for="fname">Student Fathers name</label>
                <input type="text" name="fname" placeholder="Enter Father's Name Here"><br>
            </div>
            <div class="input">
                <label for="mob">Mobile Number</label>
                <input type="number" name="mob" placeholder="Enter Mobile Number Here">
                <br>
            </div>
            <input type="submit" name="submit">
            <input type="reset">
        </form>
    </div>
    <?php
    if (isset($_POST["submit"])) {
        $sno = $_REQUEST["sno"];
        $name = $_REQUEST["name"];
        $DOB = $_REQUEST["DOB"];
        $address = $_REQUEST["address"];
        $fname = $_REQUEST["fname"];
        $mob = $_REQUEST["mob"];
        if ($sno > 0) {
            $sql = "insert into detail values ('$sno', '$name', '$DOB','$address','$fname','$mob')";
            $result = mysql_query($sql) or die(mysql_error());
            if ($result) {
                echo "<script>alert('Data Successfully Inserted into the  database');</script>";
            }
        }
    }
    ?>
</body>
</html>