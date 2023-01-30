<?php

//PHP - loosely based programming language

$kintamasis = '<h1>Tai yra kintamojo reikšmė</h1>';
echo $kintamasis;

$kintamasis = 10;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis++;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis--;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis = $kintamasis - 20;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis = $kintamasis + 50;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis = $kintamasis * 2;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis = $kintamasis / 2;
echo '<h2>' . $kintamasis . '</h2>';

//Trumpesni veiksmai
$kintamasis -=20;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis +=50;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis *=2;
echo '<h2>' . $kintamasis . '</h2>';

$kintamasis /=2;
echo '<h2>' . $kintamasis . '</h2>';


$pirmas = 5;
$antras = 80;

echo'<h3>Rezultatas: ' . ($pirmas - $antras) * 3 . '</h3>';

$trecias = 5.587;

echo '<h4>' . $trecias . '</h4>';

$masyvas = array(' raktinis_zodis ' =>  'jo reikšmė' );

print_r($masyvas);

echo '<br/>';

var_dump($masyvas);

$masyvas = array(15, 20, 30, 10.2, 18);
echo '<br/>';
var_dump($masyvas);

$masyvas = [15, 20, 30, 10.2, 18];
echo '<br/>';

var_dump($masyvas);
echo '<br/>';

$masyvas = ['pirmas_raktas' => 15, 1 => 20, true=> 30, 3=> 10.2, 4=> 18];

var_dump($masyvas);

echo '<br/>';

echo $masyvas['pirmas_raktas'];




unset($masyvas['pirmas_raktas']); 
echo '<br/>';

var_dump($masyvas);

echo '<br/>';

$masyvas[1] = 'Pakeista reiksme';

var_dump($masyvas);

echo '<br/>';

$raktas = 3;

$masyvas[$raktas] = 'Kintamojo pagalba surastas elementas';

var_dump($masyvas);

echo '<br/>';

$masyvas[] = 'Tai nauja prideta reiksme';

var_dump($masyvas);

echo '<br/>';

$masyvas['raktazodis'] = 'Tai nauja prideta reiksme su raktazodziu';

var_dump($masyvas);

echo '<br/>';

for($i = 0; $i< 100; $i++){
    echo $i. ' cikle aprasytas eilute ir sugeneruota skaicius:' . rand(0, 500) .'<br/>';
}

echo '<br/>';





?>