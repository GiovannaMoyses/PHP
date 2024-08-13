<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antecessor e sucessor</title>
    <link rel = "stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>A resposta é:</h1>
        <p>
            <?php 
                $num = $_REQUEST["num"] ?? 0;
                $ant= $num - 1;
                $suc= $num + 1;
                echo "O número informado foi <strong>$num </strong><br>";
                echo "O seu <em>antecessor</em> é: $ant<br>";
                echo "O seu <em>sucessor</em> é: $suc";
            ?>
        </p>
        <button onclick="javascript:window.location.href='index.html'">&#x1F504; Voltar</button>
    </main>
</body>
</html>