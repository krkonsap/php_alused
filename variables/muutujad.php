<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 13.12.2018
 * Time: 13:08
 */
// muutujate defineerimine
// $muutujaNimi 0 väärtus;

$taisArv = 3;
$reaalArv = 3.3;
$sone = '3';
$toevaartusTrue = true;
$toevaartusFalse = false;

// väljastame muutujad koos selgitusega

echo 'Täisarv: '.$taisArv.'<br>';
echo 'Reaalarv: '.$reaalArv.'<br>';
echo 'Sõne: '.$sone.'<br>';
echo 'Tõeväärtus true: '.$toevaartusTrue.'<br>';
echo 'Tõeväärtus false: '.$toevaartusFalse.'<br>';
echo '<hr>';

//tüübikontroll
echo gettype($sone);
echo '<br>';
$summa = $sone + $sone;
settype($summa, 'string');
echo gettype($summa);
echo 'Summa = '.$summa.'<br>';