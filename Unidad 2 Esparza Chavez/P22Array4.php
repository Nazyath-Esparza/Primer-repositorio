<?php
/* CBTIS 89
   Programa que almacena los datos de un arreglo y posteriormente los imprime 
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$Equipo=array("Portero"=>"Ren Amamiya", "Defensa"=>"Akechi Goro","Medio"=>"Makoto Yuki","Delantero"=>"Aigis");
echo "**SELECCION NACIONAL DE JAPÓN**","<br>","<br>";
foreach ($Equipo as $Posicion=>$Jugador) {
	echo "El jugador ".$Jugador . " es el " .$Posicion;
	echo "<br>","<br>";
}
?>