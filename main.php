<?php

$palabras = array("sol", "luna", "cielo");
$palabrasDesordenadas = array();

for ($i = 0; $i < 3; $i++) {
    $palabrasDesordenadas[$i] = str_shuffle($palabras[$i]);
}

print_r($palabrasDesordenadas);
echo "
<from action='analisis.php>
    <input type='text' name='palabra0'>
    <input type='text' name='palabra1'>
    <input type='text' name='palabra2'>
    <input type='text' name='palabra3'>
    <button type='submit'> Enviar </button>
</from>
";

?>