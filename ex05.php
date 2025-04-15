<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcularMedia($numeros) {
        if(empty($numeros)) {
            return 0;
        }
        $soma = array_sum($numeros);
        return $soma / count($numeros);
    }
    ?>
</body>
</html>