<?php
/* CBTIS 89
   Programa que ordena, agrega y elimona datos de un arreglo de forma acendente y descendente 
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$ArrayNombres= array("Akechi","Ren","Makoto","Aigis","Sasalma","Kider");
$Longitud=count($ArrayNombres);

sort($ArrayNombres);
for ($i=0; $i<$Longitud; $i++) {
   echo $ArrayNombres[$i];
   echo "<br>";
}
echo "<br>";
echo "El número de elementos actual es: ".$Longitud;
array_push($ArrayNombres,"Kirito", "Tere", "Jazmín","Rose");
unset($ArrayNombres[3]);
unset($ArrayNombres[6]);
$Longitud=count($ArrayNombres);

echo "<p>";
rsort($ArrayNombres);
for ($i=0; $i<$Longitud; $i++) {
   echo $ArrayNombres[$i];
   echo "<br>";
}
echo "<br>";
echo "El número de elementos actual es: ".$Longitud;
?>