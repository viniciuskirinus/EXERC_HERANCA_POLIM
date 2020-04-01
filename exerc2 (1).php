<?php
//NOMES: Caroline e Vinicius K
class Animal{
	public $nome;
	public $idade; 
	public $som;
	public $acao;

	public function getNome(){
      return $this->nome;
    }
    public function setNome($nome){
      $this ->nome = $nome;
    }
    public function getIdade(){
      return $this->idade;
    }
    public function setIdade($idade){
      $this ->idade = $idade;
    }
    public function getSom(){
      return $this->som;
    }
    public function setSom($som){
      $this ->som = $som;
    }
    public function getAcao(){
      return $this->acao;
    }
    public function setAcao($acao){
      $this ->acao= $acao;
    }
}

class Cachorro extends Animal{
	
}

class Cavalo extends Animal{
	
}

class Preguica extends Animal{
	
}

$a1 = new Cachorro;
$a2 = new Cavalo;
$a3 = new Preguica;

$a1 -> setNome("");
$a1 -> setIdade();
$a1 -> setSom("");
$a1 -> setAcao("");

$a2 -> setNome("");
$a2 -> setIdade();
$a2 -> setSom("");
$a2 -> setAcao("");

$a3 -> setNome("");
$a3 -> setIdade();
$a3 -> setSom("");
$a3 -> setAcao("");

print_r($a1);
print_r($a2);
print_r($a3);
?>