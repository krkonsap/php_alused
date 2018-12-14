<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 14.12.2018
 * Time: 12:32
 */

//tingimuslaused
/*
 * if(tingimus) {
 *      tegevused, mis toimuvad, kui tingimus kehtib
 * } else {
 *      tegevused, kui tingimus ei kehti
 * }
 */

echo '<h5>ül 1</h5>';
$arv = rand(0,100);
if($arv % 2 == 0){
    echo '<div style="color: green">'.$arv.'</div>';
} else{
    echo '<div style="color: red">'.$arv.'</div>';
};

//ex 2
echo '<h5>ül 2</h5>';
$arv = rand(0,100);
if($arv >= 0 and $arv < 25){
    echo '<div style="color: red">'.$arv.'</div>';
} else if($arv >= 25 and $arv< 50){
    echo '<div style="color: green">'.$arv.'</div>';
} else if($arv >= 50 and $arv <  75){
    echo '<div style="color: blue">'.$arv.'</div>';
} else if($arv >= 75 and $arv < 100){
    echo '<div style="color: orange">'.$arv.'</div>';
} else {
    echo '<div style="color: black">'.$arv.'</div>';
};

//ex 3
echo '<h5>ül 3</h5>';
