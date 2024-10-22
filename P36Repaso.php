<?php
/* CBTIS 89
   Programa que realiza un programa que al agregar una lista de nombres y especialidades para cada alumno, sea ordenado de forma ascendente por medio de un ciclo, después, dar de baja a 2 alumnos y que se integren 5 nuevos, vuelve a ordenarlos ahora de manera descendente. (Al inicio, que sean mínimo 5 nombres al principio)
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

/*$ArrayAlumnos=array("Akechi Goro","Makoto Yuki","Aigis","Ren Amamiya","Yu Narukami");
$ArrayCarreras=array("ARH","Programación","Mecatrónica","Contabilidad","Construcción");*/
$Alumnos=array("Akechi Goro"=>"ARH","Makoto Yuki"=>"Programación","Aigis"=>"Mecatrónica","Ren Amamiya"=>"Contabilidad","Yu Narukami"=>"Construcción");
//$Longitud=count($Alumnos);

//sort($Alumnos);
/*for ($i=0; $i<$Longitud;$i++) { 
   echo "El alumno ".$ArrayAlumnos[$i]. " estudia la carrera de ".$ArrayCarreras;
   echo "<br>";
}*/
foreach ($Alumnos as $Nombre => $Carrera) {
   echo "El alumno  " , $Nombre . " estudia la carrera de " . $Carrera;
   echo "<br>","<br>";
}
?>