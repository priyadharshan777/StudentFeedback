<?php

$con = mysqli_connect("localhost","root","","feed");
$sql = "SELECT * FROM feedbacks";
$a=$res = mysqli_query($con,$sql);
$j = 0;
$k = 0;
$l = 0;

while($row = mysqli_fetch_array($res)){
	for($i=1;$i<14;$i++)
		if($row["c".$i] == 1)
			$j+=1;
		elseif($row["c".$i] == 2)
			$k+=1;
		elseif($row["c".$i] == 3)
			$l+=1;
}
if($j!=0)
$j = $j/13;
if($k!=0)
$k = $k/13;
if($l!=0)
$l = $l/13;

$num = mysqli_num_rows($a);
if($j!=0)
$agree = $j/$num;
else
	$agree=0;
if($k!=0)
$dis = $k/$num;
else
	$dis=0;
if($l!=0)
$nu = $l/$num;
else
	$nu=0;


?><!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
window.onload = function () {
	var chart = new CanvasJS.Chart("chartContainer"
	{
		theme: "theme2",
		title:{
			text: "online feedback system"
		},		
		data: [
		{       
			type: "pie",
			showInLegend: true,
			toolTipContent: "{y} - #percent %",
			yValueFormatString: "#,##,,.#percentage# ",
			legendText: "{indexLabel}",
			dataPoints: [
				{  y: <?php echo $agree;?>, indexLabel: "neutral" },
				{  y: <?php echo $dis;?>, indexLabel: "disagree" },
				{  y: <?php echo $nu;?>, indexLabel: "agree" },
			]
		}
		]
	});
	chart.render();
}
</script>
<script type="text/javascript" src="link.html"></script></head>
<body>
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
</body>
 </html>