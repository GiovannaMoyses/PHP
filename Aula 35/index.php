<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lendo números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 

    $num = $_GET['num'] ?? 0;
    $num1 = $_GET['num1'] ?? 0;

    ?>
   <main>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="v1"> Valor 1</label>
        <input type="number" name="num" id="num" value="<?=$num?>">
        <label for="v2"> Valor 2</label>
        <input type="number" name="num1" id="num1" value="<?=$num1?>">       <input type="submit" value="somar">
    </form>
   </main>
   <section id="resultado">
    <h2>Resultado da soma</h2>
    <?php 
    $soma = $num + $num1;
    print"<p>A soma entre $num e $num1 é: <strong>$soma</strong> ! </p>";
    ?>

   </section>
</body>
</html>