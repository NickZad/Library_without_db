<?php
echo "</head>
<body background='eisagogi_vil2.jpg'><br>br><br><br><br><br><center><b>";

if (isset($_POST['code'])){
require_once 'include_db.php';
$kod=$_POST['code'];

$result2=mysql_query("Delete  FROM mathitis WHERE id='$kod'");
echo "Επιτυχής διαγραφή";
}
else
	echo "Αποτυχία διαγραφής";

echo "</b><br><br><br>
<a href='arhiki.php' ><input type='button' name='button' id='button' value='ΑΡΧΙΚΗ'></a>
</center>";

?>