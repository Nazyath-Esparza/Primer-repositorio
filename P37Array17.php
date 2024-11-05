<?php
/*CBTIS 89
   Programa que por medio de un array que contiene números positivos y negativos, los ordene en 2 arrays distintos
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

$ArrayNumeros = array(-4, 8, 17, -11, -3, 1, 20, -30, 21, 50, -73, -7, -10, -8);
$ArrayPositivo = array();
$ArrayNegativo = array();
$SumaPositivo=0;
$SumaNegativo=0;

for ($i=0; $i <count($ArrayNumeros); $i++) {

	if ( $ArrayNumeros[$i] >= 0) 
	{
	 $ArrayPositivo[] = $ArrayNumeros[$i] ;
	}
	else {
	   $ArrayNegativo[] = $ArrayNumeros[$i] ;
	}
}

	echo "<P> NÚMEROS POSITIVOS </P>";
for ($i=0; $i <count($ArrayPositivo) ; $i++) { 
	echo $ArrayPositivo[$i];
	echo "<br>"; 
}

	echo "<P> NÚMEROS NEGATIVOS </P> ";
for ($i=0; $i <count($ArrayNegativo) ; $i++) { 
	echo $ArrayNegativo[$i] ;
	echo "<br>"; 
}
?>