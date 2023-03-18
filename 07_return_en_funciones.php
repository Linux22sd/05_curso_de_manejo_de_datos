<?php
/**
 * En una funcion no es buena practica usar un echo 
 * Las funciones deben regresar un resultado usando (return)
 * Si se desea retornar mas de un resultado entonces podemos returnar arrays
 * 
 * nota exit() detiene el sistema
 * nota return retorna un valor
 */

//Esta funcion retornara el argumento dado o el valor predeterminado 
function greet($name="Jhon-Doe"){
    return "Hola como estas $name";
}
echo greet("Luis");

//Esta funcion regresara varios valores
function estudent($id){
    return ["Etudiante id: $id","Curso1: PHP", "Curso2: HTML"];
}

echo "<pre>";
print_r(estudent("LP34"));
echo "</pre>";
?>