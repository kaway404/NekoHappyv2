<?php
$conn = mysql_connect($hostp,$userp,$passwrdp) or die (mysql_error);
$db=mysql_select_db($dbp, $conn) or die (mysql_error);
?>
