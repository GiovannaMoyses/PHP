<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
    <h1> Login realizado com sucesso </h1>
</header>
<main>
    <?php
    $Nome = $_GET["nome"] ?? "sem nome";
    $sobrenome = $_GET["sobrenome"] ?? "desconhecido";
    echo "<p> É um prazer te conhecer, <strong> $Nome $sobrenome</strong>! Este é o meu site!";
     ?>
         <p><a href="javascript:history.go(-1)">&#x1F504Voltar para a página anterior </a></p>

</main>
</body>
</html>