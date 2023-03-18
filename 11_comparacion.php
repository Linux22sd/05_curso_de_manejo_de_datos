<?php

/**
 * array_diff(array1, array2)
 * array_diff_assoc(array1, array2)
 */

//-------------------------------------------------------------------------------------------
echo "array_diff(array1, array2) Muestra las diferencias que hay entre dos arrays simples <br>";
echo "mosrara solo los que tenga el primero que no tenga el segundo array asi que el orden<br>";
echo "si importa, no altera el array original se puede solo mostrar las diferencias con <br>";
echo "var_dump o print_r, o se pueden guardar en una variable <br>";

$cursos = ['javascript','php', 'vue', 'regex','tailwind', 'node'];
$whishes = ['php','laravel','javascript','css','html','composer'];

$diferencias = array_diff($cursos, $whishes);
echo '<pre>';
print_r($diferencias);
echo '</pre>';

//-------------------------------------------------------------------------------------------
echo "array_diff_assoc(array1, array2) funciona de la misma forma que array_diff_assoc(array1, array2) <br>";
echo "con la diferencia que este se usa para arrays asociativos<br>";

$cursos1 = [
    'interaccion' => 'javascript',
    'backend' => 'php', 
    'framework1' => 'vue', 
    'expressions' => 'regex',
    'styleHtml' => 'tailwind'
];
$whishes1 = [
    'interaccion' => 'javascript',
    'backend' => 'php',
    'framework2' => 'laravel',
    'style' => 'css',
    'structure' => 'html'
];

$diferencias1 = array_diff_assoc($cursos1, $whishes1);
echo '<pre>';
print_r($diferencias1);
echo '</pre>';
?>