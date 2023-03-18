<?php
echo "---------------------------------------------------------------------------------<br>";
//Array simple
echo "----Array simple----<br>";
$lista = ['JS', 'Laravel', 'PHP', 'Vuejs'];

echo "Impresion de array simple con pre<br>";
echo '<pre>';
print_r($lista);
echo '</pre>';

echo "Impresion valores de array simple usando foreach<br><br>";
foreach($lista as $l1){
    echo "$l1 <br>";
}
echo "<br>";
echo "---------------------------------------------------------------------------------<br>";
//Array asociativo o complejo
echo "----Array Asociativo o complejo----<br>";
echo "Impresion de array complejo con pre<br>";
$lista2 = [
    "frontend" => 'JavaScript',
    'framework' => 'Larvel',
    'backend' => 'PHP'
];
echo '<pre>';
print_r($lista2);
echo '</pre>';

echo "Impresion valores de array asociativo usando foreach<br><br>";
foreach($lista2 as $l2){
    echo "$l2 <br>";
}
echo '<br>';
echo "Impresion llave y valores de array asociativo usando foreach<br><br>";
foreach($lista2 as $llave => $valor){
    echo "$llave : $valor <br>";
}
echo '<br>';
echo "---------------------------------------------------------------------------------<br>";
//Array asociativo o complejo anidado
echo "----Array Asociativo o complejo anidado----<br>";
echo "Impresion de array complejo anidado con pre<br>";
$lista3 = [
    "frontend" => [
        'Estructura' => 'HTML',
        'Interactividad' =>'JavaScript',
        'Diseno' =>'CSS'
    ],
    'Backend' => [
        'Logica' =>'PHP',
        'Operaciones' =>'NodeJs',
    ]
];
echo '<pre>';
print_r($lista3);
echo '</pre>';
echo '<br>';

echo "Impresion valores de array asociativo anidado usando foreach<br><br>";
foreach($lista3 as $l1){
    foreach($l1 as $l2){
        echo "$l2 <br>";
    }
}
echo "<br>";
echo "Impresion llave y valores de array anidado asociativo usando foreach<br><br>";
foreach($lista3 as $l1){
    foreach($l1 as $llave => $valor){
        echo "$llave : $valor" . "<br>";
    }
}
echo '<br>';
echo "---------------------------------------------------------------------------------<br>";
//funciones para arrays
/**
 * array_walk($array, "funcion")
 * array_key_exists('llave' $array)
 * in_array('valor')
 * array_keys(array)
 * array_values(array)
 */

//array _walk() array asociativo

// valor
function contenido1($valor){
    echo "$valor";
    echo '<br>';
}
echo "Impresion valores de array asociativo usando la funcion array_walk()<br><br>";
array_walk($lista2, 'contenido1');

// llave y valor
function contenido2($valor, $llave){
    echo "$llave, : $valor";
    echo '<br>';
}
echo '<br>';
echo "Impresion llave y valor de array asociativo usando funcion array_walk()<br><br>";
array_walk($lista2, 'contenido2');
echo '<br>';

echo "---------------------------------------------------------------------------------<br>";
//array_key_exist()
echo "array_key_exist('llave', array) devuelve true o false si se encuentra la llave en el array<br><br>";

$condicion = array_key_exists('framework',$lista2);
var_dump((bool)$condicion);
echo '<br>';

echo "---------------------------------------------------------------------------------<br>";
//in_array('valor');
echo "in_array('valor') devuelve true o false si se encuentra el valor en el array<br><br>";

$curso = in_array('JavaScript', $lista2);
var_dump((bool)$curso);
echo '<br>';

echo "---------------------------------------------------------------------------------<br>";
//array_keys(array);
echo "array_keys(array) devuelve todas las llaves en el array<br><br>";

$llaves = array_keys($lista2);

echo '<pre>';
print_r($llaves);
echo '</pre>';

//array_values(array);
echo "array_values(array) devuelve todas los valores en el array<br><br>";

$valores = array_values($lista2);

echo '<pre>';
print_r($valores);
echo '</pre>';

?>