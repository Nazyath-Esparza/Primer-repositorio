<?php
/* CBTIS 89
   Programa que almacene el nombre de cuatro artículos en un arreglo llamado $Productos y en otro arreglo multidimensional llamado $Precios almacena los precios correspondientes de 3 meses, esto se hace por medio de filas y columnas
   Debes calcular por medio de ciclos el subtotal y el promedio de cada producto y guardarlo en los arreglos $Subtotal y $Promedio setgún corresponda
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

$Productos=array("Vestido","Pantalón","Cinturón","Camiseta");
$Precios= array(
array(500,600,550),array(800,700,600),array(400,200,300),array(500,200,500));
$Subtotal=array();
$Promedio=array();
$Suma=array();

echo "*TIENDA DE ROPA*";
echo "<br>";
echo "PRODUCTOS" . " ------ " . "SUBTOTAL" . " ------ " . "PROMEDIO";
echo "<br>";
for ($i=0;$i<4;$i++){
	for ($j=0;$j<3;$j++) {
$Suma[$i]=$Precios[$i][$j]+$Precios[$i][$j]+$Precios[$i][$j];
$Subtotal[$i]=$Suma[$i];
echo "$Subtotal[$i]";
echo "<br>";
}
}

echo "<br>","*PRECIOS*","<br>";
for ($i=0; $i<4; $i++) { 
 	for ($j=0; $j<3 ; $j++) { 
 		echo $Precios[$i][$j]." ";
 	}
 		echo "<br>";	
 }
?>