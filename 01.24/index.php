<?php

//Konstantos deklaravimas

define('VAISIAI', ['Obuoliai', 'Bananai', 'Abrikosai']);
define('VARDAS', 'Arune');

$masyvas = ['BMW', 'Audi', 'Toyota'];

// foreach($masyvas as $auto){
//     echo $auto . '</br>';
// }


foreach($masyvas as $indeksas => $auto){
    echo $auto . 'kurio indeksas' . $indeksas. '</br>';
}
$zinute = 'Labas vakaras';
$message = 'Laikas eiti miegoti!';

$black = false;
$white = null;
$deepBlue ='class="deepBlue"';

$dokumentai = true;
$kedes = false;
$rezultatas = 'Sandelys tuscias';

// if($dokumentai AND $kedes){
// $rezultatas = 'Siuo metu sandelyje turime dokumentu ir kedziu';
// } 

// if($dokumentai OR $kedes){
//     $rezultatas = 'Siuo metu sandelyje turime dokumentu ir kedziu';
//     } 

    if($dokumentai XOR $kedes XOR $black){
        $rezultatas = 'Siuo metu sandelyje turime dokumentu ir kedziu';
        } 

$list = '<ul>';

for($i= 0; $i< 10; $i++){
    $list .='<li>' . $i . '</li>';
}

$list .= '</ul>';

// $masyvas = [10, 30, 22, 18, 34, 15];

// $didziausiasSkaicius = max($masyvas);

// $maziausiasSkaicius = min($masyvas);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcijos ir operatoriai</title>
    <style>

        .dark {

            background: black;
            color: yellow;
        }

        .deepBlue {
            background: blue;
            color: white;
        }
    </style>
</head>
<body <?= $black ? 'class="dark" ' : '' ?> >
<body <?= $white ?? $deepBlue ?> >
    <h1><?php echo $zinute ?></h1>
    <h1><?= $message ?></h1>
<p><?= $rezultatas ?></p>

<?= $list ?>
<h2>Didžiausias skaičius</h2>
<?= $didziausiasSkaicius; ?>

<h2>Mažiausias skaičius</h2>
<?= $maziausiasSkaicius; ?>

<h3>Kokia tai reiksme?</h3>

<?php

$kintamasis = false;

if(is_array($kintamasis)){
    echo 'Tai yra masyvas';
}


if(is_float($kintamasis)){
    echo 'Tai yra skaicius po kablelio';
}
if(is_int($kintamasis)){
    echo 'Tai yra sveikas skaicius';
}

if(is_bool($kintamasis)){
    echo 'Tai yra boolean reiksme';
}
?>

<h3> Apvalinimas</h3>

<?php 
// $pi = pi();
// echo $pi;

 $digit = 3.5;

echo round($digit, 0, PHP_ROUND_HALF_ODD);

?>

<h3>Konstantos atvaizdavimas</h3>

<?php 
echo VARDAS;
?>

<h3>Ciklai</h3>

<?php
// $i = 0;
// while($i <10){
//     echo 'Ciklas sukasi <br/>';
//     $i++;
// }


// //Do while ciklas
// $i=0;

// do{
//     echo 'Ciklas sukasi <br/>';
//     $i++;
// } while($i<10)

// for($i= 0; $i<10; $i++){
//     echo 'Ciklas sukasi su for <br/>';
// }

//grazina masyvo ilgi

//count()

// for($i = 0; $i < count(VAISIAI); $i++){
//     echo VAISIAI[$i] . '<br/>';
// }

$masyvas = ['BMW', 'Audi', 'Toyota'];

// for($i = 0; $i< count($masyvas); $i++){
//     echo $masyvas[$i] . '<br/>';
// }

//Norint susigrazinti tik reiksme
// foreach($masyvas as $auto){
//     echo $auto . '<br/>';
// }

foreach($masyvas as $skaicius => $reiksme){
        echo $reiksme . ' kurio indeksas '  . $skaicius. '<br/>';
}
?>

<h3>Switch</h3>

<?php


$reiksme = 2;

// if($reiksme === 1){
//     echo 'Reiksme yra lygu vienetui';
// } else if($reiksme === 2){
//     echo 'Reiksme yra lygu dvejetui';
// } else if($reiksme === 3){
//     echo 'Reiksme yra lygu trejetuii';
// } else if($reiksme === 4){
//     echo 'Reiksme yra lygu ketvertui';
// } else{
//     echo 'Reiksme neatitiko';
// }
switch($reiksme){
    case 1: 
    echo 'Reiksme yra lygu vienetui';
break;
case 2:
    echo 'Reiksme yra lygu dvejetui';
    break;
case 3:
    echo 'Reiksme yra lygu trejetuii';
break;
case 4:
    echo 'Reiksme yra lygu ketvertui';
break;
default:
    echo 'Reiksme neatitiko';

}

?>



</body>
</html>