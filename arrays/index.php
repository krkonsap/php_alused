<?php
/**
 * Created by PhpStorm.
 * User: kristjan.konsap
 * Date: 18.12.2018
 * Time: 14:42
 */
// indekseeritud lihtmassiivid - nö nimekirjad

$kasutajad = array(
    'alice',
    'bob',
    'lucy'
);

for($i = 0; $i < count($kasutajad); $i++){
    echo $i.' - '.$kasutajad[$i].'<br>';
}
