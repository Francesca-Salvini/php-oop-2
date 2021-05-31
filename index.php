<?php

require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Sapone.php';
require_once __DIR__ . '/Cancelleria.php';

$pizza = new Cibo('Buitoni', 'pizza', 3);
var_dump($pizza->getInfoData());

$sapone = new Sapone('Coccolino', 'ammorbidente', 2);
var_dump($sapone->getInfoData());

$matite_colorate = new Cancelleria('Stabilo', 'matite_colorate', 10);
var_dump($matite_colorate->getInfoData());
?>