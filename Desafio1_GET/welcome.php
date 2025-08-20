<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>

<body>
    <?php
 if(isset($_GET['nome'])) {
    $user_name = $_GET["nome"];
    echo "Nome do usuário: " . $user_name;
 }
 ?>
</body>

</html>