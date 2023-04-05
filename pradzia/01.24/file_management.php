<?php

if(!is_dir('failai')){
 mkdir('failai');
}
if(is_file('failai/tekstas.txt')){
    unlink('failai/tekstas.txt');
    } else {
        file_put_contents('failai/tekstas.txt', 'Sveiki');
    }

//Duomenų paėmimo variantas



if(!is_dir('html')){
    mkdir('html');
}

$html =  file_get_contents('https://www.lrytas.lt/');

file_put_contents('html/lrytas.html' , $html);

?>
