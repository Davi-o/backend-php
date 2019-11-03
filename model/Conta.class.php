<?

/**
 * @author Davi Alves de Lima
 * @since 03/11/2019
 */
class Conta{
 private $saldo;
 private $taxa;
 private $limite;
 
 const SAQUE_LIMITE_CORRENTE =  600.00;
 const TAXA_OPERACAO_CORRENTE =  2.5;

 const SAQUE_LIMITE_POUPANCA= 1000.00;
 const TAXA_OPERACAO_POUPANCA =  0.8;

 /**
  * @param Integer tipo recebe o tipo da conta que será criada
  */
 public function __construct($tipo){
  if($tipo == 1){
   $this->taxa = self::TAXA_OPERACAO_CORRENTE;
   $this->limite = self::SAQUE_LIMITE_CORRENTE;
  }
   else if($tipo == 2){
   $this->taxa = self::TAXA_OPERACAO_POUPANCA;
   $this->limite = self::SAQUE_LIMITE_POUPANCA;
  } else {
   echo "Tipo de conta inváildo";
   die();
  }
 }

 public function __destruct(){}

 public function __get($a){
  return $this->$a;
 }

 public function __set($a,$v){
  return $this->$a=$v;
 }
}