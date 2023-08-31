<html>
<head>
    <style>
        body{
            height: 100vh;
            display: grid;
            place-content: center;
            overflow: hidden;
        }
    </style>
    <title>Page Visit</title>
</head>
<body>
    <?php
    $conn = mysql_connect("localhost", "root", "");
    mysql_select_db("student") or die(mysql_error());
    $s_query = "SELECT `page_count` FROM `count`";
    $s_result = mysql_query($s_query) or die(mysql_error());
    $row = mysql_fetch_row($s_result);
    //if it is null , adds zero , so we can ++.
    if ($row[0] === NULL) {
        $query = "INSERT INTO `count` (`page_count`) VALUES (1)";
        mysql_query($query) or die(mysql_error());
    } else {
        $count = $row[0] + 1;
        $query = "UPDATE `count` SET `page_count` = '$count'";
        mysql_query($query) or die(mysql_error());
    }
    $s_result = mysql_query("SELECT `page_count` FROM `count`");
    $row = mysql_fetch_row($s_result);
    echo "<h1>You Visited This Site : " . $row[0] . " times</h1>";
    mysql_close($conn);
    ?>
</body>
</html>