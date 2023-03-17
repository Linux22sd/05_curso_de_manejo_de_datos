<?php
//alterar
//reemplazar
//modificar

/**
 * strtolower();
 * ucfirst();
 * strtoupper();
 * lcfirst();
 * 
 * str_replace(' ', '-', $string);
 * 
 * str_pad(string, #caracteres, #, STR_PAD_RIGHT)
 * str_pad(string, #caracteres, #, STR_PAD_LEFT)
 * str_pad(string, #caracteres, #, STR_PAD_BOTH)
 * strip_tags();
 * 
 */

//----------------------------------------------------------------------------------------------------
//alterar
echo '------Alterar-------';
echo '<br>';
//strtolower() todas a minusculas
$text = 'PHP es UN lENguAJE';
$text_lower = strtolower($text);
echo $text_lower;
echo '<br>';
//----------------------------------------------------------------------------------------------------
//ucfirst() Solo la primera en mayuscula (ojo) despues de haber convertido todas en minusculas
$text_first_upper = ucfirst($text_lower);
echo $text_first_upper;
echo '<br>';
//----------------------------------------------------------------------------------------------------
//strtoupper() todas a mayusculas
$text_upper = strtoupper($text);
echo $text_upper;
echo '<br>';
//----------------------------------------------------------------------------------------------------
//lcfirst() Solo la primera en minuscula (ojo) despues de haber convertido todas en mayusculas
$text_first_lower = lcfirst($text_upper);
echo $text_first_lower;
echo '<br><br>';

//reemplazar
echo '------Reemplazar------';
echo '<br>';
//----------------------------------------------------------------------------------------------------
//str_replace()
$slog = str_replace(' ', '-', $text_lower);
echo $slog;
echo '<br>';

$slog2 = str_replace('php','javascript',$text_lower);
echo $slog2;
echo '<br><br>';
//Modificar
echo '------Modificar------';
echo '<br>';
//----------------------------------------------------------------------------------------------------
//str_pad()
$code = 39;

$code_modificado = str_pad($code, 8, '#', STR_PAD_RIGHT);
echo $code_modificado;
echo '<br>';

$code_modificado1 = str_pad($code, 8, '#', STR_PAD_LEFT);
echo $code_modificado1;
echo '<br>';

$code_modificado2 = str_pad($code, 8, '#', STR_PAD_BOTH);
echo $code_modificado2;
echo '<br><br>';

//----------------------------------------------------------------------------------------------------
//strip_tags() elimina tags de html si la variable contiene alguna
$string = '<h1>Usando etiquetas html</h1>';
$notags = strip_tags($string);
echo $notags;
echo '<br><br>';
//----------------------------------------------------------------------------------------------------
//elementos monobyte
$titulo = 'Este es un titulo pequeño';
$titulo_upper_mono = strtoupper($titulo);
echo $titulo_upper_mono;
echo '<br>';
//elementos multibyte
$titulo_upper_multi = mb_strtoupper($titulo);
echo $titulo_upper_multi;
echo '<br>';
?>