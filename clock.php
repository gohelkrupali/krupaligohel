<html>
<head>
<meta http-equiv="refresh" content="1">
<style>
td{
	border-style:double;
	border-color:gray;
	color:red;
	background-color:black;
	font-family:dottles;

}
</style>
</head>
</html>
<?php
echo "<table>";
echo "<tr>";
echo "<td>";
date_default_timezone_set("Asia/Kolkata");
echo date('h:i:s a');
echo "<br>";
echo "</td>";
echo "</tr>";
echo "<tr>";
echo "<td>";
$a=date("d-M-Y");
echo $a;
echo "</tr>";
echo "</td>";
echo "</table>";
?>
