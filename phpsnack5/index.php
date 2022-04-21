<?php
/**
    * Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
    * Prendere il paragrafo e suddividerlo in tanti paragrafi. 
    * Ogni punto un nuovo paragrafo.
**/

$paragraph = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus molestiae ad tempora labore rem laborum, earum iusto iure officia rerum consequuntur officiis, tenetur architecto. Modi et repellendus natus necessitatibus quia?";

$paragraphs = explode('.', $paragraph);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack5</title>
</head>
<body>
    <?php for ($i=0; $i < count($paragraphs) ; $i++) { ?>
        <p>
            <?php echo $paragraphs[$i];?>
        </p>
    <?php } ?>
</body>
</html>