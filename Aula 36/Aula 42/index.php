<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $preco = $_REQUEST['preco'] ?? 0;
    $porc = $_REQUEST['porc'] ?? 0;
    ?>
<main>
        <h1>Reajuste de preço</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">Preço a ser reajustado (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>">
            <label for="porc">Qual será a porcentagem de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="porc" id="porc" min="0" max="100" step="1" oninput="MudaValor()" value="<?=$porc?>">
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
    $aumento = $porc*$preco / 100;
    $novo = $preco + $aumento
    ?>
    <section>
        <h1>Preço reajustado</h1>
        <p>O produto que custava R$ <?=number_format($preco,2,",",".")?> com  <strong><?=$porc?> de aumento</strong> vai passar a custar <strong> R$<?=number_format($novo, 2, ",", ".")?> </strong> a partir de agora!</p>
    </section>

    <script>
        MudaValor()
        function MudaValor() {
              p.innerText = porc.value 
        }
    </script>
    </body>
</html>