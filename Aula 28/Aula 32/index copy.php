<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cotacao</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
<h1>Conversor de Moedas </h1>
<?php 

$início = date("m-d-Y", strtotime("-7 days")) ;
$fim = date("m-d-Y") ;

$url='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $início .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);

$cotação = $dados["value"][0]["cotacaoCompra"];


$real = $_REQUEST["din"] ?? 0;

$dólar = $real/$cotação;

$padrão = numfmt_create("pt-br", NumberFormatter::CURRENCY);

echo "<p>Seus ". numfmt_format_currency($padrão,$real,"BRL")."<br>" . "Valem " . numfmt_format_currency($padrão,$dólar,"USD") . "<p>";

?>
<button onclick="javascript:window.location.href='index.html'">&#x1F504; Voltar</button>
    </main>
</body>
</html>