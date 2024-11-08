<?php
/*CBTIS 89
   Programa que almacena la información de 6 personas y dependienfo de su edad los contabiliza en distintos arreglos de acurtdo a las siguientes condiciones: -18(Grupo 1), 18&&49(Grupo 2) y +50(Grupo 3) y en los demas se coloca un 0
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/
$Nombre= array("Paco", "Mari", "Lalo", "
	Rosi", "Paty", "Beto");

$Edad=array(17,30,71,38,12,58);
$Grupo1=array();
$Grupo2=array();
$Grupo3=array();

echo "Nom" . " ---- " . "Edad" . " --- " . "Gpo1" . " --- " . "Gpo2" . " --- " . "Gpo3";
echo "<br>";
for ($i=0; $i<6; $i++) { 
	if ($Edad[$i]<18){
		$Grupo1[$i]=1;
		$Grupo2[$i]=0;
		$Grupo3[$i]=0;
	}
	elseif ($Edad[$i]>=18 && $Edad[$i]<=49){
		$Grupo1[$i]=0;
		$Grupo2[$i]=1;
		$Grupo3[$i]=0;
	}
	else{
        $Grupo1[$i]=0;
		$Grupo2[$i]=0;
		$Grupo3[$i]=1;
	}
		echo $Nombre[$i] . " ----- " . $Edad[$i] . " ------- " . $Grupo1[$i] . " --------- " . $Grupo2[$i] . " -------- " . $Grupo3[$i];
		echo "<br>";
}



?>