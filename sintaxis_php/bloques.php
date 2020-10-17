<?php

if (condition) {
    //code..
} elseif (condition) {
    //code...
} else {
    //code..
}


//Condiciones Organizadas
/*Si se cumple la condicion se
*ejecuta algo
*ejemplo: login de un usuario
*/
switch ($login) {
case true:
    //si esta loegenado ..
    break;

case false:
    //si no esta logeado ..
    break;
default:
    echo "Holi";
    break;
}


//Condicion FOREACH
/*Consulta de datos
*Ejemplo: Tenemos una tabla 
*y necesitamos hacer una 
consulta de los datos 
*de un usuario
*/
foreach ($datos as $row){
    // code ...
}


//Condicion WHILE
/*Ejemplo: mientras $a sea menor a 10
*el ciclo no se rompe
*/
$a = 1;
while ($a <= 10){

    #code ...

    $a++;
}


//Condicion DO WHILE
/*Utilizada si deseamos que el codigo se 
*ejecute al menos una vez
*/
$a = 1000;
do{
    #code ..

} while ($a <= 10);


//Ciclo FOR
/*
*Va de un elemento a otro
*/
for ($i = 0; $i < 10; $i++){

}