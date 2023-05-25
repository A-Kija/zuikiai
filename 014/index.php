<?php

$text = 'Bla bla bla. Bla Bla.';

echo __DIR__.'/../data/bla.txt';

echo '<br>';


file_put_contents(__DIR__.'/../data/bla.txt', $text);


echo file_get_contents(__DIR__.'/../data/bla.txt');