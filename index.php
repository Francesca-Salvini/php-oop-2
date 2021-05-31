<?php

require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Sapone.php';
require_once __DIR__ . '/Cancelleria.php';
require_once __DIR__ . '/User.php';

$pizza = new Cibo('Buitoni', 'pizza', 3);
var_dump($pizza->getInfoData());

$sapone = new Sapone('Coccolino', 'ammorbidente', 2);
var_dump($sapone->getInfoData());

$matite_colorate = new Cancelleria('Stabilo', 'matite_colorate', 10);
var_dump($matite_colorate->getInfoData());

$user = new User('Mario', 'Rossi');

$user->addProduct($sapone);
$user->addProduct($pizza);
var_dump($user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supermarket Express</title>
</head>
<body>

    <h1>Riepilogo ordine</h1>

    <?php foreach($user->getProducts() as $product) { ?>
        <div>
            <ul>
                <li>Tipologia prodotto: <?php echo $product->tipologia_prodotto ?></li>
                <li>Marca: <?php echo $product->marca ?></li>
                <li>Quantità: <?php echo $product->quantita ?></li>
                
            </ul>
        </div>
    <?php } ?>
    
</body>
</html>