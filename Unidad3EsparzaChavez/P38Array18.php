<?php
/* CBTIS 89
   Programa que almacena datos en un arrreglo multidimensional y posteriormente los imprime en diferentes posiciones
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
 $datos = array(
   array(10, 20, 30),array(40, 50, 60),array(70, 80, 90));

 echo "NORMAL";
 echo "<br>";
 for ($i=0; $i<3; $i++) { 
 	for ($j=0; $j<3 ; $j++) { 
 		echo $datos[$i][$j]." ";
 	}
 		echo "<br>";	
 }
 echo "<br> FILAS A COLUMNAS";
 echo "<br>";
 for ($i=0; $i<3; $i++) { 
 	for ($j=0; $j<3 ; $j++) { 
 		echo $datos[$j][$i]." ";
 	}
 		echo "<br>";	
 }
echo "<br> COLUMNAS INVERSAS";
echo "<br>";
 for ($i=0; $i<3; $i++) { 
 	for ($j=2; $j>=0 ; $j--) { 
 		echo $datos[$i][$j]." ";
 	}
 		echo "<br>";	
 }

 echo "<br> FILAS INVERSAS";
  echo "<br>";
 for ($i=0; $i<3; $i++) { 
 	for ($j=0; $j<3 ; $j++) { 
 		rsort($datos);
 		echo $datos[$i][$j]." ";
 	}
 		echo "<br>";	
 }
echo "<br> ESPEJO INVERSO";
echo "<br>";
 for ($i=0; $i<3; $i++) { 
 	for ($j=2; $j>=0 ; $j--) { 
 		echo $datos[$i][$j]." ";
 	}
 		echo "<br>";	
 }
?>