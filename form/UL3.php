<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 12.01.2019
 * Time: 17:45
 */

$r = $_GET['r'];
$h = $_GET['h'];

echo 'Raadius: '.$r.' m<br>';
echo 'Kõrgus: '.$h.' m<br>';

$pii = 3.1416;

//kera ruumala = 4/3 * pii * r**3

function kera(){
    global $r;
    global $pii;
    $keraV = 4 / 3 * $pii * ($r ** 3);
    return $keraV;
}
echo 'Kera ruumala on '.kera().' kuupmeetrit.';

//koonuse ruumala = pii * r**2 * (h/3)

function koonus(){
    global $r;
    global $h;
    global $pii;
    $koonuseV = $pii * ($r ** 2) * ($h / 3);
    return $koonuseV;
}
echo 'Koonuse ruumala on '.koonus().' kuupmeetrit.';

//silindri ruumala = pii * r**2 * h



?>

