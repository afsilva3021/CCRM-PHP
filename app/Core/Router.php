<?php

namespace App\Core;

use App\Controllers\AuthController;
use App\Controllers\DashboardController;
use App\Models\User;


class Router
{

  private $userModel;

  public function __construct()
  {
    // Instanciar o modelo de usuário
    $this->userModel = new User();
  }

  public function route()
  {
    // Obter o caminho da URL atual
    $uri = $_SERVER['REQUEST_URI'];

    // Instanciar os controladores necessários
    $authController = new AuthController($this->userModel);

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
      DashboardController::dash();
    }
    // Rota não encontrada
    else {
      echo "Página não encontrada!";
    }
  }
}
