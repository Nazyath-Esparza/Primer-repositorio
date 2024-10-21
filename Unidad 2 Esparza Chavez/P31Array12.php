<?php
/* CBTIS 89
   Programa que mostrar un Array Ascendente y Descendente
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$arraynumerico = array(1, 3, 2, 5, 4, 7, 6);

sort($arraynumerico);
var_export($arraynumerico);

echo "<p>";
rsort($arraynumerico);
var_export($arraynumerico);
?>