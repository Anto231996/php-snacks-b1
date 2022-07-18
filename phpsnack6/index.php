<?php
/**
    * Utilizzare questo array: https://pastebin.com/CkX3680A. 
    * Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack6</title>
</head>
<body>
<?php
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ],
            [
                'name' => 'Federica',
                'lastname' => 'Giannini'
            ]
        ]
    ];

    $keys = array_keys($db);
    $values = array_values($db);

    // # ciclo per ogni valore presente nel $db
    for ($index = 0 ; $index < count($values); $index ++){
        // var_dump(array_values($db)[$index]);

        if ($keys[$index] == 'teachers') {
            echo '<h5>Teachers</h5>';
            for ($teacherIndex = 0 ; $teacherIndex < count( $values[$index]) ; $teacherIndex++){
                $teacher = $values[$index][$teacherIndex];
                echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br>';
            }
        } else if ($keys[$index] == 'pm') {
            echo '<h5>PM</h5>';
            for ($pmIndex = 0 ; $pmIndex < count( $values[$index]) ; $pmIndex++){
                $pm = $values[$index][$pmIndex];
                echo $pm['name'] . ' ' . $pm['lastname'] . '<br>';
            }
        }
    }
    ?>
</body>
</html>