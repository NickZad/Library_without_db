<?php
echo "</head>
<body background='eisagogi_vil2.jpg'><br>br><br><br><br><br><center><b>";

if (isset($_POST['code'])){
require_once 'include_db.php';
$kod=$_POST['code'];
$timi=$_POST['timi'];


$result2=mysql_query("UPDATE mathitis set tilefono='$timi' where id='$kod'");
echo "Επιτυχής ενημέρωση";
}
else
	echo "Αποτυχία ενημέρωσης";

echo "</b><br><br><br>
<a href='arhiki.php' ><input type='button' name='button' id='button' value='ΑΡΧΙΚΗ'></a>
</center>";

?>