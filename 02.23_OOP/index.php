<?php
 class Klase{
// savybes(property)
    public $savybe = 'Labas rytas, šiandien yra ketvirtadienis, vasario mėn. 22 diena!';


    const URL = 'https://google.com';


    // Prieigos modifikatoriai (access modifiers)
// public - viešas prieinamumas
// private
// protected


// Automatiškai inicijuojamas metodas po klasės paleidimo
function __construct($hello)
{
    if($hello)
    $this-> savybe = $hello;
}


    // Metodai
    public function funkcija(){
// echo '<h2>Sveiki</h2>';
$this->savybe = 'Paskaita prasidėjo!';
// 'this' kreipimasis į objektą
    }


public function adresas(){
// 'self' kreipimasis į klasę
    // Scope resolution operatorius - '::'
    return file_get_contents(self::URL);
}


 }
// Klasės iššaukimas ir instancijos (instance) grąžinimas

 $klase = new Klase('Konstriuktorius suveikė');
 $klase1 = new Klase(false);
 $klase2 = new Klase('Rytoj penktadienis');



// Savybės iškvietimas vykdomas su arrow operatoriumi
 echo $klase->savybe;


// Metodo iškvietimas
echo $klase-> funkcija();

echo '<br/>' .Klase::URL;
echo '<br/>' .$klase::URL;

// // Google.com duomenu paėmimas
// echo $klase-> adresas();

// echo '<pre>';
//  var_dump($klase);
//  var_dump($klase1);
//  var_dump($klase2);

// Statinės savybės ir metodai
echo '<h1> Statinės savibės ir metodai</h1>';


 class StatineKlase{
    public static $vardas = 'Adomas <br/>';

    public static function keistivarda(){
 self::$vardas = 'Aidas <br/>';

    }
    public $pavarde;

    public function __construct($pavarde)
    {
        $this->pavarde = $pavarde;
    }
 }
 echo StatineKlase::$vardas;

StatineKlase::keistivarda();

 echo StatineKlase::$vardas;

$klase1 = new StatineKlase('Petraitis');
$klase2 = new StatineKlase('Adomaitis');
$klase3 = new StatineKlase('Jonaitis');

echo '<pre>';
 var_dump($klase1);
 var_dump($klase2);
 var_dump($klase3);


