<?php 
$a=5;
$b='5';
if($a===$b){
    echo"Kintamieji lygus";
} else{
    echo "kintamiejo nelygus";
}


$hours= 13;
switch($hours){
    case($hours<12):
        echo "good morning"; break;
        case($hours < 18):
            echo "good afternoon"; break;
            case($hours<22):
                echo "good evening"; break;
}

$array=["key"=> "value"]; 

$a = array();
if($a[1])null;
echo count($a);