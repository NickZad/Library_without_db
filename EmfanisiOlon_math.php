<?php
echo "</head>
<body background='EmfanisiOlon_vil.jpg'>";

require_once 'include_db.php';


$result=mysql_query("select * from mathitis") ;

$num=mysql_num_rows($result);
if ($num>0)
{
	
	
	echo "<br><br><br><br><table border='3' align='center'><tr><th colspan='7'>Υπάρχουν $num μαθητές</th></tr>
			<tr>
				<th>ΑΡ. ΜΗΤΡΩΟΥ</th>
				<th>ΟΝΟΜΑ</th>
				<th>ΕΠΩΝΥΜΟ</th>
				<th>ΤΗΛΕΦΩΝΟ</th>
				<th>E-MAIL</th>
			</th>";
		
	
	for ($i=0;$i<$num; ++$i)
	{
		$r = mysql_fetch_array($result);
		echo "<tr>
					<th>".$r['id']."</th>
				<th>".$r['onoma']."</th>
				<th>".$r['eponimo']."</th>
				<th>".$r['tilefono']."</th>
				<th>".$r['email']."</th>
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