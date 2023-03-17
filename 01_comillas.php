<?php
//commilas simple se usan para solo textos
echo "Este es un texto";
echo "<br>";

//-----------------------------------------------------------------------------------------------
// se usa diagonal inversa para escapar un caracter
echo 'Mensaje \'uno\' \\ejemplo/';
echo "<br>";

//-----------------------------------------------------------------------------------------------
//comillas dobles cuando concatenamos ya sea texto y variables o funciones o arrays etc (codigo)
//en este caso con variables:
$name = 'Luis';
echo "Mi nombre es: $name";
echo "<br>";

//-----------------------------------------------------------------------------------------------
//si hacemos el mismo ejemplo anterior usando comillas simples seria concatenando con punto 
$curso = "PHP";
echo 'El curso que estoy tomando es el de:' . ' '. $curso . '<br>';

//-----------------------------------------------------------------------------------------------
//comilla doble con arrays se ponen entre {}
$cursos = [
    'backend' => [
        'PHP',
        'Laravel'
    ]
];
echo "Este archivo esta escrito con {$cursos['backend'][0]} <br>";

//-----------------------------------------------------------------------------------------------
//Con objetos
class User{
    public $name = 'Luis';
};
$usuario = new User;
echo "El nombre del nuevo usuario es: $usuario->name <br>";

//-----------------------------------------------------------------------------------------------
//usando variables variables
$classroom = ['backend' => 'PHP'];

$user = 'luis';
$luis = 'alumno de:';

echo "$user es ${$user} {$classroom['backend']} <br>";

//-----------------------------------------------------------------------------------------------
//Usando funciones como variable variable
function getUser(){
    return 'username';
}
$username = "Luis";
echo "El nombre del usuario es ${getUser()} <br>";

//-----------------------------------------------------------------------------------------------
//Usando funciones 
function getdata($data){
    $resultado = "$data Complejos";
    return $resultado;
}
$data = "Algoritmos";
echo "La data que se envio contiene " . getdata($data) . "<br>";
?>
