!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisar número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
     <h1>Analisador de Número Real</h1>
     <?php
     $num = $_POST["num"] ?? 0;
     
     echo "<p> Analisando o número <strong>". Number_format ($num ,3,",", ".") . " </strong> informado pelo usuário: </p>";

     $int = (int) $num;
     $fra = $num - $int;

     echo "<ul><li> A parte inteira do número é <strong>" . Number_format ($int ,0,",", ".") . " <strong></li>";
     echo "<li> A parte fracionária do número é <strong>" . Number_format ($fra ,3,",", ".") . " </strong></li></ul>";

     ?>
     <button onclick="javascript:window.location.href='index.html'">&#x1F504; Voltar</button>
    </main>
</body>
</html>