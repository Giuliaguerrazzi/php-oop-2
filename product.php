<?php 
include_once __DIR__ . '/classes/size.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti</title>
</head>
<body>
    <header>
        <h1>Shop</h1>
    </header>

    <main>
        <section>
            <?php 
                $size = new Size('Maglione a coste', 'Maglieria', 20, 'M');
            ?>
            <div>
                Prodotto: <?php echo $size->name; ?>
            </div>
            <div>
               Categoria: <?php echo $size->category; ?>
            </div>
            <div>
                Taglia disponibile: <?php echo $size->size; ?> 
            </div>
            <div>
               Prezzo: <?php echo $size->price; ?> Euro
            </div>
        </section>

        <section>
            <?php 
                $size = new Size('Jeans vita alta', 'Pantaloni', 25, 'S');
            ?>

            <div>
                Prodotto: <?php echo $size->name; ?>
            </div>
            <div>
               Categoria: <?php echo $size->category; ?>
            </div>
            <div>
                Taglia disponibile: <?php echo $size->size; ?> 
            </div>
            <div>
               Prezzo: <?php echo $size->price ?> Euro
                <div>
                    Sconto del 30% sui pantaloni!
                </div>
               <?php echo $size->setDiscount('Pantaloni'); ?> Euro
            </div>
        </section>
    </main>
</body>
</html>