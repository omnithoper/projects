<html>
<head>
</head>
<body>
<table style="border; 1px solid black; border collapse; width: 100;">
<?php
error_reporting(E_ALL);


$counter = 1;
$data = [
'cesar',
'anthony',
'mikko',
'yoly',
];

echo '<br />';

for ($x = 1; $x <= 9; $x++) {
	for ($y = 1; $y <= 9; $y+=3) {
	echo ' 	<td style="border": 1px solid black;">
	     [$x = $y,] ';
	}
	echo '<br />';
	    </td>
}

echo '<br />';

/*
do {
	echo "there $counter<br />";	
	// $counter--;
} while($counter > 0 && $counter <= 10);

while ($counter > 0 && $counter <= 10) {
	echo " here $counter<br />";		
}
*/

echo '<br />';
echo "what $counter<br />";	
echo '<br />';
echo "$data[0]<br />";
echo "$data[1]<br />";
echo "$data[2]<br />";
echo "$data[3]<br />";

echo '<br />';

for ($counter = 0; $counter <= count($data) - 1; $counter++) {
	echo "$data[$counter]<br />";
}
echo '<br />';

foreach ($data as $datum) {
	echo "$datum<br />";		
}

?>
</table>
</body>
</html>