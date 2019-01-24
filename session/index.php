<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 24.01.2019
 * Time: 14:16
 */
session_start();
require_once 'fnk.php';

if(isset($_SESSION['user'])){
    echo 'Tere tulemast, '.$_SESSION['user']['last_name'].'!<br>';
    echo '<form action="acts/login.php"><input type="submit" value="Logi välja"></form>';
} else{

$loginForm = htmlFromFile('login');
echo $loginForm;
}