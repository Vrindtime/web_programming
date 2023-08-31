<link rel="stylesheet" href="./style.css">

<?php
require('./conn.php');
function del()
{
    $sno = $_REQUEST['sid'];
    $query = "delete from detail where sno='$sno'";
    $result = mysql_query($query) or die(mysql_error());
    if ($result) {
        echo "<script>alert('The id of the student has been deleted');</script>";
    }
    echo "The id of the student has been deleted";
    echo "<a href='./index.php'>Go back</a>";
}
function update()
{
    $sno = $_REQUEST['sid'];
    $query = "SELECT * FROM detail WHERE sno='$sno'";
    $result = mysql_query($query) or die(mysql_error());

    if ($row = mysql_fetch_array($result)) {
        $name = $row["name"];
        $DOB = $row["DOB"];
        $address = $row["address"];
        $fname = $row["fname"];
        $mob = $row["mob"];
    } else {
        echo "Student not found.";
        return;
    }

    echo '
    <body>
    <h1>Student Update</h1>
    <div class="container">
        <form action="./update.php" method="POST">
            <div class="input">
                <label for="sno">Admission number</label>
                <input type="number" name="sno" value="' . $sno . '"><br>
            </div>
            <div class="input">
                <label for="name">Student Name</label>
                <input type="text" name="name" value="' . $name . '"><br>
            </div>
            <div class="input">
                <label for="DOB">Date Of Birth</label>
                <input type="date" name="DOB" value="' . $DOB . '"><br>
            </div>
            <div class="input">
                <label for="address">Student Address</label>
                <textarea name="address" id="address" rows="5">' . $address . '</textarea><br>
            </div>
            <div class="input">
                <label for="fname">Student Fathers name</label>
                <input type="text" name="fname"  value="' . $fname . '"><br>
            </div>
            <div class="input">
                <label for="mob">Mobile Number</label>
                <input type="number" name="mob" value="' . $mob . '">
                <br>
            </div>
            <input type="submit" name="submit">
            <input type="reset">
        </form>
    </div>
</body>
    ';
}

if (isset($_REQUEST['submit'])) {
    $sno = $_REQUEST['sid'];
    $oper = $_REQUEST['oper'];
    echo "<h1>sno:'$sno' and op:'$oper'</h1>";
    if (isset($_POST["submit"])) {
        switch ($oper) {
            case 'update':
                update();
                break;
            case 'delete':
                del();
                break;
            default:
                echo "ERROR in Operation Selection";
        }
    }
}
?>