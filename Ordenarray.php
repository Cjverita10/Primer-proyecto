<?php

$edades= ["cristian"=> 21,"messi"=> 38,"andres"=> 25,"carmen"=> 52,"juan"=> 20];
asort($edades);

$edadesFiltradas = array_filter($edades,function($value)
{
    return $value > 20;
});
print_r($edadesFiltradas);



?>