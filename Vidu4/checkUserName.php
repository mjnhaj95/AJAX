<?php
mysql_connect("localhost", "root", "");
mysql_select_db("testuserajax");

$un = $_GET["un"];
$qr = "SELECT * FROM user
	   WHERE Username='$un'	";
	   
$u = mysql_query($qr);
$dong = mysql_num_rows($u);
echo $dong;

?>