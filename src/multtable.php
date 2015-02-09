<!DOCTYPE html>
<html lang = "en">
<head>
<meta charset ="utf-8" />
<title>Assignment 4</title>
</head>
<body>
</body>
<!--
Bryan Bauer
CS 290
Assignment 4 requirements:
This file should accept 4 parameters passed via the URL in a GET request.
min-multiplicand
max-multiplicand
min-multiplier
max-multiplier
It should check than the min is in fact less than or equal to the max multiplicand and multiplier respectively. 
If it is not, it should print the message "Minimum [multiplicand|multiplier] larger than maximum.". 
It should also check that the values returned are integers for each parameter. If it is not it should print 1 message for each invalid input "[min-multiplicand...max-multiplier] must be an integer.". 
It should check that all 4 parameters exist for each missing parameter it should print "Missing parameter [min-multiplicand ... max-multiplier].".

If all of the above conditions are met, it should produce a multiplication table that is (max-multiplicand - min-multiplicand + 2) tall and (max-multiplier - min-multiplier + 2) wide. The upper left cell should be empty. The left column should have integers running from min-multiplicand through max-multiplicand inclusive. 
The top row should have integers running from min-multiplier to max-multiplier inclusive. Every cell within the table should be the product of the corresponding multiplicand and multiplier.

To accomplish the above task you will want to work with loops to dynamically create rows and within each row, loop to create the cells. It should output as a valid HTML5 document.



-->

<?php
if (empty($_GET["min-multiplicand"])) {
   echo "min_multiplicand is empty <br>";
}
if (empty($_GET["max-multiplicand"])) {
   echo "max_multiplicand is empty <br>";
}
if (empty($_GET["max-multiplier"])) {
   echo "min_multiplier is empty <br>";
}
if (empty($_GET["min-multiplier"])) {
   echo "min_multiplier is empty <br>";
}

$min_multiplicand = htmlspecialchars($_GET["min-multiplicand"]);
$max_multiplicand = htmlspecialchars($_GET["max-multiplicand"]);
$max_multiplier = htmlspecialchars($_GET["max-multiplier"]);
$min_multiplier = htmlspecialchars($_GET["min-multiplier"]);

if ($max_multiplier < $min_multiplier){
	echo "Min multiplier larger than max multiplier. <br>";
}

if ($max_multiplicand < $min_multiplicand){
	echo "Max multiplicand larger than min multiplier.";
}

//http://php.net/manual/en/function.empty.php

?>
<?php

	$columns = ($max_multiplicand - $min_multiplicand + 1);
	echo $columns;
	$rows = ($max_multiplier - $min_multiplier + 1);
	echo $rows;
	echo "<table border ='1'>";
	
	$k = -1;
	while($k < $rows)
	{
		if($k == -1){
			echo "<th>&nbsp</th>";
			$k++;
		}
		$headerRow = $min_multiplier + $k;
		echo "<th> $headerRow </th>";
		$k++;
	}
	
		$x = 0;
	while($x < $columns)
	{
		$headerColumn = $min_multiplicand + $x;
		echo "<tr>";
		echo "<th> $headerColumn </th>";
		$z = 0;
		$x++;
		while ($z < $rows){
				$z++;
				$data = $min_multiplicand + $z;
				$data2 = $min-multiplier + $z;
				$multiplied = $data2 * $headerColumn;
				echo "<td>$multiplied</td>";
				
		}
	}
  echo "</table>";
?>