<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 18.12.2018
 * Time: 14:42
 */
// indekseeritud lihtmassiivid - nö nimekirjad

$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);

for($i = 0; $i < count($kasutajad); $i++){
    echo $i.' - '.$kasutajad[$i].'<br>';
}

echo '<hr>';

foreach ($kasutajad as $kasutaja){
    echo $kasutaja.'<br>';
}

echo '<hr>';
// tühi array, kuhu hiljem nadmeid sisestada
$kasutajad2 = array();

$kasutajad2[] = 'alice';
$kasutajad2[] = 'bob';

array_push($kasutajad2, 'lucy');

foreach ($kasutajad2 as $kasutaja2){
    echo $kasutaja2.'<br>';
}

//eemaldamine massiivi tagant ja eest
echo '<hr>';
array_pop($kasutajad2);
array_shift($kasutajad2);
foreach ($kasutajad2 as $kasutaja2){
    echo $kasutaja2.'<br>';
}

echo '<hr>';
//andmete vaatamine
var_dump($kasutajad);
echo '<br>';
print_r($kasutajad);
echo '<pre>';
print_r($kasutajad);
echo '</pre>';

echo '<hr>';