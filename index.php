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
</head>

<body>
    <h1>work in progress</h1>
    <div class="container">
        <div class="row">

            <?php foreach ($articles as $article) : ?>


                <div class="card">
                    <h3><?= $article->getTitle() ?></h3>
                    <img src="<?= $article->getImg() ?>" alt="">
                    <p><?= $article->getPrice() ?>€</p>
                    <span><?= $article->getCategoria() ?></span>
                    <span><?= $article->getTipologia() ?></span>
                    <span><?= $article->getCDescrizione() ?></span>



                </div>



            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>