<?php
/**
 * Created by PhpStorm.
 * User: konsap
 * Date: 16.01.2019
 * Time: 15:44
 */

?>

<!doctype html>
<html>
<head>
<title>Koodi taaskasutamine</title>
    <style>
        body{
            background-color: coral;
        }
    </style>
</head>
<body>
    <menu>
        <a href="index.php">Avaleht<a/>
        <a href="index.php?leht=portfoolio">Portfoolio<a/>
        <a href="index.php?leht=kaart">Kaart<a/>
        <a href="index.php?leht=kontakt">Kontakt<a/>
    </menu>

    <?php

    if(!empty($_GET['leht'])){
        $leht = htmlspecialchars($_GET['leht']);
        $lubatud = array('portfoolio','kaart','kontakt');
        $kontroll = in_array($leht, $lubatud);
        if($kontroll==true){
            include($leht.'.php');
        } else {
            echo 'Valitud lehte ei eksisteeri!';
        }
    } else {

        ?>

        <h2>Avaleht</h2>
        <p>See on avalehekülg.</p>


        <?php
    }
    ?>

</body>
</html>

