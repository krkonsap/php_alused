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
