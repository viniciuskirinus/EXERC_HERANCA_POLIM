<?php
// NOMES: Caroline e Vinicius K

class Veiculo{
	public $modelo;
	public $velocidade;
	public $NPassageiros;
	public $combustivel;

	public function getModelo(){
      return $this->modelo;
    }
    public function setModelo($modelo){
      $this ->modelo = $modelo;
    }
    public function getVelocidade(){
      return $this->velocidade;
    }
    public function setVelocidade($velocidade){
      $this ->velocidade = $velocidade;
    }
    public function getNPassageiros(){
      return $this->NPassageiros;
    }
    public function setNPassageiros($NPassageiros){
      $this ->NPassageiros = $NPassageiros;
    }
    public function getCombustivel(){
      return $this->combustivel;
    }
    public function setCombustivel($combustivel){
      $this ->combustivel = $combustivel;
    }
}

class Carro extends Veiculo{
	public $portas;
	public $ano;

	public function getPortas(){
      return $this->portas;
    }
    public function setPortas($portas){
      $this ->portas = $portas;
    }
    public function getAno(){
      return $this->ano;
    }
    public function setAno($ano){
      $this ->ano = $ano;
    }
}

class Aviao extends Veiculo{
	public $uso;
	public $tipo;

	public function getUso(){
      return $this->uso;
    }
    public function setUso($uso){
      $this ->uso = $uso;
    }
    public function getTipo(){
      return $this->tipo;
    }
    public function setTipo($tipo){
      $this ->tipo = $tipo;
    }
}

$v1 = new Carro;
$v2 = new Carro;
$v3 = new Aviao;
$v4 = new Aviao;

$v1 -> setModelo("Jeep");
$v1 -> setVelocidade("190 Km/h");
$v1 -> setNPassageiros(5);
$v1 -> setCombustivel("320 L");
$v1 -> setPortas(5);
$v1 -> setAno(1970);

$v2 -> setModelo("Gordino");
$v2 -> setVelocidade("115 Km/h");
$v2 -> setNPassageiros(5);
$v2 -> setCombustivel("32 L");
$v2 -> setPortas(4);
$v2 -> setAno(1962);

$v3 -> setModelo("PA-18");
$v3 -> setVelocidade("290 Km/h");
$v3 -> setNPassageiros(1);
$v3 -> setCombustivel("136 L");
$v3 -> setUso("Agrícola");
$v3 -> setTipo("Utilitária leve");

$v4 -> setModelo("Boing");
$v4 -> setVelocidade("833 Km/h");
$v4 -> setNPassageiros(232);
$v4 -> setCombustivel("18.000 L");
$v4 -> setUso("Transporte");
$v4 -> setTipo("Comercial");

print_r($v1);
print_r($v2);
print_r($v3);
print_r($v4);
?>