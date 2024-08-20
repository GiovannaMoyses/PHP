<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $valor1 = $_GET['V1'] ?? '';
    $peso1 = $_GET['P1'] ?? '';
    $valor2 = $_GET['V2'] ?? '';
    $peso2 = $_GET['P2'] ?? '';
    ?>
    <main>
        <h1>Média</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="V1">Valor1</label>
            <input type="number" name="V1" id="V1" required value="<?=$valor1?>">
            <label for="P1">Peso1</label>
            <input type="number" name="P1" id="P1" min="min" required value="<?=$peso1?>">
            <label for="V2">Valor2</label>
            <input type="number" name="V2" id="V2" required value="<?=$valor2?>">
            <label for="P2">Peso2</label>
            <input type="number" name="P2" id="P2" min="1" required value="<?=$peso2?>">
            <input type="submit" value="Calcular Média">
        </form>
    </main>
    <section>
        <?php 
        $ma=($valor1*$valor2)/2;
       
        ?>
        <h2>Calculo das Médias</h2>
        <p>Analisando os valores {<?=$valor1?>} e {<?=$valor2?>}:</p>
        <ul>
            <li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a <?=number_format ($ma, 2 , "," , ".")?>.</li>
            <li>A <strong>Média Aritmética Ponderada</strong> com pesos {<?=$peso1?>} e {<?$peso2?>} é igual a {<?=$mp?>}.</li>
            
        </ul>  
    </section>
    
</body>
</html>