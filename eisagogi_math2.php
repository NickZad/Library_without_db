<html>
<head>
</head>
<body background="eisagogi_vil2.jpg">
</body>
</html>


<?php

if (isset($_POST['onoma'])){
	
	$onoma=$_POST['onoma'];
	$eponimo=$_POST['eponimo'];
	$tilefono=$_POST['tilefono'];
	$email=$_POST['email'];
	
require_once 'include_db.php';


$result=mysql_query("INSERT INTO mathitis(onoma,eponimo,tilefono,email) 
VALUES('$onoma','$eponimo','$tilefono','$email')") ;

if ($result)
	{
		
		echo "<br><br><br><br><br><br><center><b>Επιτυχής εγγραφή βιβλίου στη βάση.</b></center>";
	}
else
	{
		echo "<br><br><br><br><br><br><center><b>Η εγγραφή απέτυχε.".mysql_error();
		echo "</b></center>";
	}
}	

echo "<br><center><a href='arhiki.php' ><input type='button' name='button' id='button' value='ΑΡΧΙΚΗ'></a></center>";

?>