<?php

/**
 * parametros o argumentos predeterminados
 * parametros o argumentos por valor y referencia
 */

//por valor predeterminado 
function greet($name= 'jhon-doe'){
    return "Hola, $name";
}
echo "--Predeterminado--";
echo "<br>";
echo greet();
echo "<br><br>";
echo "--Con argumento--";
echo "<br>";
echo greet("Luis");
echo "<br><br>";

//Al cambiar el valor de una variable dentro de una funcion solo cambiara el valor dentro de la 
//funcion sin embargo si queremos que al cambiarla dentro de la funcion cambie su valor fuera
//de la funcion suamos valor por referencia con el signo (&)

$curso =  "PHP";

//por valor
//Aqui el resultado que imprimira la funcion sera HTML
//pero el resultado que imprimira si se usa un echo en $curso sera PHP
function path($curso){
    $curso = "HTML";
    echo $curso;
    echo "<br>";
}
echo "--Sin cambiar la variable original--";
echo "<br>";
path($curso);
echo $curso;
echo "<br><br>";

//por referencia
//Aqui el resultado de la funcion sera HTML Y usando un echo de curso tambien sera HTML
function path1(&$curso){
    $curso = "HTML";
    echo $curso;
    echo "<br>";
}
echo "--Por referencia cambiando la variable original--";
echo "<br>";
path1($curso);
echo $curso;
echo "<br><br>";
?>