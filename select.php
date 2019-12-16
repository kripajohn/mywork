<?php 
include("connection.php");

$sql="select * from customer ";
$r=$conn->query($sql);
print_r($r);
echo "<br>";
echo "<br>";
/*while($row=$r->fetch_assoc())
{
	print_r($row);
}*/
echo "<table border='1'>";
echo "<tr>";
echo  "<th>name</th>";
echo "<th>email</th>";
echo "<th>pswd</th>";
echo "</tr>";

foreach($r as $row)
{
	//echo $row['name'];
	//echo "<br>";
	//print_r($row);
	//echo "<br>";

	echo "<tr>";
	echo "<td>".$row['name'];
	echo "</td>";
	echo "<td>".$row['email'];
	echo "</td>";
	echo "<td>".$row['password'];
	echo"</td>";
	echo "</tr>";
	
	
}
echo "</table>";
?>
