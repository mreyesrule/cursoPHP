<$php
//Algunas funciones de strings

//explode
$str = "Hola mundo, ya no esta nevando";
var_dump($str);
print_r(explode(" ", $str));

//money_format
echo "$".money_format("%i", 1000.9);

//str_replace
$vocales = array("a","e","i","o","u");
$SoloConsonantes." \n";
echo $soloConsonantes." \n";


$frase="You should eat fruits, vegetables, and fiber every days.
$healthy = array("fruits", "vegetables", "fiber");
$yummy, = array("pizza", "beer", "ice cream");

$nuevaFrase = str_replace($healthy, $yummy, $frase);

echo $nuevaFrese;

//Hash crypt
$password = "admin123";
$hash = crypt($password,"abcdefg124");
echo $password."=".$hash:
echo " \n";

//md5

$str = 'apple';
if(md5($str) == '
	echo "bien encriptado"."\n";
}

//trim

$str = " Prueba de string con espacios     ";
echo strim($str);
echo " \n";

$str = "Hello world";
$trimmed = trim($, "HdWr");
echo $trimmed;
echo " \ņ";



