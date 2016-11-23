<?php
namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Models\Project;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
{

    public function getShowHomePage()
    {
      //  include(__DIR__ . '/../../views/home.php');
        echo $this->blade->render("home");
    }


//Criando o CRUD para TUKINHA
//1.Passo Criar uma funcao que ira abrir a pagina com o FORM de Cadastro
//2.Criar a pagina de form projeto.blade.php
//2.1 Definir Action no Form, bem como os campos do formulario
//3. Criar Metodo Post para receber e armazenar os dados
//3.1 Para o Metodo Post criado, deverá existir um MODEL de referencia ao OBJETO que sera gravado no BD (Ex: User, Project) pois o mesmo Instancia um objeto desse tipo no final (Ver PostShowRegisterPage, observar que é criado um Objeto do Tipo Project, que nada mais é que uma tabela do BD mapeada em models.)
//4 Criar a rota para o metodo post e testar.
    public function getShowProjetoPage()
    {

      echo $this->blade->render("projeto");
      //Necessário criar uma pagina projeto.blade.php no diretorio VIEW (Conforme setado aonde?) para renderizar.
    }

    public function postShowProjetoPage()
    {
        // validate data
    $errors = [];
        $validation_data = [
          'project_name' => 'min:3',
          'responsable_name' => 'min:3',
          'area_name' => 'min:3'
        ];
        $validator = new Validator();

        $errors = $validator->isValid($validation_data);



        if(sizeof($errors)> 0)
        {
          $_SESSION['msg'] = $errors;
          echo $this->blade->render("register");
          unset($_SESSION['msg']);
          exit();
        }
      //  print_r($errors);
        //exit;



        $projeto = new Project;
        $projeto->project_name = $_REQUEST['project_name'];
        $projeto->responsable_name = $_REQUEST['responsable_name'];
        $projeto->area_name = $_REQUEST['area_name'];
        $projeto->save();
    }


    public function getShowRegisterPage()
    {
        echo $this->blade->render("register");
    }


    public function postShowRegisterPage()
    {

        // validate data
    $errors = [];
        $validation_data = [
          'first_name' => 'min:3',
          'last_name' => 'min:3',
          'email' => 'email',
          'verify_email' => 'email',
          'password' => 'min:3',
          'email' => 'equalTo:verify_email',
          'password' => 'equalTo:verify_password',
        ];
        $validator = new Validator();

        $errors = $validator->isValid($validation_data);



        if(sizeof($errors)> 0)
        {
          $_SESSION['msg'] = $errors;
          echo $this->blade->render("register");
          unset($_SESSION['msg']);
          exit();
        }
      //  print_r($errors);
        //exit;

        $user = new User;
        $user->first_name = $_REQUEST['first_name'];
        $user->last_name = $_REQUEST['last_name'];
        $user->email = $_REQUEST['email'];
        $user->password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

        //$user->save();


    }

    public function getShowLoginPage()
    {
        echo $this->blade->render("login");
    }

    public function getTestDB()
    {
        $user = User::find(1);
        echo "Teste: ". $user->last_name;
    }
    public function getTesteBruno()
    {
        // $number = 'bruno';
        // $a = Validator::stringType()->validate($number);
        // var_dump($a);
        echo $this->twig->render('funciona.html');
    }
}
