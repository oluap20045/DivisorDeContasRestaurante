<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dividor de Contas</title>
</head>

<body>
    Divisor de Contas
    <form action="index.php" method="get">
        <label for="iqtnClientes">Quantos Clientes são: </label><input type="number" name="qtnClientes" id="iqtnClientes" min=0 max=5 >
        <input type="submit" value="Gerar">
    </form>
    <form action="divisor.php" method="get">
        <?php
        $qtnclientes = filter_input(INPUT_GET, 'qtnClientes');
        echo "<input type='hidden' value=$qtnclientes name='qtnclientes'>";
        $a = 1;
        while ($a <= $qtnclientes) {
            echo "<br><hr>Nome: <input type='text' name='nome$a'><br>
        Produtos Consumidos: <br>
        <table>
        <tr><td>Rodízio Simples (R$70,00)</td><td><input type='number' name='rodiziosimples$a' min=0 max=10></td></tr>
        <tr><td>Rodízio Executivo (R$85,00)</td><td><input type='number' name='rodizioexecutivo$a' min=0 max=10></td></tr>
        <tr><td>Temaki (R$20,00)</td><td><input type='number' name='temaki$a' min=0 max=10></td></tr>
        <tr><td>Refrigerante (R$6,00)</td><td><input type='number' name='refri$a' min=0 max=10></td></tr>
        <tr><td>Porção de Peixe (R$50,00)</td><td><input type='number' name='peixe$a' min=0 max=10></td></tr>
        <tr><td>Pizza (R$42,00)</td><td><input type='number' name='pizza$a'min=0 max=10></td></tr>
        <tr><td>Suco (R$ 7,00)</td><td><input type='number' name='suco$a' min=0 max=10></td></tr>
        <tr><td>Optou por 10%</td><td><label for='sim'>Sim</label><input type='radio' name='dez$a' value=true id='sim' checked><label for'nao'>Não</label><input type='radio' name='dez$a' id='nao' value=false></table>
        <br><hr>";
            $a++;
        }
        ?>
        <input type="submit" value="Calcular">
    </form>


</body>

</html>