<?php
echo "</head>
<body background='EmfanisiOlon_vil.jpg'>";

require_once 'include_db.php';


$result=mysql_query("select * from book") ;

$num=mysql_num_rows($result);
if ($num>0)
{
	
	
	echo "<br><br><br><br><table border='3' align='center'><tr><th colspan='7'>Υπάρχουν $num εγγραφές</th></tr>
			<tr>
				<th>ΚΩΔΙΚΟΣ</th>
				<th>ΤΙΤΛΟΣ</th>
				<th>ΣΥΓΓΡΑΦΕΑΣ</th>
				<th>ΕΚΔΟΤΗΣ</th>
				<th>ΣΥΝΟΛΟ</th>
				<th>Η/Μ ΕΚΔΟΣΗΣ</th>
				<th>ΚΑΤΗΓΟΡΙΑ</th>
			</th>";
		
	
	for ($i=0;$i<$num; ++$i)
	{
		$r = mysql_fetch_array($result);
		echo "<tr>
				<th>".$r['bookid']."</th>
				<th>".$r['booktitle']."</th>
				<th>".$r['bookauthor']."</th>
				<th>".$r['bookpublisher']."</th>
				<th>".$r['booktotal']."</th>
				<th>".$r['bookdateissue']."</th>
				<th>".$r['bookcategory']."</th>
			  </tr>";
	}
			
	echo "</table>";
	
	
}
else
		echo "<b>Δεν υπάρχουν εγγραφές</b><br>";

echo "<br><center>
<a href='arhiki.php' ><input type='button' name='button' id='button' value='ΑΡΧΙΚΗ'></a>
</center>";
?>