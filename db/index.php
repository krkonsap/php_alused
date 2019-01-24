<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 24.01.2019
 * Time: 12:17
 */

require_once 'conf.php';
require_once 'dbfnk.php';


$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);


$sql = 'UPDATE user SET last_name="Ebatavaline" WHERE user_id=1';
$res = query($sql, $iktConn);
echo '<pre>';
print_r($res);

