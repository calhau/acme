<?php
//Arquivo db.php é responsavel por:
//1.Utilizar o Illuminate
//2.Instanciar um objeto de Capsula que ira receber os valores de conexao com o DB
//3.Passar os valores de conexao pelo metodo addConnection para o Objeto Instanciado
//4.Set o objeto Instanciado, com os valores populados pelo metodo addConnection, como Global
//5.Boot no Eloquent!
use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
  'driver' => getenv('DB_DRIVER'),
  'host' => getenv('DB_HOST'),
  'database' => getenv('DB_DATABASE'),
  'username' =>  getenv('DB_USER'),
  'password' =>getenv('DB_PASS'),
  'charset' => 'utf8',
  'collation' => 'utf8_unicode_ci',
  'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();
