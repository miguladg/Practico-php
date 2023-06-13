<?php
print_r($_REQUEST);

$palabras = array("sol", "luna", "cielo");

if($_REQUEST["posicion0"] == $palabras[0]){
    echo "La palabra ingresada es correcta";
} else {
    echo "La palabra es incorrecta: ".$palabras[0];
} else {
    echo "La palabra es incorrecta: ".$palabras[1];
} else {
    echo "La palabra es incorrecta: ".$palabras[2];
} 

if($_REQUEST["posicion1"] == $palabras[1])

?>