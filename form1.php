<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
include('connect.php');

$q='select * from students';
$q1='select * from batch';
$q2='select * from courses';
$q3='select * from semester';

$query=mysqli_query($con,$q1);
echo '<div style="width:500px; height:600px; background:beige;">';
echo '<table>';
while($row=mysqli_fetch_assoc($query))
{
	echo '<tr>';
	echo '<td>'.$row['batchCode'].'</td>';
	echo '<td>'.$row['timing'].'</td>';

	echo '</tr>';
}
echo '</table>';
echo '</div>';

$query=mysqli_query($con,$q);
echo '<div style="width:500px; height:600px; background:aqua;">';
echo '<table>';
while($row=mysqli_fetch_assoc($query))
{
	echo '<tr>';
	echo '<td>'.$row['stdId'].'</td>';
	echo '<td>'.$row['stdName'].'</td>';
	echo '<td>'.$row['stdEmail'].'</td>';
	echo '<td>'.$row['stdContact'].'</td>';
	echo '<td>'.$row['stdAddress'].'</td>';
	echo '</tr>';
}
echo '</table>';
echo '</div>';




?>
</body>
</html>