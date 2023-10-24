<?php
    include_once('cep.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca -> CEP</title>
</head>
<body>
    <form action="." method="POST">
    <p> Digite o CEP para consultar: </p>
    <input type="text" placeholder="Digite um cep" name="cep">
    <input type="submit">
    <br>
    Rua: <input type="text" name="rua" value="<?php echo $result->logradouro;?>">
    <br>
    Bairro <input type="text" name="bairro" value="<?php echo $result->bairro;?>">
    <br>
    Cidade <input type="text" name="cidade" value="<?php echo $result->localidade;?>">
    <br>
    Estado <input type="estado" name="estado" value="<?php echo $result->uf;?>">
</form>
</body>
</html>