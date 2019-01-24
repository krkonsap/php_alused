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
echo '<pre>';
print_r($iktConn);