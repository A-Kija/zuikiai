<?php

// echo '<pre>';

echo "\n\n\n___________1U_______________\n";

$petras = rand(10, 20);
$jonas = rand(5, 25);

if ($petras > $jonas) {
    echo "Petas: $petras, Jonas: $jonas, laimėjo Petras";
} elseif ($petras < $jonas) {
    echo "Petas: $petras, Jonas: $jonas, laimėjo Jonas";
} else {
    echo "Petas: $petras, Jonas: $jonas, niekas nelaimėjo";
}