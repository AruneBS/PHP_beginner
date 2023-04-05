<?php



try{
$db = new mysqli('localhost', 'root', '', 'animals');

}catch(Exception $klaida){

echo 'nepavyksta prisijungti prie duomenu bazes </br>';
exit;
}
echo 'Kodas kompiliuojamas';


// $db = mysqli_connect('localhost', 'root', '', 'animals');
//  print_r($db);
 
//  echo 'Kodas kompiliuojamas';


$result = $db->query('SELECT * FROM animal');
$result1 = $result;
echo '<pre>';
while($row = $result->fetch_assoc()){
    print_r($row);
}
while($row = $result1->fetch_assoc()){
    echo $row['animal'] .' </br>';
}
$result = $db->query('SELECT * FROM animal');
print_r($result->fetch_all());

