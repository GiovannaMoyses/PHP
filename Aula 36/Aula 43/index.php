<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $tot_segundos = $_REQUEST['seg'] ?? 0;
    ?>
<main>
        <h1>Calculadora de tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="seg">Qual é o total de segundos?</label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$tot_segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <?php 
    $sobra = $tot_segundos;

    $semana = (int) ($sobra / 604_800);
    $sobra = $sobra % 604_800;

    $dia = (int) ($sobra / 86_400);
    $sobra = $sobra % 86_400;

    $hora = (int) ($sobra / 3_600);
    $sobra = $sobra % 3_600;

    $minutos = (int) ($sobra / 60);
    $sobra = $sobra % 60;

    $segundos = $sobra;
    ?>
    <section>
        <h1>Totalizando tudo</h1>
        <p>Analisando o valor que você digitou <strong><?=number_format($tot_segundos,0, ",",".")?> segundos </strong> equivalem a um total de: </p>
        <ul>
           <li> <?=$semana?> semanas</li>
           <li><?=$dia?> dias</li>
           <li><?=$hora?> horas</li>
           <li><?=$minutos?> minutos</li>
           <li><?=$segundos?> segundos</li>
        </ul>
    </section>
    </body>
</html>