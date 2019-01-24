<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 24.01.2019
 * Time: 14:34
 */

require_once '../db/conf.php';
require_once '../db/dbfnk.php';

//andmed html vormist
$username = $_GET['uname'];
$password = $_GET['upass'];

//loome ühenduse db-ga
$ikt = connect_db(DBHOST,DBUSER,DBPASS,DBNAME);

//küsime kasutaja olemasolu andmebaasist
$sql = 'SELECT * FROM user WHERE username="'.$username.'" AND password="'.md5($password).'"';

$users = getData($sql,$ikt);

//loome kasutaja session kui ta andmebaasis olemas
if($users !== false){
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: ../index.php');
//    echo session_id();
//    echo $users[0]['first_name'].' '.$users[0]['last_name'];
}

