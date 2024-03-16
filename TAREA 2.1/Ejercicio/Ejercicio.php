<?php

if($_POST){
    // Definición de la función g
function g($b, $c) {
     return (7 * $b - 3) % ($c * $c + 1);
 }
 
 // Definición de la función f
 function f($a) {
     return 2 * $a + 5; // Ejemplo de una función f
 }
 
 // Definición de la función h
 function h($x, $y, $z) {
     // Ajuste si x es negativo
     if ($x < 0) {
         $x = -$x;
         $y = -$y;
     }
     $resultado = f($x / $y) + 3 * g($z / $y, $x);
     return $resultado;
 }
 

        $x1 = $_POST["txtX"];
        $y1 = $_POST["txtY"];
        $z1 = $_POST["txtZ"];

        $Calcular = h($x1, $y1, $z1);

        echo $Calcular;
     }


?>