<?php
//NOMES: Caroline e Vinicius K
class Imovel{
	public $endereco;
	public $preco;

	public function getEndereco(){
      return $this->endereco;
    }
    public function setEndereco($endereco){
      $this ->endereco = $endereco;
    }
    public function getPreco(){
      return $this->preco;
    }
    public function setPreco($preco){
      $this ->preco = $preco;
    }
}

class Novo extends Imovel{
	public function setAumento(){
       $this->preco = $this->preco + (($this->preco*25)/100);
	}
	public function getAumento(){
       echo "este imovel vai ter um aumento de 25%<br>";
	}
}

class Velho extends Imovel{
	public function setDesconto(){
       $this->preco = $this->preco - (($this->preco*15)/100);
	}
	public function getDesconto(){
       echo "este imovel vai ter um desconto de 15%<br>";
	}
}

$i1 = new Novo;
$i1 -> setEndereco("AV. Brasil, nº 8000");
$i1 -> setPreco(50000);
$i1 -> getAumento();
echo "1º imovel:(Novo)<br>";
echo "endereço: {$i1->endereco}<br>";
echo "preço: {$i1->preco}<br>";
$i1 -> setAumento();
echo "Preço com o adicional: {$i1->preco}<br>";

$i2 = new Velho;
$i2 -> setEndereco("AV. Paulista, nº 4000");
$i2 -> setPreco(100000);
$i2 -> getDesconto();
echo "2º imovel:(Velho)<br>";
echo "endereço: {$i2->endereco}<br>";
echo "preço: {$i2->preco}<br>";
$i2 -> setDesconto();
echo "Preço com o adicional: {$i2->preco}<br>";
?>