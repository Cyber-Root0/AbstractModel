<?php

require __DIR__.'/../../vendor/autoload.php';
require __DIR__.'/../../app/config/config.php';


//simples renderização de dados da tabela

$ClientModel = new BrunoAlves\abstractmodel\models\cliente\ClienteModel();

$cliente = new BrunoAlves\abstractmodel\Entity\cliente\Cliente();


$cliente->nome = "Gabriel";
$cliente->valor = 451;

$banco = new BrunoAlves\abstractmodel\db\DB();
$clientes = $banco->execute("SELECT * FROM teste");
var_dump($clientes->fetchAll());

//$ClientModel->create($cliente);
//var_dump( $ClientModel->find($cliente)  );


//var_dump($ClientModel->getAll());