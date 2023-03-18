<?php
/**
 * sort()
 * rsort()
 * ksort()
 * krsort()
 * array_slice(array, #a_cortar)
 * array_chunk(array, #por grupo)
 * array_push(array, valor(s)) 
 * array_unshift(array, valor(s)) 
 * array_pop() 
 * array_shift() 
 * array['llave']='valor'
 * unset(array['llave'])
 * array_flip()
 */

echo "-------------------------------------------------------------------------<br>";
echo "Ordenando un array simple con strings (texto)<br>";
echo "sort() Ordena en orden asendente alfabetico<br>";
$cursos1 = ['php', 'javascript', 'laravel'];
sort($cursos1);
echo '<pre>';
print_r($cursos1);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "rsort() Ordena en orden desendente alfabetico<br>";
echo "Ordenando un array simple con strings (texto)<br>";
$cursos2 = ['php', 'javascript', 'laravel'];
rsort($cursos2);
echo '<pre>';
print_r($cursos2);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "ksort() Ordena en orden asendente alfabetico refiriendose a las llaves<br>";
echo "Ordenando un array asociativo <br>";
$cursos3 = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];
ksort($cursos3);
echo '<pre>';
print_r($cursos3);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "krsort() Ordena en orden desendente alfabetico refiriendose a las llaves<br>";
echo "Ordenando un array asociativo <br>";
$cursos4 = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];
krsort($cursos4);
echo '<pre>';
print_r($cursos4);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "array_slice(array, posicion) quita el valor que se encuentra en la posicion indicada<br>";
echo "esta funcion no modifica el array original hay que guardar el resultado en una variable<br>";
$cursos5 = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];
$cursos6 = array_slice($cursos5, 1);
echo '<pre>';
print_r($cursos6);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "array_chunk(array, numero) separa el array en grupos del numero que se le indique<br>";
echo "esta funcion no modifica el array original hay que guardar el resultado en una variable<br>";
$cursos7 = [
    10 => 'php', 
    100 => 'javascript', 
    1000 => 'laravel'
];
$cursos8 = array_chunk($cursos7, 2);

echo '<pre>';
print_r($cursos8);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "array_push(array, valor) agrega valor al final del array<br>";
$cursos9 = ['php', 'javascript', 'laravel'];

array_push($cursos9, 'css');
echo '<pre>';
print_r($cursos9);
echo '</pre>';
//--------
echo "array_unshift(array, valor) agrega valor al principio del array<br>";

array_unshift($cursos9, 'composer');
echo '<pre>';
print_r($cursos9);
echo '</pre>';
//--------
echo "array_pop(array) elimina el valor al final del array<br>";

array_pop($cursos9);
echo '<pre>';
print_r($cursos9);
echo '</pre>';
//--------
echo "array_shift(array) elimina el valor al principio del array<br>";

array_shift($cursos9);
echo '<pre>';
print_r($cursos9);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "array['key'] = 'valor' agrega o edita valor del array asociativo<br>";
echo "si agrega nuevo lo agrega al final si edita aguno existente lo dejara en su lugar<br>";
$cursos10 = [
    'backend' => 'php', 
    'frontend' => 'javascript', 
    'framework' => 'laravel'
];

$cursos10['style']="css";
echo '<pre>';
print_r($cursos10);
echo '</pre>';
//--------
echo "unset('key', 'valor') elinina un elemento con la llave de un array asociativo<br>";

unset($cursos10['style']);
echo '<pre>';
print_r($cursos10);
echo '</pre>';

echo "-------------------------------------------------------------------------<br>";
echo "array_flip(array) cambia la llave al lugar del valor y el valor al lugar de la llave<br>";
echo "esta funcion no modifica el array original hay que guardar el resultado en una variable<br>";

$cursos11 = array_flip($cursos10);

echo '<pre>';
print_r($cursos11);
echo '</pre>';
?>