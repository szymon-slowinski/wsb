<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $potega=2**10;
    echo $potega. "<br>";

    //systemy liczbowe
    $int=10;
    $hex=0xA;
    $oct=012; //2*8^0 + 1*8^1 = 10
    $bin=0b1011; //11

    echo $int, "<br>"; //10
    echo $hex, "<br>"; //10
    echo $oct, "<br>"; //10
    echo $bin, "<br>"; //11
    echo phpinfo();
    
    //operatory bitowe
    $x=0b1010; //10
    echo $x; //10
    $x=$x>>1; //5
    echo $x; //5
    $x=$x<<2; //20
    echo $x; //20
 //instrukcje warunkowe
 //rowne
if ($x==$y)
{
    echo "Równe<br>" ; 
}
else
   {
    echo "Różne<br>";
   }
//identyczne
if ($x===$y)
{
    
    echo "Identyczne<br>";
}
else
{
    echo "Nieidentyczne<br>";
}
echo gettype($x)

//operatory rzutowania danych
/*$text="123ssd";
$x=(int)$text;
echo $x; //123
echo gettype($x);
*/
//kolejny przyklad
/*$text=0;
$x=(bool)$text;
echo "\$text: $text";
echo "\$x: $x";
*/
//kolejny przyklad
$text=10;
$x=(unset)$text
echo "\$text: $text";
echo "\$x: $x";

rozmiar typu int
echo PHP_INT_SIZE;//8
echo PHP_INT_MIN;
echo PHP_INT_MAX; 

//KONTROLA TYPU ZMIENNYCH
$x=10;
echo is_int($x);
echo is_string($x);
echo is_bool($x);
echo is_float($x);
echo is_null($x);

//operator ignorowania bledow
$w;
echo @$w;
//@- dodajemy przy wyswietlaniu zmiennej
echo gettype($w); //NULL

//zmienne super globalne
$_GET, $_POST, $_COOKIE, $_FILES, $_SESSION, $_SERVER

echo $_SERVER['SERVER_PORT']; //81
echo $_SERVER['SERVER_NAME']; //LOCALHOST LUB 127.0.0.1
echo $_SERVER['SCRIPT_NAME'];
echo $_SERVER['DOCUMENT_ROOT'];//HTDOC

$fileLocal = $_SERVER['DOCUMENT_ROOT'];
$fileLocal .= $_SERVER['SCRIPT_NAME'];
echo $fileLocal,"<hr>";

//stale = Nazwa stalej
 define("Name","Janusz");
echo Name;
define("Surname","Kowal",true); //domyslnie jest FALSE
echo Surname;

//stale predefinowane
echo PHP_VERSION;
echo PHP_OS;
echo __LINE__; //112 linia w kodzie
echo __FILE__; //sciezka pliku
echo __DIR__; //lokalizacja pliku

//tworzymy nowe pliki


 
?>
</body>
</html>
