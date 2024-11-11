<?php
/* CBTIS 89
   Programa que almacena por medio de un ciclo  los números del 150 al 200 de la siguiente manera: En el $Arreglo1 van los números pares, el $Arreglo2 los números impares y en el $Arreglo3 va la suma de los números que corresponden al mismo índice
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$Arreglo1 = array();
$Arreglo2 = array();
$Arreglo3 = array();

echo "Array 1" . " ------- " . "Array 2" . " ------- " . "Array 3";
echo "<br>";

for ($i=150; $i<=201 ; $i++) {
   if ($i%2==0) {
      $Arreglo1[]=$i;
   }
   else {
       $Arreglo2[]=$i;
   }
}
for ($i=0; $i<count($Arreglo1); $i++) { 
    $Arreglo3[] =$Arreglo1[$i] + $Arreglo2[$i];
echo $Arreglo1[$i] . " ------------- " . $Arreglo2[$i] . " ------------- " . $Arreglo3[$i];
echo "<br>";
}
?>