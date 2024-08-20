<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $minimo = 1_412.00;
    $Salario = $_GET['salario'] ??  0;
    ?>
    <main>
        <h1>Informe o seu salário</h1>
        <form action ="<?= $_SERVER['PHP_SELF']?>" method="get">
         <label for="salario">Salário (R$)</label>   
         <input type="number" name="salario" id="salario" value="<?=$Salario?>" step="0.01">
         <p>Considerando o salário minímo de <strong>R$<?=number_format($minimo,2,",",".")?></strong> </p>
        <input type="submit" value="calcular">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
        $total = intdiv($Salario,$minimo);
        $dif = $Salario % $minimo;
        
        echo "<p> Quem recebe um salário de R\$".number_format($Salario, 2, "," ,"."). " ganha <strong>$total salários mínimos </strong> + R\$" . number_format($dif,2,"," ,".").".</p>";
        ?>
    </section>
</body>
</html>