<?php

namespace App\Controllers;

use App\Models\User;

class AuthController
{
  // Exibe o formulário de login
  public function showLoginForm()
  {
    include __DIR__ . '/../Views/login.php';
  }

  // Processa o login
  public function login()
  {
    // Verifica se os dados foram enviados via POST
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Cria uma instância do modelo de usuário
      $user = new User($username, $password);

      // Verifica as credenciais
      if ($user->validate()) {
        // Login bem-sucedido
        echo "Login realizado com sucesso!";
      } else {
        // Login falhou
        echo "Credenciais inválidas!";
      }
    }
  }
}
