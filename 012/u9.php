<?php


$m1 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$m2 = 'Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale';

// $more5 = 0;
// $count = 0;
// echo strlen($m1);

// $find = 4;

// for ($i = 0; $i < strlen($m1); $i++) {
//     if ($i != strlen($m1) - 1) {
//         if ($m1[$i] != ' ') {
//             $count++;
//         }
//         else {
//             if ($count <= $find) {
//                 $more5++;
//             }
//             echo '<br>';
//             echo $count;
//             $count = 0;
//         }
//     }
//     else {
//         if ($m1[$i] != ' ') {
//             $count++;
//         }
//         if ($count <= $find) {
//             $more5++;
//         }
//     }
// }

// echo "<h1>$more5</h1>";

// $more5 = 0;


// preg_replace_callback('/[^ ]+/', function($w) use (&$more5) {
//     if (strlen($w[0]) <= 5) {
//         $more5++;
//     }
// } , $m1);


// $more5 = 0;

// foreach(explode(' ', $m2) as $w) {
//     if (mb_strlen($w) <= 5) {
//         $more5++;
//     }
// }


// echo '<pre>';
// var_dump($more5);

for ($a = 1; $a <= 5; $a++) {
    echo '<b>Didžiojo ciklo Numeris: '.$a.' </b><br>';
 

    for ($x = 1; $x <= 5; $x++) {
      
        echo 'Mažojo Ciklo Numeris: '.$x.' <br>';

        continue 2;

    }

 }
 
 