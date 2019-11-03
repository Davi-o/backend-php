<?
include_once 'Conta.class.php';
/**
 * @author Davi Alves de Lima
 * @since 03/11/2019
 */
class CaixaEletronico{

/** Cria uma nova instancia do objeto conta
 * @param int tipo define o tipo de conta que o objeto vai ser
 */
 public function criarNovaConta($tipo){
  return new Conta($tipo);
 }

/**
 * @param Object conta recebe o objeto conta
 * @param Float valor recebe o valor a ser depositado na conta
 */
 public function depositar($conta, $valor){
  $conta->saldo += $valor;
  return $conta; 
 }

/**
 * @param Object conta recebe o objeto conta
 * @param Float valor recebe o valor a ser sacado da conta
 */
 public function sacar($conta, $valor){
  if($conta->saldo >= $valor && $valor < $conta->limite){
   $conta->saldo -= ($valor + $conta->taxa);
  } else {
   echo "Saldo insuficiente ou limite de saque excedido";
  }
  return $conta;
 }

 /**
 * @param Object conta recebe o objeto conta que vai efetuar a transferencia
 * @param Object contaDestino recebe o objeto conta que vai receber a transferencia
 * @param Float valor recebe o valor a ser transferido
 */
 public function transferir($conta,$contaDestino, $valor){
  if($conta->saldo >= $valor){
   $conta->saldo -= $valor;
   self::depositar($contaDestino, $valor);
  }else {
   throw new Exception("A conta não possui saldo suficiente para efetuar a transferencia", 1);
  }
 }
}