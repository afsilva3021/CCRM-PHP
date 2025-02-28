<?php

namespace App\Controllers;

use Twig\Environment;

class DashboardController
{

  private $twig;

  public function __construct(Environment $twig)
  {
    $this->twig = $twig;
  }


  public function dash()
  {
    // Verifica se o usuário está logado
    session_start();

    // Verifica se a chave 'loggin_in' está setada e se o usuário está autenticado
    if (!isset($_SESSION['loggin_in']) || $_SESSION['loggin_in'] !== true) {
      // Se não estiver logado, redireciona para a página de login
      header("Location: /"); // caminho da página de login
      exit();
    }

    // Exibe o dashboard
    echo $this->twig->render('dashboard.html', [
      'titulo' => "Dashbaord",
      'messagem' => 5,
    ]);
  }
}
