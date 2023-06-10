<?php

$palabras = array("sol", "luna", "cielo");
$palabrasDesordenadas = array();

for ($i = 0; $i < 3; $i++) {
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}

print_r($palabrasDesordenadas);

echo "
<from action='analisis.php'>
    <inpunt type='text' name='palabra0'>
    <inpunt type='text' name='palabra1'>
    <inpunt type='text' name='palabra2'>
    <inpunt type='text' name='palabra3'>
    <button type='submit'> Enviar </button>
</from>
";

?>