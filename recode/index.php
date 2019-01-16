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
        include($_GET['leht'].'.php');
    } else {

        ?>

        <h2>Avaleht</h2>
        <p>See on avalehekülg.</p>


        <?php
    }
    ?>
</body>
</html>

