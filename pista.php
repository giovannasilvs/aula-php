<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pista</title>
</head>
<body>
    <?php
    
    require_once('carro.php');

    $meu_carro = new carro;

    $meu_carro->ligar();

    ?>
</body>
</html>