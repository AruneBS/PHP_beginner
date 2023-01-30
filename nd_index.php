<?php
echo '1.Uzduotis. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25';
echo '</br>';




for($i=0; $i<30; $i++){
    $masyvas [$i] = rand(5, 25);
}
 print_r($masyvas);


 echo '</br>';
//  for ($i = 0; $i < 30; $i++){
//     echo ($i . '-' . $masyvas[$i] . '<br />');
// }


echo '<p>2.Uzduotis. </p>';
echo '</br>';

 $letters = ['A', 'B', 'C', 'D'];
    $array = [];

    for($i=0; $i<200; $i++){
        $letter_array[] = $letters[rand(0, 3)];
    }

    $raides = 0;
    for($i=0; $i<200; $i++){
          print $letter_array[$i];
          $raides++;
          if ($raides==20){
          echo '<br />';
          $raides = 0;
          }
    }
    

    // print_r($letter_array);

echo '</br>';

echo '<p>3.Uzduotis. </p>';

 $letters = ['A', 'B', 'C', 'D'];
 $array1 = [];
 $array2 = [];
 $array3 = [];

 echo '<p>Pirmas masyvas</p>';
 for($i=0; $i< 200; $i++){
    $random_letter = $letters[array_rand($letters)];
    array_push($array1, $random_letter);
 }
print_r($array1);


 echo '<p>Antras masyvas</p>';
 for($i=0; $i< 200; $i++){
    $random_letter = $letters[array_rand($letters)];
    array_push($array2, $random_letter);
 }

print_r($array2);


    echo '<p>Trečias masyvas</p>';
 for($i=0; $i< 200; $i++){
    $random_letter = $letters[array_rand($letters)];
    array_push($array3, $random_letter);
 }
 print_r($array3);


 echo '<p>Sudėti masyvai</p>';


 
//  $array_all= [];

// for(let $i = 0; $i< 200; $i++){
//     $array_all[]= $array1[$i] . $array2[$i] . $array3[$i];
// }
// print_r($array_all[]);
?>