<?php
if (isset($_POST["submit"])) {
    $sno = $_REQUEST["sno"];
    $name = $_REQUEST["name"];
    $age = $_REQUEST["age"];
    $address = $_REQUEST["address"];
    $mob = $_REQUEST["mob"];

    if ($sno == "") {
        echo '<script>alert("Admission number must be filled")</script>';
        return false;
    }
    if (strlen($name) < 3) {
        echo '<script>alert("Name must have at least 3 characters")</script>';
        return false;
    }
    if ($age< 18) {
        echo '<script>alert("Age must be above 18")</script>';
        return false;
      }
      if (strlen($address) < 10) {
        echo '<script>alert("Address must have at least 10 characters")</script>';
        return false;
    }
    if (!preg_match('/^[0-9]{10}+$/', $mob)) {
        echo '<script>alert("Mobile Number is not Valid")</script>';
    } else {
        echo '<script>alert("Validation Successful")</script>';
        header('Location: ./index.html');
        exit;
    }
}
?>