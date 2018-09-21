<?php
$con = mysql_connect("localhost", "sam", "mili") or die("Αποτυχία");
mysql_query ("SET NAMES 'utf8'",$con);
		//Selecting database
$db=mysql_select_db("ergasiaphp")or die("Αποτυχία σύνδεσης με τη βάση");





?>