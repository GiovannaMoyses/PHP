<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $saque = $_REQUEST['saque']?? 0;
    ?>
<main>
        <h1>Caixa eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual é o valor do saque? (R$) <sup>*</sup></label>
            <input type="number" name="saque" id="saque" step="5" required value="<?=$saque?>">
            <p style = "font-size:  0.7em"><sup>*</sup>Notas disponíveis: R$100, R$50, R$10 e R$5</p>
            <input type="submit" value="sacar">
        </form>
    </main>
    <?php 
    $resto = $saque;

    $tot100 = floor ($resto/ 100);
    $resto %= 100;

    $tot50 = floor ($resto/ 50);
    $resto %= 50;

    $tot10 = floor ($resto/ 10);
    $resto %= 10;

    $tot5 = floor ($resto/ 5);
    $resto %= 5;
    ?>
    <section>

        <h1>Saque de R$ <?=number_format($saque , 2, ",", ".")?> realizado</h1>

        <p>O caixa eletrônico vai te entregar as seguintes notas
         </p>
        <ul>
           <li> <img src="./img/100_front.jpg" alt="Nota de 100" class="nota"> x <?=$tot100?> </li>
           <li>  <img src="./img/50_front.jpg" alt="Nota de 50" class="nota"> x <?=$tot50?> </li>
           <li>  <img src="./img/10_front.jpg" alt="Nota de 10" class="nota"> x <?=$tot10?> </li>
           <li>   <img src="./img/5_front.jpg" alt="Nota de 5" class="nota"> x <?=$tot5?> </li>
        </ul>
    </section>
    </body>
</html>