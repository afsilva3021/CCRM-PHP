<?php

namespace App\Controllers;

use App\Models\User;

class DashboardController
{
  public static function dash()
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
    require __DIR__ . '/../Views/dashboard.php';
  }
}
