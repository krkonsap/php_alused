<?php
header('refresh: 2');
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 14.12.2018
 * Time: 13:56
 */

// loopid

// for tsükkel

/*
 * for($jmn = alg; $jmn <= lopp; $jmn++){
 *      tegevused, mis toimuvad, kui jmn (juhtimismuutuja) väärtus
 *      ei ole lõppväärtust saavutanud
 * }
 */
?>
<style>
    table, tr, td{
        width: 20px;
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>
<?php

echo '<h5>ül 1</h5>';
for($arv =1; $arv <= 10; $arv++){
    /*$varv = '';
    if($arv % 2 == 0){
        $varv = 'green';
    } else{
        $varv = 'red';
    }*/
    $varv = ($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: '.$varv.'">'.$arv.'</div>';
};

//

echo '<h5>ül 2</h5>';
echo '<table>';
    for($reaNumber = 1; $reaNumber <= 5; $reaNumber++){
        echo '<tr>';
        $varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }
            echo '<td style= "background: '.$varv.'">&nbsp;</td>';
        echo '</tr>';
    }
echo '</table>';
