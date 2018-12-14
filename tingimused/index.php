<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 14.12.2018
 * Time: 12:32
 */
header('refresh: 5');
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


//switch

/*
 * switch (kontroll){
 *      case vastus:
 *          tegevused, mis case puhul toimivad
 *          break;
 *      default:
 *          tegevused, mis on siis kui muu ei sobi
 *          break
 * }
 */

//valgusfoor
?>
<style>
    div{
        width: 100px;
        height: 100px;
        border-radius: 50px;
        border: solid 1px black;
    }

</style>

<?php
echo '<h5>valgusfoor</h5>';
$aktiivne = 'roheline';
switch ($aktiivne){
    case 'punane':
        echo '<div style="background: red"></div>';
        echo '<div style=""></div>';
        echo '<div style=""></div>';
        break;
    case 'kollane':
        echo '<div style=""></div>';
        echo '<div style="background: yellow"></div>';
        echo '<div style=""></div>';
        break;
    case 'roheline':
        echo '<div style=""></div>';
        echo '<div style=""></div>';
        echo '<div style="background: green"></div>';
        break;
    default:
        echo '<div style=""></div>';
        echo '<div style="background: black"></div>';
        echo '<div style=""></div>';
        break;
}
