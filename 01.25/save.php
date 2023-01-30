<?php

if(!is_dir('failai')){
    mkdir('failai');
}

$stringas = 'abcdefghijklmnopqrstuvwxyz';
$random = '';

for($i=0; $i<3; $i++){
     $random .= $stringas[rand(0, strlen($stringas)-1)];
}

echo  $random;



if(is_file('failai/skaicius.txt')){
    unlink('failai/skaicius.txt');
    } else {
        file_put_contents('failai/skaicius.txt', '');
    }

    file_put_contents('failai/skaicius.txt', $random);

?>