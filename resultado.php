<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$par = '';

if ($num1 == $num2)
{
	echo "<script> alert('Los números deben de ser diferentes'); window.location='index.html' </script>";
}else
{
	echo "<div align='center'><h2>Los números pares entre $num1 y $num2 son: <br>";
	for($num1;$num1<=$num2;$num1++)
	{
		if($num1%2==0)
		{
			 $par .= $num1 . ',';
		}
	}
	$par = trim($par, ',');
	echo $par; 
	echo "<br><a href='index.html'>Regresar</a></h2></div>";
}
?>