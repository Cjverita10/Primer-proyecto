<?php

$dato = 10¡

if($dato>=10){
echo"Este dato es mayor o igual a 10"
}else{
    echo"Este dato no es mayor o igual a 10"
}

$marcas = array("oster", "home elements", "niatec", "kalley");

$marcas[] = "samurai";

print_r($marcas);


$eliminarMarca = "niatec";
$llave = array_search($eliminarMarca, $marcas);

if ($llave !== false) {
    unset($marcas[$llave]);
}


$marcas = array_values($marcas);

print_r($marcas);

?>