<?php 
include_once __DIR__ . '/classes/size.php';
include_once __DIR__ . '/classes/details.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Prodotti</title>
</head>
<body>
    <header>
        <img src="./images/hanger.png" alt="">
        <h1>Shop online</h1>
    </header>

    <main>
        <section>
            <img src="./images/pullover.jpg" alt="">
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

            <?php 
                $details = new Details('Lana', 'rosso', '0003458');
            ?>

            <div>
                Tessuto: <?php echo $details->material; ?>
            </div>

            <div>
                Colore: <?php echo $details->color; ?>
            </div>
        </section>

        <section>
            <img src="./images/jeans.jpg" alt="">
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
                <div class='discount'>
                    Sconto del 30% sui pantaloni!
                </div>
               <?php echo $size->setDiscount('Pantaloni'); ?> Euro
            </div>
            
            <?php 
                $details = new Details('jeans', 'blu', '0002254');
            ?>

            <div>
                Tessuto: <?php echo $details->material; ?>
            </div>

            <div>
                Colore: <?php echo $details->color; ?>
            </div>
        </section>
    </main>
</body>
</html>