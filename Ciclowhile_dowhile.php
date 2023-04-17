<?php
//Ciclo while y do-while
/*
while(Expresion o validacion){
    acciones se cumple la espresion
}

do{
    sentencia o accion
} while(Expresion o validacion);
*/
/* $variable = 0;
while(variable < 10){
    $variable ++; //se incrementa $variable uno en uno 
    echo "El valor de la variable es = ".$variable."</br></br>"
}
echo "El ciclo while acaba en: ".$variable;
*/
$variable = 9;
do{
    echo $variable."</br>";
    $variable ++;
}
while($variable <= 10);

?>