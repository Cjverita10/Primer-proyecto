<?php

$marcas = array("kalley", "home elements", "oster", "niatec");

$marcas[] = "samurai";

print_r($marcas);

$marcasseleccionadas = array_slice($marcas,0,2);
print_r($marcasseleccionadas);

?>