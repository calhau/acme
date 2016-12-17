<?php


$router->map('GET', '/' , 'Acme\Controllers\PageController@getShowHomePage' , 'home');

$router->map('GET', '/register' , 'Acme\Controllers\RegisterController@getShowRegisterPage' , 'register');
$router->map('POST', '/register' , 'Acme\Controllers\RegisterController@postShowRegisterPage' , 'register_post');

//$router->map('GET', '/login' , 'Acme\Controllers\RegisterController@getShowLoginPage' , 'login');

$router->map('GET', '/testdb' , 'Acme\Controllers\RegisterController@getTestDB' , 'testdb');

$router->map('GET', '/testebruno' , 'Acme\Controllers\RegisterController@getTesteBruno' , 'testbruno');


$router->map('GET', '/projeto' , 'Acme\Controllers\RegisterController@getShowProjetoPage' , 'projeto');
$router->map('POST', '/projeto' , 'Acme\Controllers\RegisterController@postShowProjetoPage' , 'projeto_post');

//Adicionado para unir os projetos.
$router->map('GET', '/login2' , 'Acme\Controllers\LoginController@getShowLoginPage' , 'login');
