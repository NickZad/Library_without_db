<?php

echo "</head>
<body background='EmfanisiOlon_vil.jpg'><center>";

echo "<br><br><br><br><form name='form1' method='post'>
  <p>
    <label for='textfield'>Επώνυμο μαθητή:</label>
    <input type='text' name='eponimo'>
  </p>
  <p>
    <input type='submit' name='submit' id='submit' value='Αναζήτηση'>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>";

if (isset($_POST['eponimo'])){
$eponimo=$_POST['eponimo'];
require_once 'include_db.php';
$result=mysql_query("SELECT * FROM `mathitis` WHERE eponimo like '%$eponimo%'");


$num=mysql_num_rows($result);
if ($num>0)
{
	
	echo "<table border='1' align='center'><tr><th colspan='7'>Υπάρχουν $num μαθητές</th></tr>
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
	
	echo "<form name='form2' method='post' action='diagrafi_math2.php'>
  <p>
    <label for='textfield'>Αρ. μητρώου μαθητή:</label>
    <input type='text' name='code' >
  </p>
  <p>
    <input type='submit' name='submit' id='submit' value='Διαγραφή'>
  </p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>";

}
else
		echo "<b>Δεν υπάρχουν εγγραφές</b><br>";
	
	
	
}
	

echo "<br><center>
<a href='arhiki.php' ><input type='button' name='button' id='button' value='ΑΡΧΙΚΗ'></a>
</center>";


?>