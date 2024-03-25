<?php

require_once __DIR__ . '/../app/Models/newArticolo.php';

$articles = [
    new DetailedArticolo(
        'Collare', 
        'https://picsum.photos/400/200',
        15,
        new Categoria('cane'),
        new Tipologia('ciotola', 'elegante ciotola decorata in metallo')
    ),
    new DetailedArticolo(
        'Elastico', 
        'https://picsum.photos/400/200',
        3,
        new Categoria('coniglio'),
        new Tipologia('elastico', 'elastico per raccogliere le orecchie')
    ),
    new DetailedArticolo(
        'guinzaglio', 
        'https://picsum.photos/400/200',
        25,
        new Categoria('cane'),
        new Tipologia('fibra', 'lungo 30m')
    )

]





?>