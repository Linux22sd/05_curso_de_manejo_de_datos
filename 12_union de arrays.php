<?php
/**
 * array_merge(array1, array2);
 * $array = [...arra1, ...array2];
 * array_merge_recursive(array1, array2);
 * $array_combine($keys, $valores);
 */

echo "---------------------------------------------------------------------------------------<br>";
echo "array_merge(array1, array2) junta arrays, los arrays originales no<br>";
echo "seran afectados, se puede salvar la union en un array nuevo<br>";
$array1 = ['php','javascript','html'];
$array2 = ['vue','css','node'];

$array3 =array_merge($array1, $array2);

echo '<pre>';
print_r($array3);
echo '</pre>';

echo "Usuando array unpacking ( array = [...array1, ...array2] )<br>";
$array4 =[...$array1, ...$array2];

echo '<pre>';
print_r($array4);
echo '</pre>';

echo "---------------------------------------------------------------------------------------<br>";
echo "array_merge_recursive(array1, array2) Si encuentra llaves iguales pondra los<br>";
echo "valores dentro de una misma llave, los separara en grupos<br>";

$array5 = [
    'backend' => 'php',
    'frontend' => 'javascript',
    'framework' => 'vue'
];
$array6 = [
    'frontend' => 'html', 
    'backend' => 'javascript',
    'framework' => 'laravel'
];

$array7 = array_merge_recursive($array5, $array6);
echo '<pre>';
print_r($array7);
echo '</pre>';

echo "---------------------------------------------------------------------------------------<br>";
echo "array_conbine(keys, values) junta dos arrays el primero con las llaves<br>";
echo "el segundo con los valores<br>";

$llaves = ['frontend', 'backend', 'framework'];
$valores = ['javascript', 'php', 'vue'];

$union = array_combine($llaves, $valores);
echo '<pre>';
print_r($union);
echo '<pre/>';


?>