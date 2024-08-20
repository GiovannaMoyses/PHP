<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $numero = $_GET['num'] ?? 1;
    ?>
    <main>
        <h1>Digite um número</h1>
        <form action="<?$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raíz">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
         $raiz = $numero ** (1/2);
         $raizc = $numero ** (1/3);

         echo "<p>Analisando o  <strong>número $numero</strong>, temos: ";
         echo "<ul><li>A raiz quadrada é <strong>" . number_format($raiz, 2,"," , "." ) ."</strong> </li>";
         echo "<li>A sua raiz cúbica é <strong>" . number_format($raizc, 2, "," , "."). "</strong></li></ul>";
        ?>
    </section>
    
</body>
</html>