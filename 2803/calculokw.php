<html>
    <head>
        <title>Calculadora Kw</title>
</head>
<body>
<?php 
$salmin = $_POST['SalMinimo'];
$qtdkw = $_POST['QtdKw'];
$vlrkw = $salmin / 10;

$totalConta = $vlrkw * $qtdkw;

echo "o valor do KW é:" . $vlrkw . "<br>";
echo "o total da conta é:" . $totalConta . "<br>";
?>
</body>
</html>