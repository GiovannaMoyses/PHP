<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $AnoAtual = date("Y");
    $AnoNascimento = $_GET ['ano'] ?? 1900;
    $ano = $_GET ['idade'] ?? $AnoAtual;
    ?>
<main>
        <h1>Calculadora de idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="ano">Em que ano vc nasceu?</label>
            <input type="number" name="ano" id="ano" min="1900" max="<?=$AnoAtual?>" value="<?=$AnoNascimento?>">
            <label for="idade">Quer saber sua idade em que ano? (Ano atual <strong><?=$AnoAtual?></strong>)</label>
            <input type="number" name="idade" id="idade" min="1900" value="<?=$ano?>" >
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section>
        <?php 
        $idade = $ano - $AnoNascimento;        
        ?>
        <h1>Idade</h1>
        <p>Quem nasceu em <?=$AnoNascimento?> terá <strong> <?=$idade?> anos</strong> em <?=$ano?>!</p>
    </section>
    </body>
</html>