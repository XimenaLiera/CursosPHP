<?php
/*Una practica donde se calcule el promedio de 5 calificaciones verificando que los valores sean numericos y 
posteriormente indicar si esta aprobado o no aprobado segun el valor asignado por el promedio
*/
$Calificacion1 = 9;
$Calificacion2 = 10;
$Calificacion3 = 8;
$Calificacion4 = 10;
$Calificacion5 = 7;
$Minimo = 7;
/*
if(is_numeric($Calificacion1) && is_numeric($Calificacion2) && is_numeric($Calificacion3) && is_numeric($Calificacion4) &&is_numeric($Calificacion5)){
    $Promedio = ($Calificacion1 + $Calificacion2 + $Calificacion3 + $Calificacion4 + $Calificacion5)/5;
    if ($Promedio >= $Minimo){
        echo "<br><br> Tu promedio es de: ".$Promedio." por lo tanto estas aprobado";
    }
    else{
        echo "<br><br> Tu promedio es de: ".$Promedio." por lo tanto no estas aprobado";
    }
}
else{
    $Mensaje = "Alguno de los valores contenidosen las calificaciones no es un valor numerico";
    echo $Mensaje;
}
*/
if (!is_numeric($Calificacion1)){
    echo "El valor de la calificacion 1: ".$Calificacion1." no es un valor numerico";
}

if (!is_numeric($Calificacion2)){
    echo "El valor de la calificacion 2: ".$Calificacion2." no es un valor numerico";
}

if (!is_numeric($Calificacion3)){
    echo "El valor de la calificacion 3: ".$Calificacion3." no es un valor numerico";
}

if (!is_numeric($Calificacion4)){
    echo "El valor de la calificacion 4: ".$Calificacion4." no es un valor numerico";
}

if (!is_numeric($Calificacion5)){
    echo "El valor de la calificacion 5: ".$Calificacion5." no es un valor numerico";
}
else{
    $Promedio = ($Calificacion1 + $Calificacion2 + $Calificacion3 + $Calificacion4 + $Calificacion5)/5;
    if ($Promedio >= $Minimo){
        echo "El promedio obtenido es de: ".$Promedio." por lo tanto estas aprobado";
    }
    else{
        echo "El promedio obtenido es de: ".$Promedio." por lo tanto no estas aprobado";
    }
}

?>