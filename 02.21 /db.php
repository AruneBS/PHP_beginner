<?php

function pavadinimas($pirmas, $antras){
return $pirmas * $antras;
}
$x= pavadinimas(10,20);

echo $x;

// function select($table){

// $sql = "SELECT id, role FROM users WHERE email='{$email}' AND password = '{$password}'";

// $sql = "SELECT *  FROM  $table";
// $result = $db->query($sql);

// return $result->fetch_all();
// }
?>