<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 12.01.2019
 * Time: 21:07
 */
//teksti vormindamine

$tekst = '       see on mingi tekst       ';

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