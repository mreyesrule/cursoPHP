<?php
//one line

/*
tpdop lo
que se escriba
*/
print('Hellow ');

echo "World ?n";

$boolean=true; // TRUE or True
$boolean=false; // FALSE or False


$int1=12;
$int2=-12;
$int3 = 012;//Octal
$int4 = 0X0F;//Hexadecimal
//$int5 = 0b11111111; //255

$float = 1.234;
$float = 1.2e3;//1200
$float = 7E-10;

unset($init1);

var_dump($float);
var_dump($int4);

$sum = 1 + 1; //suma
$res = 2- 1-0; // resta
$mul = 4 * 3; // multiplicación
$div = 2 / 4 ; // división

var_dump($res);
var_dump($div);

$num = 0;
$num +=1 ; //$num = 0
echo $num++;// 1
echo ++$num;
$num -=2;
$num /=float;

//strings
$num = 5;
$varString = '$num';
echo varString;
$varString = "el valor de la variable num = $num \n";
echo $varString;
$otroString = " otra forma de incluir variables {$num}";
echo $otroString;
$otroString2 = " otra 2 forma de incluir variables ${num}";
echo $otroString2;

$stringMult = <<<'END'
Multi line
string
END;

echo $stringMult;
echo 'Este es un '.' String';
echo 'multiples', 'parametros', ' en echo';


//Constantes
define("FOO", "algo");
echo FOO;

echo "Este es el valor de la constante FOO=".FOO;

define("_FOO","algo");


