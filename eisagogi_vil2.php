<html>
<head>
</head>
<body background="eisagogi_vil2.jpg">
</body>
</html>


<?php

if (isset($_POST['titlos'])){
	
	$titlos=$_POST['titlos'];
	$author=$_POST['author'];
	$publisher=$_POST['publisher'];
	$dateissue=$_POST['dateissue'];
	$category=$_POST['category'];
	$total=$_POST['total'];

require_once 'include_db.php';


$result=mysql_query("INSERT INTO book(booktitle, bookauthor, bookpublisher, booktotal, bookcategory, bookdateissue) 
VALUES('$titlos', '$author','$publisher', '$total', '$category','$dateissue')") ;

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