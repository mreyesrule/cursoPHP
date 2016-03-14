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

//substr


echo substr("abcdef",1); //bcdef
echo "/n";
echo substr("abcdef",1, 3); //bcd
echo "/n";
echo substr("abcdef",0, 4); //abcd
echo "/n";
echo substr("abcdef",0, 8); //abcdef
echo "/n";
echo substr("abcdef",1, 1); //f


$x = 0;
$y = $X;
$z = &x;
var_dump($y);
var_dump($z);
$x = 10;
var_dump($z);

// Arreglos
$associativo = array('Uno'=>1, 'Dos' =>2,'Dos' =>3,);
// php ~> 5.3
$associativo = [Uno'=>1,

echo $associativo['Dos'];
echo "\n";
$associativo = [Uno'=>1,



$array = array('Uno','Dos','Tres');
echo $array[2];
echo #\n";
$array[3]='Cuatro';
echo $array[3];
echo #\n";

array_push(array, 'Cinco');
var_dump($array);

//Lgica





assert($a == $b);
//assert($a===$b); //esto es falso
assert($c !=$a);//true
assert($c<> $a);//true
assert($a < $c);//true
assert($c < $b);//true
assert($a <= $b);//true
assert($c >= $d);//true

assert($c === $d);
assert($a !== $d);
assert
assert







