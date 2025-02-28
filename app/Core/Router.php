<?php

namespace App\Core;

use App\Controllers\AuthController;
use App\Controllers\DashboardController;
use App\Models\User;



class Router
{

  private $userModel;
  private $twig;

  public function __construct()
  {

    $this->userModel = new User();


    $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../Views/');
    $this->twig = new \Twig\Environment($loader, [
      'cache' => __DIR__ . '/../cache',
      'cache' => false,
      'debug' => true
    ]);




    $this->twig->addExtension(new \Twig\Extension\DebugExtension());
  }

  public function route()
  {
    // Obter o caminho da URL atual
    $uri = $_SERVER['REQUEST_URI'];

    // Instanciar os controladores necessários
    $authController = new AuthController($this->userModel, $this->twig);

    $dashboardcontroller = new DashboardController($this->twig);

    // Rota principal (login)
    if ($uri === '/') {
      $authController->login();
    }
    // Rota de login (também pode ser '/login')
    elseif ($uri === '/login') {
      $authController->login();
    }
    // Rota do dashboard (requer autenticação)
    elseif ($uri === '/dashboard') {
      $dashboardcontroller->dash();
    }
    // Rota não encontrada
    else {
      echo "Página não encontrada!";
    }
  }
}
