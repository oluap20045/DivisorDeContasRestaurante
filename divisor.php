<?php
$cliente1 = array((filter_input(INPUT_GET, 'nome1')), (filter_input(INPUT_GET, 'rodiziosimples1')), (filter_input(INPUT_GET, 'rodizioexecutivo1')),(filter_input(INPUT_GET, 'temaki1')), (filter_input(INPUT_GET, 'refri1')), (filter_input(INPUT_GET, 'peixe1')), (filter_input(INPUT_GET, 'pizza1')),(filter_input(INPUT_GET, 'suco1')),(filter_input(INPUT_GET, 'dez1')));
$cliente2 = array((filter_input(INPUT_GET, 'nome2')), (filter_input(INPUT_GET, 'rodiziosimples2')), (filter_input(INPUT_GET, 'rodizioexecutivo2')),(filter_input(INPUT_GET, 'temaki2')), (filter_input(INPUT_GET, 'refri2')), (filter_input(INPUT_GET, 'peixe2')), (filter_input(INPUT_GET, 'pizza2')),(filter_input(INPUT_GET, 'suco2')),(filter_input(INPUT_GET, 'dez2')));
$cliente3 = array((filter_input(INPUT_GET, 'nome3')), (filter_input(INPUT_GET, 'rodiziosimples3')), (filter_input(INPUT_GET, 'rodizioexecutivo3')),(filter_input(INPUT_GET, 'temaki3')), (filter_input(INPUT_GET, 'refri3')), (filter_input(INPUT_GET, 'peixe3')), (filter_input(INPUT_GET, 'pizza3')),(filter_input(INPUT_GET, 'suco3')),(filter_input(INPUT_GET, 'dez3')));
$cliente4 = array((filter_input(INPUT_GET, 'nome4')), (filter_input(INPUT_GET, 'rodiziosimples4')), (filter_input(INPUT_GET, 'rodizioexecutivo4')),(filter_input(INPUT_GET, 'temaki4')), (filter_input(INPUT_GET, 'refri4')), (filter_input(INPUT_GET, 'peixe4')), (filter_input(INPUT_GET, 'pizza4')),(filter_input(INPUT_GET, 'suco4')),(filter_input(INPUT_GET, 'dez4')));
$cliente5 = array((filter_input(INPUT_GET, 'nome5')), (filter_input(INPUT_GET, 'rodiziosimples5')), (filter_input(INPUT_GET, 'rodizioexecutivo5')),(filter_input(INPUT_GET, 'temaki5')), (filter_input(INPUT_GET, 'refri5')), (filter_input(INPUT_GET, 'peixe5')), (filter_input(INPUT_GET, 'pizza5')),(filter_input(INPUT_GET, 'suco5')),(filter_input(INPUT_GET, 'dez5')));


if ($cliente1[0]) {
    $cliente1[1] = ($cliente1[1]?$cliente1[1] * 70:0);
    $cliente1[2] = ($cliente1[2]?$cliente1[2] * 85:0);
    $cliente1[3] = ($cliente1[3]?$cliente1[3] * 20:0);
    $cliente1[4] = ($cliente1[4]?$cliente1[4] * 6:0);
    $cliente1[5] = ($cliente1[5]?$cliente1[5] * 50:0);
    $cliente1[6] = ($cliente1[6]?$cliente1[6] * 42:0);
    $cliente1[7] = ($cliente1[7]?$cliente1[7] * 7:0);
    $conta1 = $cliente1[1] + $cliente1[2] + $cliente1[3] + $cliente1[4] + $cliente1[5] + $cliente1[6] + $cliente1[7];

    echo "<hr><br>Conta de $cliente1[0]: <br>";
    if ($cliente1[1] != 0) {
        echo "Rodízio Simples = R$". number_format($cliente1[1], 2, ','). "<br>";
    }
    if ($cliente1[2] != 0) {
        echo "Rodízio Executivo = R$". number_format($cliente1[2], 2, ','). "<br>";
    }
    if ($cliente1[3] != 0) {
        echo "Temaki = R$". number_format($cliente1[3], 2, ','). "<br>";
    }
    if ($cliente1[4] != 0) {
        echo "Refrigerante = R$". number_format($cliente1[4], 2, ','). "<br>";
    }
    if ($cliente1[5] != 0) {
        echo "Porção de Peixe = R$". number_format($cliente1[5], 2, ','). "<br>";
    }
    if ($cliente1[6] != 0) {
        echo "Pizza = R$". number_format($cliente1[6], 2, ','). "<br>";
    }
    if ($cliente1[7] != 0) {
        echo "Suco = R$". number_format($cliente1[7], 2, ','). "<br>";
    }
    if ($cliente1[8] == 'true') {
        echo "10% = SIM <br>";
        $conta1 = $conta1 * 1.1;
        echo "Total = R$". number_format($conta1, 2, ','). "<br><hr>";
    }else{
    echo "Total = R$". number_format($conta1, 2, ','). "<br><hr>";
    }
}
if ($cliente2[0]) {
    $cliente2[1] = ($cliente2[1]?$cliente2[1] * 70:0);
    $cliente2[2] = ($cliente2[2]?$cliente2[2] * 85:0);
    $cliente2[3] = ($cliente2[3]?$cliente2[3] * 20:0);
    $cliente2[4] = ($cliente2[4]?$cliente2[4] * 6:0);
    $cliente2[5] = ($cliente2[5]?$cliente2[5] * 50:0);
    $cliente2[6] = ($cliente2[6]?$cliente2[6] * 42:0);
    $cliente2[7] = ($cliente2[7]?$cliente2[7] * 7:0);
    $conta2 = $cliente2[1] + $cliente2[2] + $cliente2[3] + $cliente2[4] + $cliente2[5] + $cliente2[6] + $cliente2[7];
    echo "<hr><br>Conta de $cliente2[0]: <br>";
    if ($cliente2[1] != 0) {
        echo "Rodízio Simples = R$". number_format($cliente2[1], 2, ','). "<br>";
    }
    if ($cliente2[2] != 0) {
        echo "Rodízio Executivo = R$". number_format($cliente2[2], 2, ','). "<br>";
    }
    if ($cliente2[3] != 0) {
        echo "Temaki = R$". number_format($cliente2[3], 2, ','). "<br>";
    }
    if ($cliente2[4] != 0) {
        echo "Refrigerante = R$". number_format($cliente2[4], 2, ','). "<br>";
    }
    if ($cliente2[5] != 0) {
        echo "Porção de Peixe = R$". number_format($cliente2[5], 2, ','). "<br>";
    }
    if ($cliente2[6] != 0) {
        echo "Pizza = R$". number_format($cliente2[6], 2, ','). "<br>";
    }
    if ($cliente2[7] != 0) {
        echo "Suco = R$". number_format($cliente2[7], 2, ','). "<br>";
    }
    if ($cliente2[8] == 'true') {
        echo "10% = SIM <br>";
        $conta2 = $conta2 * 1.1;
        echo "Total = R$". number_format($conta2, 2, ','). "<br><hr>";
    }else{
    echo "Total = R$". number_format($conta2, 2, ','). "<br><hr>";
    }
}
if ($cliente3[0]) {
    $cliente3[1] = ($cliente3[1]?$cliente3[1] * 70:0);
    $cliente3[2] = ($cliente3[2]?$cliente3[2] * 85:0);
    $cliente3[3] = ($cliente3[3]?$cliente3[3] * 20:0);
    $cliente3[4] = ($cliente3[4]?$cliente3[4] * 6:0);
    $cliente3[5] = ($cliente3[5]?$cliente3[5] * 50:0);
    $cliente3[6] = ($cliente3[6]?$cliente3[6] * 42:0);
    $cliente3[7] = ($cliente3[7]?$cliente3[7] * 7:0);
    $conta3 = $cliente3[1] + $cliente3[2] + $cliente3[3] + $cliente3[4] + $cliente3[5] + $cliente3[6] + $cliente3[7];
    echo "<hr><br>Conta de $cliente3[0]: <br>";
    if ($cliente3[1] != 0) {
        echo "Rodízio Simples = R$". number_format($cliente3[1], 2, ','). "<br>";
    }
    if ($cliente3[2] != 0) {
        echo "Rodízio Executivo = R$". number_format($cliente3[2], 2, ','). "<br>";
    }
    if ($cliente3[3] != 0) {
        echo "Temaki = R$". number_format($cliente3[3], 2, ','). "<br>";
    }
    if ($cliente3[4] != 0) {
        echo "Refrigerante = R$". number_format($cliente3[4], 2, ','). "<br>";
    }
    if ($cliente3[5] != 0) {
        echo "Porção de Peixe = R$". number_format($cliente3[5], 2, ','). "<br>";
    }
    if ($cliente3[6] != 0) {
        echo "Pizza = R$". number_format($cliente3[6], 2, ','). "<br>";
    }
    if ($cliente3[7] != 0) {
        echo "Suco = R$". number_format($cliente3[7], 2, ','). "<br>";
    }
    if ($cliente3[8] == 'true') {
        echo "10% = SIM <br>";
        $conta3 = $conta3 * 1.1;
        echo "Total = R$". number_format($conta3, 2, ','). "<br><hr>";
    }else{
    echo "Total = R$". number_format($conta3, 2, ','). "<br><hr>";
    }
}
if ($cliente4[0]) {
    $cliente4[1] = ($cliente4[1]?$cliente4[1] * 70:0);
    $cliente4[2] = ($cliente4[2]?$cliente4[2] * 85:0);
    $cliente4[3] = ($cliente4[3]?$cliente4[3] * 20:0);
    $cliente4[4] = ($cliente4[4]?$cliente4[4] * 6:0);
    $cliente4[5] = ($cliente4[5]?$cliente4[5] * 50:0);
    $cliente4[6] = ($cliente4[6]?$cliente4[6] * 42:0);
    $cliente4[7] = ($cliente4[7]?$cliente4[7] * 7:0);
    $conta4 = $cliente4[1] + $cliente4[2] + $cliente4[3] + $cliente4[4] + $cliente4[5] + $cliente4[6] + $cliente4[7];
    echo "<hr><br>Conta de $cliente4[0]: <br>";
    if ($cliente4[1] != 0) {
        echo "Rodízio Simples = R$". number_format($cliente4[1], 2, ','). "<br>";
    }
    if ($cliente4[2] != 0) {
        echo "Rodízio Executivo = R$". number_format($cliente4[2], 2, ','). "<br>";
    }
    if ($cliente4[3] != 0) {
        echo "Temaki = R$". number_format($cliente4[3], 2, ','). "<br>";
    }
    if ($cliente4[4] != 0) {
        echo "Refrigerante = R$". number_format($cliente4[4], 2, ','). "<br>";
    }
    if ($cliente4[5] != 0) {
        echo "Porção de Peixe = R$". number_format($cliente4[5], 2, ','). "<br>";
    }
    if ($cliente4[6] != 0) {
        echo "Pizza = R$". number_format($cliente4[6], 2, ','). "<br>";
    }
    if ($cliente4[7] != 0) {
        echo "Suco = R$". number_format($cliente4[7], 2, ','). "<br>";
    }
    if ($cliente4[8] == 'true') {
        echo "10% = SIM <br>";
        $conta4 = $conta4 * 1.1;
        echo "Total = R$". number_format($conta4, 2, ','). "<br><hr>";
    }else{
    echo "Total = R$". number_format($conta4, 2, ','). "<br><hr>";
    }
}
if ($cliente5[0]) {
    $cliente5[1] = ($cliente5[1]?$cliente5[1] * 70:0);
    $cliente5[2] = ($cliente5[2]?$cliente5[2] * 85:0);
    $cliente5[3] = ($cliente5[3]?$cliente5[3] * 20:0);
    $cliente5[4] = ($cliente5[4]?$cliente5[4] * 6:0);
    $cliente5[5] = ($cliente5[5]?$cliente5[5] * 50:0);
    $cliente5[6] = ($cliente5[6]?$cliente5[6] * 42:0);
    $cliente5[7] = ($cliente5[7]?$cliente5[7] * 7:0);
    $conta5 = $cliente5[1] + $cliente5[2] + $cliente5[3] + $cliente5[4] + $cliente5[5] + $cliente5[6] + $cliente5[7];
    echo "<hr><br>Conta de $cliente5[0]: <br>";
    if ($cliente5[1] != 0) {
        echo "Rodízio Simples = R$". number_format($cliente5[1], 2, ','). "<br>";
    }
    if ($cliente5[2] != 0) {
        echo "Rodízio Executivo = R$". number_format($cliente5[2], 2, ','). "<br>";
    }
    if ($cliente5[3] != 0) {
        echo "Temaki = R$". number_format($cliente5[3], 2, ','). "<br>";
    }
    if ($cliente5[4] != 0) {
        echo "Refrigerante = R$". number_format($cliente5[4], 2, ','). "<br>";
    }
    if ($cliente5[5] != 0) {
        echo "Porção de Peixe = R$". number_format($cliente5[5], 2, ','). "<br>";
    }
    if ($cliente5[6] != 0) {
        echo "Pizza = R$". number_format($cliente5[6], 2, ','). "<br>";
    }
    if ($cliente5[7] != 0) {
        echo "Suco = R$". number_format($cliente5[7], 2, ','). "<br>";
    }
    if ($cliente5[8] == 'true') {
        echo "10% = SIM <br>";
        $conta5 = $conta5 * 1.1;
        echo "Total = R$". number_format($conta5, 2, ','). "<br><hr>";
    }else{
    echo "Total = R$". number_format($conta5, 2, ','). "<br><hr>";
    }
}
echo "Total da conta = R$". number_format(($conta1+$conta2+$conta3+$conta4+$conta5), 2, ',');

echo "<form action='index.php'><input type='submit' value='Voltar'></form>";


