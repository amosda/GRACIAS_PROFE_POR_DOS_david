<?php 

$intNum = 1;
echo  '<table>';
while ($intNum <= 10) {
	$intMultiplicacion = intNum * 8;
	echo "<tr>";
	echo "<td> 8</td>";
	echo "<td> X </td>";
	echo "<td> 8</td>";
	echo "<td> $intNum</td>";
	echo "<td> = </td>";
	echo "<td>  $intMultiplicacion </td>";
	echo "<tr>";
	$intNum++;

}
echo "</table>";

 ?>