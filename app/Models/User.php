<?php

namespace App\Models;

use mysqli;

class User
{
  private $db;

  public function __construct()
  {
    // Configuração de conexão com o banco de dados
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    $this->db = new mysqli('localhost', 'root', '', 'CCRM');

    if ($this->db->connect_error) {
      die("Conexão falhou: " . $this->db->connect_error);
    }
  }

  public function authenticate($email, $password)
  {
    // Prevenir injeção SQL com prepared statements
    $stmt = $this->db->prepare("SELECT ID, PASSWORD AS password FROM USUARIOS WHERE EMAIL = ?");
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se o usuário existe
    if ($result->num_rows > 0) {
      $user = $result->fetch_assoc();
      // Verificar se a senha corresponde ao hash armazenado no banco
      // if (password_verify($password, $user['password'])) {
      if ($password === $user['password']) {
        return true;
      } else {
        echo "<script>alert('Senha incorreta!')</script>";
      }
    } else {
      echo "<script>alert('Usuário não encontrado!')</script>";
    }

    return false;
  }
}
