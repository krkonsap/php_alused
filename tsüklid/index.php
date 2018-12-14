<?php
header('refresh: 5');
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
    table{
        width: 500px;
        border-collapse: collapse;
    }
    tr, td{
        height: 10px;
        /*width: 30px;*/
        border: solid 1px black;
        border-collapse: collapse;
        text-align: center;
    }
    th{
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

//tabel

echo '<h5>ül 2</h5>';
echo '<table>';
    for($reaNumber = 1; $reaNumber <= 20; $reaNumber++){
        echo '<tr>';
        /*$varv = '#';
        for($kord = 1; $kord <= 6; $kord++){
            $varv = $varv.dechex(rand(0,15));
        }*/
            for($veeruNr = 1; $veeruNr <= 20; $veeruNr++){
                $varv = '#';
                for($kord = 1; $kord <= 6; $kord++){
                    $varv = $varv.dechex(rand(0,15));
                }
                echo '<td style= "background: '.$varv.'">&nbsp;</td>';
            }
            /*echo '<td style= "background: '.$varv.'">&nbsp;</td>';
            echo '<td style= "background: '.$varv.'">&nbsp;</td>';
            echo '<td style= "background: '.$varv.'">&nbsp;</td>';
            echo '<td style= "background: '.$varv.'">&nbsp;</td>';
            echo '<td style= "background: '.$varv.'">&nbsp;</td>';*/
        echo '</tr>';
    }
echo '</table>';

//korrutustabel

echo '<h5>korrutustabel</h5>';
echo '<table>';
    echo '<tr>';
    for($arv1 = 0; $arv1 <= 10; $arv1++){
        $txt = ($arv1 == 0) ? '&nbsp;' : $arv1;
            echo '<th style="background: deepskyblue">'.$txt.'</th>';

    }
    echo '</tr>';
    for($arv1 = 1; $arv1 <= 10; $arv1++){
        echo '<tr>';
                echo '<th style="background: coral">'.$arv1.'</th>';
        for($arv2 = 1; $arv2 <= 10; $arv2++){
            echo '<td>';
            echo ($arv1 * $arv2);
            echo '</td>';
        }
        echo '</tr>';
    }
echo '</table>';

//while tsükkel

/*
 * while(tingimus){
 *      tegevused mis toimivad kuni tingimus kehtib
 * }
 */

echo '<h5>while</h5>';
$arv = 1234;
while($arv != 0){
    $number = $arv % 10;
    echo 'Number = '.$number.'<br>';
    $arv = $arv / 10;
    echo 'Arv ümardamata = '.$arv.'<br>';
    settype($arv, 'int');
    echo 'Arv int = '.$arv.'<br>';
//    $summa = $summa + $number;
    $summa += $number;
    echo '<hr>';
}
echo 'Arvu numbrite summa = '.$summa.'<br>';

// lisaülesanne

echo '<h5>lisaül</h5>';
$arv5 = 48557812535;
$kordused = 0;
echo 'Arv on: '.$arv5;
while($arv5 != 0){
    $number = $arv5 % 10;
    echo 'Number = '.$number.'<br>';
    $arv5 = $arv5 / 10;
    echo 'Arv ümardamata = '.$arv.'<br>';
    settype($arv5, 'int');
    echo 'Arv int = '.$arv5.'<br>';
    if($number == 5) $kordused++;
}
echo 'Number viis esineb selles arvus '.$kordused.' korda.';
















