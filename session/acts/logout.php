<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 24.01.2019
 * Time: 15:26
 */
session_start();
session_destroy();
header('Location: ../index.php');