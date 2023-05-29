<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


$hello = 'Labas';


function fun() 
{
    
    // global $hello; jau nedaroma 10 metu
    
    // echo "<br> 1 $hello";
    
    $hello = 'Hi';

    echo "<br> 2 $hello";

}


// fun();


// echo "<br> 3 $hello <br><br>";


function sudeti($vienas, $du, ...$rest)
{
    return $vienas + $du + array_sum($rest);
}
// echo sudeti().'<br>';
// echo sudeti(1).'<br>';
// echo sudeti(1, 2, 10, 10, 10, 10).'<br>';


$m = [3 => 7, 1 => 8, 9];

[$a, $b, $c] = [...$m];

// echo $b;


function add1()
{
    static $c = 0;
    return ++$c;
}


// echo '<br>' . add1();
// echo '<br>' . add1();
// echo '<br>' . add1();
// echo '<br>' . add1();



function recursive($num)
{
    echo $num, 'START<br>';
    if ($num < 3){
        recursive($num + 1);
    }
    echo $num, 'END<br>';
}
$startNum = 1;
recursive($startNum);

$mas = [
    1,
    1,
    [
        1,
        [
            1,
            1,
            [
                1,
                [
                    1,
                    1
                ]
            ],
            1,
            2
        ],
        1,
        [
            1,
            [
                1
            ],
            1,
            1
        ],
        1,
        1
    ],
    [
        1
    ],
    1
];

echo '<pre>';

// print_r($mas);

function countSum($array)
{
    $sum = 0;
    foreach ($array as $val) {
        if (!is_array($val)) {
            $sum += $val;
        } else {
            $sum += countSum($val);
        }
    }        
    return $sum;
}

echo '<h1>'.countSum($mas).'</h1>';


$anonim = function() 
{
    echo '<h1>ANONIM</h1>';
};


function blaBla()
{
    echo '<h1>BLA BLA BLA</h1>';
}

// $anonim();


function saySomething($f)
{
    $f();
}

// saySomething($anonim);
// saySomething('blaBla');

// saySomething(function()
//     {
//         echo '<h1>INLINE</h1>';
//     }
// );

$masyvas = [
    ['bebras','kietas'],
    ['zuikis','trumpas'],
    ['vilkas','pilkas'],
    ['dramblys','storas'],
];

$sortName = function($a, $b)
{
    return $a[0] <=> $b[0];
};

function sortNameDesc($a, $b)
{
    return $b[0] <=> $a[0];
}

$sortType = fn($a, $b) => $a[1] <=> $b[1];


usort($masyvas, fn($a, $b) => $b[1] <=> $a[1]);


// print_r($masyvas);


$bebras = 'BEBRAS';


// $addStars = fn() => '*' . $bebras . '*';


$addMinus = function() use (&$bebras)
{
    return '--' . $bebras . '--';
};


$bebras = $addMinus();

$bebras = $addMinus();

$bebras = $addMinus();

$bebras = $addMinus();


// echo '<h2>' . $addStars() . '</h2>';

echo '<h2>' . $bebras . '</h2>';


