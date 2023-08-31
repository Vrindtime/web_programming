<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("student") or die(mysql_error());
$query = "Select * from detail order by sno";
$result = mysql_query($query) or die(mysql_error());
?>