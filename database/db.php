<?php

require_once __DIR__ . '/../app/Models/newArticolo.php';

$articles = [
    new DetailedArticolo(
        'Collare', 
        'https://picsum.photos/400/200',
        15,
        new Categoria('gatto'),
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
        'Guinzaglio', 
        'https://picsum.photos/400/200',
        25,
        new Categoria('cane'),
        new Tipologia('fibra', 'lungo 30m')
    ),
    new DetailedArticolo(
        'Mangime', 
        'https://picsum.photos/400/200',
        4.5,
        new Categoria('pesce'),
        new Tipologia('mangime in polvere', 'pesce secco tritato')
    )

]





?>