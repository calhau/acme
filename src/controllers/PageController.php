<?php
namespace Acme\Controllers;

use duncan3dc\Laravel\BladeInstance;

class PageController extends BaseController
{

    public function getShowHomePage()
    {
      //comando abaixo utilazado para incluir uma pagina na chamada
      //  include(__DIR__ . '/../../views/home.php');

      //comando abaixo utilizado com TWIG Template para chamar a pagina
      //echo $this->twig->render('home.html');


      //Como passar uma variavel para a view
      //$_SESSION['teste'] = "<strong>Bruno Leal Aguiar Calhau</strong>";

      //Exemplo de chamada do blade, lembrando que para cada view, deve existir um arquivo .blade.php no diretorio VIEWs. No exemplo abaixo, passamos uma variavel teste
      //echo $this->blade->render("home", ['teste' => "oi Bruno"]);

      echo $this->blade->render("home");
    }

}
