<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function formatarNome($string) {
        $partes = explode(' ', $string);
        $nome = array_shift($partes);
        $sobrenome = implode(' ', $partes);

        return $sobrenome.", ".$nome;
    }
    ?>
</body>
</html>