<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 12.01.2019
 * Time: 18:43
 */
date_default_timezone_set('Europe/Tallinn');

// Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31
echo date('d.m.Y G:i' , time());
echo '<hr>';

//Kuva tänane eestikeelne nädalapäev, N: kolmapäev

$date = date('d.m.Y G:i' , time());
$days = ['esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede','laupäev', 'pühapäev'];
$day = date('w', strtotime($date));
$date = 'Täna on'." $days[$day].";
echo $date;

echo '<hr>';
//Kuva eestikeelne kuupäev koos nädalapäevaga.
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo 'Täna on '.$paev.'. '.$kuu.' '.$aasta.', '.$days[$day].'.';

echo '<hr>';

