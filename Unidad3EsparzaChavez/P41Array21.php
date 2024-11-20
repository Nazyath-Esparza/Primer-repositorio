<?php
/* CBTIS 89
   Programa que almacena en un arreglo el valor de 6 compras, después en otros arrays de debe almacenar información de acuerdo a las siguentes condiciones:
   El arreglo del descuento  se llenará con:
   Compra > 300 = 0
   Compra < 300 && >= 1000 = 10%
   Compra < 1000 && >= 2500 = 15%
   Compra < 2500 && >= 5000 = 20%
   Compra < 5000 = 25%
   En el array del total, se coloca a la diferencia entre la compra  y el descuento y en array de porcentaje se coloca el porcentaje aplicado
   Nazyath Elianeth Esparza Chávez
   3°A Programación Matutino
*/

$Compras=array(800,2700,1900,150,7600,1000,);
$Descuentos=array();
$Total=array();
$Porcentaje=array();

foreach ($Compras as $Compra) {
   $descuento=0;
   $porcentaje=0;

     if ($Compra<300){
       $descuento=$Compra*0;
       $porcentaje=0;
   }elseif($Compra>300 && $Compra<=1000) {
       $descuento=$Compra*0.10;
       $porcentaje=10;
   } elseif ($Compra>1000 && $Compra<=2500) {
       $descuento=$Compra*0.15;
       $porcentaje=15;
   } elseif ($Compra>2500 && $Compra<=5000) {
       $descuento=$Compra*0.20;
       $porcentaje=20;
   }  else {
       $descuento=$Compra*0.25;
       $porcentaje=25;
   }
$Descuentos[]=$descuento;
$Total[]=$Compra-$descuento;
$Porcentaje[]=$porcentaje;
}

echo "Compras" . " ------- " . "Descuentos" . " ------- " . "Total" . " ------- " . "Descuento";
for ($i=0; $i<count($Compras); $i++) { 
	echo "<br>";
   echo "$$Compras[$i]   ----------------   $$Descuentos[$i]   ------------   $$Total[$i]   -----------   $Porcentaje[$i]%"; 
}
?>