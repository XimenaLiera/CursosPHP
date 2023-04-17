<?php
//La salida de los datos sera true el valor es tipo string y false sera lo contrario
$Valores = array(false, true, null, 78,'23', 23, '23.5','',''.'0', 0 );
foreach($Valores as $valor){
    echo "Es un string(";
    var_export($valor);
    echo ") = ";
    echo var_dump(is_string($valor));
    echo "<br><br>";
}
$Mensaje = "Esto es una cadena de caracteres";
if(is_string($Mensaje)){
    echo $Mensaje."<br>";
    var_dump($Mensaje);
}
else{
    echo "El valor de mansaje no es un string es: ".$Mensaje;
}

?>