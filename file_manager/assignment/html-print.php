<?php

$suma = 109.99;
$vardas = 'Vardenis Pavardenis';

// skliaustu galima ir nedeti
$string = "Sveiki, {$vardas}. Jusu moketina suma: {$suma}<br/>";

// echo $string;

$html = "<div class =`stringas`>{$string}</div>";

if($suma > 100) :
    echo 'Suma yra didesne nei 100<br/>';
endif;


//printf() funkcija

printf('PRINTF Sveiki, %s. Jusu moketina suma: %s', $vardas, $suma);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?= $html ?>

    <?php if ($suma > 100) : ?>
        <div> Suma yra didesne nei 100</div>
    <?php else : ?>
        <div>Suma mazensne nei 100</div>
    <?php endif; ?>

<?php for($i=0; $i< 20; $i++) : ?>
<div>Ciklas sukasi <?=$i?> karta</div>
<?php endfor; ?>


</body>

</html>