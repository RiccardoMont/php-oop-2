<?php

require_once __DIR__ . '/database/db.php';


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <h1>BooleanPlanet</h1>
    <div class="container">
        <div class="row">

            <?php foreach ($articles as $article) : ?>


                <div class="card">
                    <h3><?= $article->getTitle() ?></h3>
                    <img src="<?= $article->getImg() ?>" alt="">
                    <div class="texts">
                        <p><?= $article->getPrice() ?>€</p>
                        <h5>Prodotto indicato per:</h5>
                        <?php if($article->getCategoria() == 'cane') : ?>
                            <i class="fa-solid fa-dog"></i>
                        <?php elseif($article->getCategoria() == 'gatto') : ?>
                            <i class="fa-solid fa-cat"></i>
                        <?php elseif($article->getCategoria() == 'pesce') : ?>
                            <i class="fa-solid fa-fish-fins"></i>
                        <?php else : ?>
                            <span><?= $article->getCategoria() ?></span>
                        <?php endif; ?>
                        <h5>Articolo:</h5>
                        <span><?= $article->getTipologia() ?></span>
                        <h5>Descrizione:</h5>
                        <p><?= $article->getCDescrizione() ?></p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>