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

echo '<hr>';

//hello funktsioon
function bighello() {
    print '<h1>HELLO!</h1>';
}
bighello();

echo '<hr>';

//argumentidega funktsioon
function printBR($txt) {
    print("$txt<br>\n");
}
printBR('See on rida.');
printBR('See on ka rida.');
printBR('See on veel üks uus rida.');

echo '<hr>';

//funktsioon väärtuste tagastamiseks
function addNums($firstnum, $secondnum){
    $result = $firstnum + $secondnum;
    return $result;
}
print 'Kolm pluss viis on '.addNums(3,5).'.';

echo '<hr>';

//dünaamilised väljakutsed
function sayHello() {
    print 'Hello<br>';
}
$function_holder = 'sayHello';
$function_holder();

echo '<hr>';

//muutujate nähtavuse piirkond
function test() {
    $testvariable = 'this is a test variable';
}
print 'test variable: '.$testvariable.'<br>';

echo '<hr>';

//global muutuja
$life = 42;
function meaningOfLife() {
    global $life;
    print 'The meaning of life is '.$life.'<br>';
}
meaningOfLife();

echo '<hr>';

//funktsiooni seisundi meelespidamine
$num_of_calls = 0;
function andAnotherThing($txt){
    global $num_of_calls;
    $num_of_calls++;
    print '<h1>'.$num_of_calls.'. '.$txt.'</h1>';
}
andAnotherThing('Widgets');
print('We buid a fine range of widgets<p>');
andAnotherThing('Doodads');
print('Finest in the world<p>');

echo '<hr>';

//argumentide vaikimisi väärtused
function fontWrap($txt, $size) {
    print '<font size='.$size.' face= Helvetica, Arial, Sans_serif>'.$txt.'</font>';
}
fontWrap('A heading<br>', 5);
fontWrap('some body text<br>', 3);
fontWrap('more body text<br>', 3);
fontWrap('yet more body text<br>', 3);

echo '<hr>';

//argumendid viite abil
function addFive(&$num){
    $num += 5;
}
$orignum = 10;
addFive($orignum);
print($orignum);

echo '<hr>';

//iseseisev ül tekstisõnumi tabel
function returnTable($value1, $value2, $value3, $value4){
    echo '<table>'.'<tr>'.'<td>'.$value1.'</td>'.'<td>'.$value2.'</td>'.'<td>'.$value3.'</td>'.'<td>'.$value4.'</td>'.'</tr>'.'</table>';
}
returnTable('esimene', 'teine', 'kolmas','neljas');













