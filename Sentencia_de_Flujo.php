<?php
$Valor1 = 20;
$Valor2 = 39;
$Valor3 = 108;
$Persona = "Mujer";
$Letra = 'c'; 
// sentencia if operadores relacionales o operadores logicos
/*if (Condicion){
    codigo o accion a realizaren el navegador si se cumple la condicion
}
else {
    si la accion es contraria al if dentro de las llaves de la accion a ejecutarse
}
*/
// este if ocupara operadores relacionales 
/* if ($Valor1 >= $Valor2){
    echo "Verdadero";
}
else{
    echo "Falso";
}
*/ 
/*
comparando el valor de la variable con un string
if($Persona == 'Hombre'){
    echo "Como el genero de la variable persona es Hombre se llamara Alex <br>";
}
else{
    "Como no se cumple el if entonces el genero no es hombre por lo tanto no se puede nombrar";
}
/*
if($Valor1 >= $Valor2 && $Valor1 >= $Valor3){
    echo "El valor de: ".$Valor1." es mayor a :".$Valor2." y mayor a:".$Valor3;
}
else if($Valor2 >= $Valor1 && $Valor2 >= $Valor3){
    echo "El valor de: ".$Valor2." es mayor a :".$Valor1." y mayor a:".$Valor3;
}
else if($Valor3 >= $Valor1 && $Valor3 >= $Valor2){
    echo "El valor de: ".$Valor3." es mayor a :".$Valor1." y mayor a:".$Valor2;
}
else{
    echo "no se cumple ninguna de las condiciones";
}
*/
if($Letra == 'a' || $Letra == 'e' || $Letra == 'i' || $Letra == 'o' || $Letra == 'u'){
    echo "El valor de la variable letra es ".$Letra." una vocal"; 
}
else{
    echo "El valor de la variable letra es una consonante";
}

?>