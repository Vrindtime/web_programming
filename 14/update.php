<?php
    $conn = mysql_connect("localhost", "root", "");
    mysql_select_db("student") or die(mysql_error());
?>

<?php
    if (isset($_REQUEST["submit"])) {
        $sno = $_REQUEST["sno"];
        $name = $_REQUEST["name"];
        $DOB = $_REQUEST["DOB"];
        $address = $_REQUEST["address"];
        $fname = $_REQUEST["fname"];
        $mob = $_REQUEST["mob"];
        if ($sno > 0) {
            $sql = "UPDATE `detail` SET `name`='$name',`DOB`='$DOB',`address`='$address',`fname`='$fname',`mob`='$mob' WHERE `sno`='$sno';";
            $result = mysql_query($sql) or die(mysql_error());
            if ($result) {
                echo "<script>alert('Data Successfully Updated in the database');</script>";
            }
        }
    }
?>
<a href="./index.php">Go back</a>