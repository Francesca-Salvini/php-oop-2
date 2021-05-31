<?php

// Importo i file legati alla classe principale ('Prodotto')
require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Sapone.php';
require_once __DIR__ . '/Cancelleria.php';
require_once __DIR__ . '/User.php';

// prodotto n.1
$pizza = new Cibo('Buitoni', 'pizza', 3, 2);
// var_dump($pizza->getInfoData());

// prodotto n.2
$sapone = new Sapone('Coccolino', 'ammorbidente', 2, 4);
// var_dump($sapone->getInfoData());

// prodotto n.3
$matite_colorate = new Cancelleria('Stabilo', 'matite_colorate', 10, 1);
// var_dump($matite_colorate->getInfoData());

// USER : colui che effettua gli acquisti
$user = new User('Mario', 'Rossi');
// prodotti scelti dall'user 
$user->addProduct($sapone);
$user->addProduct($pizza);
// var_dump($user);
?>

<!--HTML-->
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
                <li>Prezzo: <?php echo $product->prezzo . ' euro'; ?></li>
                <li>Quantità: <?php echo $product->quantita ?></li>
                
            </ul>
        </div>
    <?php } ?>
    
</body>
</html>