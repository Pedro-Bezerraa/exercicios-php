<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function gerarTabuada($numero) {
        echo "Tabuada do ".$numero.":\n";
        for($i = 1; $i <= 10; $i++){
            echo $numero."x".$i."=".($numero * $i)."\n";
        }
    }
    ?>
</body>
</html>