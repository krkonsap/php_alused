<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 17.12.2018
 * Time: 14:24
 */

// funktsioonid
$num = - 321;
$newnum = abs($num);
print $newnum;

//hello funktsioon
function bighello() {
    print '<h1>HELLO!</h1>';
}
bighello();

//argumentidega funktsioon
function printBR($txt) {
    print("$txt<br>\n");
}
printBR('See on rida.');
printBR('See on ka rida.');
printBR('See on veel üks uus rida.');

//funktsioon väärtuste tagastamiseks
function addNums($firstnum, $secondnum){
    $result = $firstnum + $secondnum;
    return $result;
}
print 'Kolm pluss viis on '.addNums(3,5).'.';

