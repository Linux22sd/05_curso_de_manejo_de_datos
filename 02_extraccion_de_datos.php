<?php
/**
 * substr(array, 0comienza, 20termina);
 * explode(',', $array);
 * implode(',', $array);
 * trim(string);
 * rtrim(string);
 * ltrim(string);
 */

 
//extraer de una cadena de texto caracteres
$data = 'Estudio PHP';
echo $data[0];
echo '<br>';
//--------------------------------------------------------------------------------------------------
//substr()
$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime quia velit odio sequi hic aut. Laborum praesentium animi corporis enim nam quibusdam. Magni repudiandae ratione nesciunt ut, odio deleniti voluptatum';
$extract = substr($post, 0, 20);
echo "$extract...[ver mas]";
echo '<br>';
//--------------------------------------------------------------------------------------------------
//explode convierte un string a un array()
$data2 = 'JavaScript, php, laravel';
$tags = explode(',',$data2);
echo '<pre>';
print_r($tags);
echo '</pre>';
//--------------------------------------------------------------------------------------------------
//implode convierte un array a un string
$data3 = implode(',', $tags);
echo '<pre>';
print_r($data3);
echo '</pre>';
//--------------------------------------------------------------------------------------------------
//trim() quitar espacios derecha e izquierda
//rtrim() quitar espacios derecha
//ltrim() quitar espacios Izquierda
$texto = '    Este es un curso de PHP    ';
$texto_sin_espacios = trim($texto);
echo $texto_sin_espacios;
echo '<br>';
?>
