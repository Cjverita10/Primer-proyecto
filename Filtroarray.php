<?php 
$numeros =[1,3,8,20,15,2,45];
$numeroFiltrar = array_filter($numeros,function($value)
{
    return $value > 20;
});


print_r($numeroFiltrar)

?>