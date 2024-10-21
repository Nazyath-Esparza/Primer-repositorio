<?php
/* CBTIS 89
   Programa que almacena los datos de un arreglo y posteriormente los imprime 
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$AlumnoS=array("Akechi Goro"=>"ARH","Makoto"=>"Programación","Aigis"=>"Mecatrónica","Ren Amamiya"=>"Contabilidad");

echo "**LISTA DE ESTUDIANTES**","<br>","<br>";

foreach ($AlumnoS as $Nombre=>$Carrera) {
	echo "El alumno  ".$Nombre . " del CBTIs 89, estudia la carrera de " .$Carrera;
	echo "<br>","<br>";
}
?>