<?
include_once '../model/CaixaEletronico.php';

$caixa = new CaixaEletronico();
$contaCorrente = $caixa->criarNovaConta(1);
$contaPoupanca = $caixa->criarNovaConta(2);

$caixa->depositar($contaCorrente, 1000);
$caixa->depositar($contaPoupanca, 1000);
$caixa->transferir($contaCorrente, $contaPoupanca,1001);

print_r($contaCorrente);
echo "<br>";
print_r($contaPoupanca);
