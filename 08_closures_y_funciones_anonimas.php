<?php
/**
 * Una funcion anonima se usa en una variable que requiere logica
 */

 //funcion anonima nos referimos a ella a traves de una variable
$greet = function ($name){
    return "Hola $name";
};
echo $greet("Luis");
echo "<br>";

//
function saludar(Closure $lang, $name){
    return $lang($name);
}

$es = function($name){
    return "Hola $name";
};
$en = function($name){
    return "Hello $name";
};

echo saludar($en, "Luis");
?>
