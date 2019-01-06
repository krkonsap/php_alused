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
//sorteerime viimasest alates (r)
rsort($kasutajad);

echo '<pre>';
print_r($kasutajad);
echo '</pre>';

echo '<hr>';
//kahemõõtmeline massiiv

$kasutajad3 = array(
    array(
        'alice',
        'Alice',
        'Liddle',
        'female'
    ),
    array(
        'bob',
        'Bob',
        'Builder',
        'male'
    ),
);

echo '<pre>';
print_r($kasutajad3);
echo '</pre>';

//divi värvimine vastavalt soole

foreach ($kasutajad3 as $kasutaja3){
    if ($kasutaja3[3] == 'male') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<div style="background-color: deepskyblue">' . $sisuelement . '</div>';
        }
    } else if ($kasutaja3[3] == 'female') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<div style="background-color: palevioletred">' . $sisuelement . '</div>';
        }
    } else {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<div style="background-color: darkgray">' . $sisuelement . '</div>';
        }
    }
    echo '<hr>';
}

//eelmiste andmete näitamine tabelis
echo '<table>';
echo '<tr>
        <th>Kasutaja</th>
        <th>Eesnimi</th>
        <th>Perenimi</th>
        <th>sugu</th>
     </tr>';

foreach ($kasutajad3 as $kasutaja3){
    echo '<tr>';
    if ($kasutaja3[3] == 'male') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<td style="background-color: deepskyblue">' . $sisuelement . '</td>';
        }
    } else if ($kasutaja3[3] == 'female') {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<td style="background-color: palevioletred">' . $sisuelement . '</td>';
        }
    } else {
        foreach ($kasutaja3 as $sisuelement) {
            echo '<td style="background-color: darkgray">' . $sisuelement . '</td>';
        }
    }

}
?>

<!-- andmestruktuuri loomine mitmemõõtmelise massiivi kasutamisega -->

<html>
  <head>
    <title>listing 7.1</title>
  </head>
  <body>

  <?php
  $characters = array (
      array (
          name=>"bob",
          occupation=>"superhero",
          age=>30,
          speciality=>"x-ray vision"),
      array (
          name=>"sally",
          occupation=>"superhero",
          age=>24,
          speciality=>"superstrength"),
      array (
          name=>"mary",
          occupation=>"villain",
          age=>63,
          speciality=>"nanotech")
      );
  print $characters[0][occupation];
  //prints "superhero"
  ?>

  </body>
</html>



















