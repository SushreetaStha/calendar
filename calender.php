<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
	$year=$_POST['year'];
	$month=$_POST['month'];
	$day="01";
	$dt="$year/$month/$day";
	$obj=date_create($dt);
	$startDay=date_format($obj,"w");
	$totalNoOfDays=date_format($obj,"t");
	$count=$startDay;
	$y=date_format($obj,"Y");
	$mon=date_format($obj,"F");
?>
<table border="1">
	<tr>
	<th>SUN</th>
	<th>MON</th>
	<th>TUE</th>
	<th>WED</th>
	<th>THU</th>
	<th>FRI</th>
	<th>SAT</th>
	</tr>
	<?php
	echo "<h2>$y - $mon</h2>";
	echo "<td colspan=$startDay>&nbsp;</td>";
	for($day=1;$day<=$totalNoOfDays;$day++)
	{
		if($count%7==0)
		{
			echo "</tr><tr>";
		}
		$count++;
		echo "<td>$day</td>";
	}

	?>
</table>

</body>
</html>