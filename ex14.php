<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function palavraPorComprimento(array $strings, int $valor) {
        return array_filter($strings, function($str) use ($valor) {
            return strlen($str) > $valor;
        });
    }
    ?>
</body>
</html>