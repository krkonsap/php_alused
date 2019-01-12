<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 12.01.2019
 * Time: 21:07
 */
//teksti vormindamine

$tekst = '       Tuli talv ja tulid tuisud, jänes ostis uued uisud.       ';

echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
echo '<br>';
echo ucfirst(strtolower($tekst));

echo '<hr>';
//teksti pikkus
echo strlen($tekst);
echo '<br>';
echo str_word_count($tekst);

echo '<hr>';
// teksti kärpimine

echo "<pre>$tekst</pre>";
echo "<pre>".trim($tekst)."</pre>";
echo "<pre>".ltrim($tekst)."</pre>";
echo "<pre>".rtrim($tekst)."</pre>";

echo '<hr>';
//tekst kui massiiv
echo $tekst[0];
echo '<br>';
echo $tekst[4];
echo '<br>';
echo substr($tekst, 3, 5);
echo '<br>';
echo substr($tekst, 4, -13);
echo '<br>';
echo substr($tekst, -8, 7);
echo '<br>';
print_r(str_word_count($tekst, 1));
echo '<br>';
print_r(str_word_count($tekst, 2));

echo '<hr>';
//
