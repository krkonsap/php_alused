<?php
/**
 * Created by PhpStorm.
 * User: Laptop
 * Date: 12.01.2019
 * Time: 18:26
 */
//ajavööndi järgi kuvamine
date_default_timezone_set('Europe/Tallinn');

//aja loomine
echo time();

echo '<hr>';

//kasutajasõbralik aeg
echo date('d.m.Y G:i' , time());

echo '<hr>';

//eestikeelse kuupäeva massiiv
$eesti_kuud = array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev.'.'.$kuu.' '.$aasta;

echo '<hr>';

//tehted kuupäevadega
echo date('d.m.Y G:i' , time()+60) . '<br>';
echo date('d.m.Y G:i' , time()+60*60) . '<br>';
echo date('d.m.Y G:i' , time()+60*60*24);

