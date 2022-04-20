<?php

/**
    * Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario.
    * Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
    * Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60
**/

$matches = [
    [
        'team home' => 'Heat',
        'team away' => 'Hawks',
        'home point' => '115',
        'away point' => '105'
    ],
    [
        'team home' => 'Grizzlies',
        'team away' => 'Timberwolves',
        'home point' => '124',
        'away point' => '96'
    ],
    [
        'team home' => 'Suns',
        'team away' => 'Pelicans',
        'home point' => '114',
        'away point' => '125'
    ], 
]

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack1</title>
</head>
<body>
    <ul>
        <?php for ($i=0 ; $i < count ($matches); $i++) { ?>
        <li><?php echo $matches[$i]['team home']?> -  <?php echo $matches[$i]['team away']?>: <?php echo $matches[$i]['home point']?> / <?php echo $matches[$i]['away point']?></li>
        <?php } ?>
    </ul>
</body>
</html>