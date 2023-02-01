<?php

//hipotenusa calc

/*
$cat1 = 4**2;
$cat2 = 3**2;

$hip = ($cat1 + $cat2) ** (1 / 2) ;

echo $hip;
*/


//par ou impar

/*
$x = 6;


$div = $x % 2;

echo $div
*/

/*
$hp = 100;

$dmg = 50;

if ($hp <= 0) {
  echo "you died!";
} else {
  echo "full life";
}
*/

/*
$Salario = 30000;
$RankSS = "vc é do rank SS";
$RankA = "vc é do rank A";
$RankB = "vc é do rank B";

if($Salario >= 20000){
  echo $RankSS;
  
 
}else if($Salario >= 10000){
  echo $RankA;
}

 if($Salario <= 5000){
    echo $RankB;  
  }
*/



//exercises

//1.
/*
$h = 1.89;
$peso = 84;
$IMC = $peso / ($h * $h);

$abaixo = $IMC < 18.5;
$normal = $IMC >= 18.5 && $IMC < 25;
$sobrepeso = $IMC >= 25 && $IMC < 30;
$obesidade1 = $IMC >= 30 && $IMC < 35;
$obesidade2 = $IMC >= 35 && $IMC < 40;
$obesidade3 = $IMC >= 40;

echo $IMC; 

if($abaixo){
  echo "\nabaixo do peso";
}else if($obesidade3){
  echo "\nobesidade grau 3";
}else if($normal){
  echo "\npeso normal";
}else if($sobrepeso){
  echo "\nsobrepeso";
}else if($obesidade1){
  echo "\nobesidade grau 1";
}else if($obesidade2){
  echo "\nobesidade grau 2";
}

*/
  
//2.
/*
$pi = 3;
$ray = 6;

$area = $pi * $ray**2;

echo $area;
*/

/*
$num1 = 10;
$num2 = 5;
$op = '+';
*/


/*
repetição

While
Do.. while

For
Foreach

Do... while

1. O que é do while?
2. Diferença entre while e do...while

EXIBIR O MENU
PEDIR UM VALOR
SE O VALOR FOR 3
REPETIR O MENU
*/


do{
  echo "Welcome to the game!". PHP_EOL;
  echo "press 1 to open the game". PHP_EOL;
  echo "press 2 to enter in configs". PHP_EOL;
  $options = fgets(STDIN);
}while($options != 1 && $options != 2);




?>