<?php

namespace App\Controllers;

use App\Models\User;
use Twig\Environment;

class AuthController
{
  private $user;
  private $twig;

  public function __construct(User $user, Environment $twig)
  {
    $this->user = $user;
    $this->twig = $twig;
  }

  public function login()
  {
    // Verificar se o formulário foi enviado
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $email = $_POST['email'] ?? '';
      $password = $_POST['password'] ?? '';

      // Verificar se as credenciais são válidas com o banco de dados
      if ($this->user->authenticate($email, $password)) {

        // inicar a sessão
        session_start();

        //Definir uma variavel de sessão para indicar que o usuario esta logado
        $_SESSION['loggin_in'] = true;
        $_SESSION['user_email'] = $email;

        // Redirecionar para a dashboard
        header("Location: /dashboard");
        exit();

        // Você pode iniciar uma sessão aqui ou redirecionar para outra página
      } else {
        echo "<script>alert('Credencial invalida')</script>";
      }
    }

    // Exibir o formulário de login
     echo $this->twig->render('login.html', [
      'titulo' => "Login",
     ]);
  }
}
