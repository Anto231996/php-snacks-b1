<?php

/**
    * Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
    * Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z
**/

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
<ul>
        <?php
            // § mi sono salvato tutti i valori dell'array associativo di post in $postsValues
            $postsValues = array_values($posts);

            // § mi sono salvato tutte le chiavi dell'array associativo di post in $postsKeys
            $postsKeys = array_keys($posts);

            // # ciclo per ogni coppia chiave => valore nell'array associativo di post ($posts)
            for ( $i = 0 ; $i < count($postsKeys) ; $i++){;?>

                <!-- // # Scrivo la data relativa ai post in tale data -->
                <h4>Post in data: <?php echo $postsKeys[$i]; ?></h4>

                <!-- // ? ciclo per ogni valore presente tra i post di quella specifica data -->
                <?php for ( $postIndex = 0 ; $postIndex < count($postsValues[$i]) ; $postIndex++){ ?>
                    <h5>
                        <?php echo $postsValues[$i][$postIndex]['title']; ?>
                    </h5>
                    <p>
                        <em><?php echo $postsValues[$i][$postIndex]['author']; ?></em>
                    </p>
                    <p>
                        <?php echo $postsValues[$i][$postIndex]['text']; ?>
                    </p>

                <?php } ?> <!-- //? chiusura secondo ciclo for -->

            <?php } ?> <!-- // #chiusura primo ciclo for -->
    </ul>

</body>
</html>