<?php
/**
    * Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta
**/

    $arrayNumbers = [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack4</title>
</head>
<body>
    <?php
        $randNum = [];
        while(count($randNum) < 15 ){
            $tempRandInt = rand(0, 100);
            if (!in_array($tempRandInt, $randNum)){
                $randNum[] = $tempRandInt;
            }
        }
        var_dump($randNum);
    ?>
</body>
</html>