<?php
//Arquivo Start.php é responsável por:
//1. inicializar uma sessao
//2. Load no arquivo de autoload que vai carregar as bibliotecas necessarias para nossa aplicaçao
//3. Instanciar o objeto para tratar errors.
//4. Instaciar nosso objeto de Routes
session_start();
require( __DIR__ . "/../vendor/autoload.php");
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new AltoRouter();
