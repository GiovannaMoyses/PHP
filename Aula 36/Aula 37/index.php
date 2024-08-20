<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $dividendo = $_GET['div1'] ?? 0;
    $divisor = $_GET['div2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia da divisão</h1>
        <form action="" method="get">
            <label for="div1">Dividendo</label>
            <input type="number" name="div1" id="div1" value="<?=$dividendo?>">
            <label for="div2">Divisor</label>
            <input type="number" name="div2" id="div2" value="<?=$divisor?>">
            <input type="submit" value="Analisar">
        </form>

    </main>
    <section>
        <h2>Estrutura da divisão</h2>
        <?php
        $quociente = intdiv($dividendo,$divisor);
        $resto = $dividendo % $divisor;
        ?>
        <table class="divisao">
            <tr>
                <td><?=$dividendo?></td>
                <td><?=$divisor?></td>
            </tr>
            <tr>
                <td><?=$resto?></td>
                <td><?=$quociente?></td>
            </tr>
        </table>
    </section>
</body>
</html>