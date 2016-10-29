<?php
namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;

class RegisterController extends BaseController
{

    public function getShowHomePage()
    {
      //  include(__DIR__ . '/../../views/home.php');
        echo $this->blade->render("home");
    }

    public function getShowRegisterPage()
    {
        echo $this->blade->render("register");
    }

    public function getShowLoginPage()
    {
        echo $this->blade->render("login");
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
        $user->save();


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
