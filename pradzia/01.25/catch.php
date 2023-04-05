<?php

$stringas = 'abcdefghijklmnopqrstuvwxyz';
$random = '';
$box = '';

// echo $letter1 = rand(0, strlen($stringas) - 1);
for($i=0; $i<3; $i++){
     $random .= $stringas[rand(0, strlen($stringas)-1)];
}

if(is_file('skaicius.txt')){
   $box = file_get_contents('skaicius.txt');
}

if ($random != $box){
    $notMatch = 'Reikšmės nevienodos ' . $box . $random;
}

// echo $notMatch

?>