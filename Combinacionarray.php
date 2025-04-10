<?php

$datos = ["nombre"=>"Cristian","edad"=>21,"correo"=>"cjvera070@gmail.com"];
$datos2 = ["ciudad"=>"bogota","Profesion"=>"comerciante"];

$datosCombinados = array_merge($datos,$datos2);
print_r($datosCombinados);

?>