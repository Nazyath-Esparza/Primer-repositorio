<?php
/* CBTIS 89
   Programa que almacena los nombres de 6 personas por medio de un ciclo FOR
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$ArrayNombres=array("Akechi Goro", "Ren Amamiya", "Gojo Satoru", "Geto Suguru", "Makoto Yuki", "Aigis");

//Se obtiene el número der elementos
$longitud=count($ArrayNombres);
for ($i=0;$i<$longitud;$i++)
{echo $ArrayNombres[$i];
echo "<br>";
}
?>