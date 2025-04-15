<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function calcularFatorial($numero){
        if($numero <= 1){
            return $numero;
        }else{
            return $numero * calcularFatorial($numero - 1);
        }
    }
    ?>
</body>
</html>