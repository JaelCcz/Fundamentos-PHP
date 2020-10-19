<?php
 //Asignacion
$num = 9;
$lang = [
    'es' => 'spanish',
    'en' => 'English'
    ];

//Aritmetica
echo "Suma 2 + 2" . ((int) 2 + (int) 2);
echo "Suma 2 - 2" . ((int) 2 - (int) 2);
echo "Multiplica 2 * 2" . 2 * 2;
echo "Suma 2 / 2" . 2 / 2;
echo "Modulo 2 % 2" . 2 % 2;
echo "Exponencia 2 ** 2" . 2 ** 2;

//Comparacion 
// igual ==, valor  '9' == 9
//igual ===, comparar valor-tipo de variable 9 === 9
//Diferencias !=, valor
//Diferencias !=,valor-tipo
//< , >, <= >= Comparacion



//Variables variables

$app = 'name'; //name es un valor y podria servir de valor dinamico
$name = "platzi";
echo $app; //imprimir el valor name

echo $$app; //imprimir el nombre de platzi