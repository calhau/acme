<?php
//Arquivo Start.php é responsável por:
//1. inicializar uma sessao
//2. Load no arquivo de autoload que vai carregar as bibliotecas necessarias para nossa aplicaçao
//3. Instanciar o objeto para tratar errors.
//4. Instaciar nosso objeto de Routes
include(__DIR__ . '/../bootstrap/start.php');

//Técnica ultilizada para ler o arquivo .env que por ser um arquivo OCULTO para o Linux, não é possivel de ser acessado
//Nesse arquivo temos nossas variaveis, que serao utilizadas no constantes.(Ex:DB_USER, DB_TABLE)
Dotenv::load(__DIR__ . '/../');

//Arquivo db.php é responsavel por:
//1.Utilizar o Illuminate
//2.Instanciar um objeto de Capsula que ira receber os valores de conexao com o DB
//3.Passar os valores de conexao pelo metodo addConnection para o Objeto Instanciado
//4.Set o objeto Instanciado, com os valores populados pelo metodo addConnection, como Global
//5.Boot no Eloquent!
include(__DIR__ . '/../bootstrap/db.php');

//Arquivo routes.php é responsavel por:
//1 . Configurar as rotas que serao acessadas Controllers//Metodos
include(__DIR__ . '/../routes.php');

$match = $router->match();

list($controller, $method) = explode("@", $match['target']);

if(is_callable(array($controller,$method))) {
  $object = new $controller();
  call_user_func_array(array($object,$method), array($match['params']));
} else {
  echo "Cannot find $controller -> $method";
  exit();
}
