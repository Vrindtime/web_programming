<?php
$name = $_POST['name'];
$id = $_POST['roll'];
$sub1 = $_POST["HTML"];
$sub2 = $_POST["CSS"];
$sub3 = $_POST["JavaScript"];
$sub4 = $_POST["PHP"];
$sub5 = $_POST["MySQL"];
?>
<html lang="en">
<head>
    <title>Mark Sheet</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        div.container {
            max-width: 800px;
            margin: 0;
            padding: 30px;
            background-color: #fff;
            border-radius: 15px;
            border: 1px solid black;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            padding: 10px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><u>Student Details</u></h1>
        <table border="1">
            <tr>
                <th>Name of student</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Student ID</th>
                <td><?php echo $id; ?></td>
            </tr>
        </table>
        <h2>Mark of student</h2>
        <table border="1">
            <tr>
                <th><b>Subject</b></th>
                <th><b>Marks</b></th>
                <th><b>Total Marks</b></th>
            </tr>
            <tr>
                <th>HTML</th>
                <td ><?php echo $sub1; ?></td>
                <td >100</td>
            </tr>   
            <tr>
                <th>CSS</th>
                <td><?php echo $sub2; ?></td>
                <td>100</td>
            </tr>
            <tr>
                <th>JavaScript</th>
                <td><?php echo $sub3; ?></td>
                <td>100</td>
            </tr>
            <tr>
                <th>PHP</th>
                <td><?php echo $sub4; ?></td>
                <td>100</td>
            </tr>
            <tr>
                <th>MySQL</th>
                <td><?php echo $sub5; ?></td>
                <td>100</td>
            </tr>
        </table>
    </div>
</body>
</html>
