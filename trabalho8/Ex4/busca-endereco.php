<?php

use Endereco as GlobalEndereco;

require "../conexaoMysql.php";
$pdo = mysqlConnect();

class Endereco
{
  public $rua;
  public $bairro;
  public $cidade;

  function __construct($rua, $bairro, $cidade)
  {
    $this->rua = $rua;
    $this->bairro = $bairro; 
    $this->cidade = $cidade;
  }
}

$cep = $_GET['cep'] ?? '';

try{
  $sql = <<<SQL
  SELECT from * endereco WHERE cep=?
  SQL;
  
  $stmt = $pdo->prepare($sql);
  $stmt->execute([$cep]);

}
catch (Exception $e){
  exit('Falha ao buscar os dados: ' . $e->getMessage());
}

while($row = $stmt->fetch()){
  $endereco = new GlobalEndereco($row['rua'],$row['bairro'],$row['cidade']);
}
header('Content-type: application/json');  
echo json_encode($endereco);