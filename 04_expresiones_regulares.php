<?php
/**
 * /  Contenedor
 * ^  Inicio
 * $  Final
 * -  Rango
 * [] Patron
 * {} Condicion
 * 
 */

 //------------------------------------------------------------------------------------------------
 $passcode = 123456;
 var_dump((bool)preg_match('/^\d{5,9}[1-9]$/',(int)$passcode));

?>