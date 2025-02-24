<?php

namespace App\Models;

use App\Core\Database;


class User
{

  public function authenticate($email, $password)
  {

    $dbConect = new Database();


    // Usar a conexão estática para preparar a consulta
    $pdo = $dbConect->connect(); // Acessa a conexão com o banco de dados

    // Prevenir injeção SQL com prepared statements
    $stmt = $pdo->prepare("SELECT ID, PASSWORD FROM USUARIOS WHERE EMAIL = ?");
    $stmt->bindParam(1, $email, $pdo::PARAM_STR); // bindParam ao invés de bind_param
    $stmt->execute();
    $result = $stmt->fetch($pdo::FETCH_ASSOC);

    // Verificar se o usuário existe
    if ($result) {
      // Verificar se a senha corresponde ao hash armazenado no banco
      // if (password_verify($password, $result['PASSWORD'])) {
      if ($password === $result['PASSWORD']) {
        return true;
      } else {
        echo "<script>alert('Senha incorreta!')</script>";
      }

      return false;
    } else {
      echo "<script>alert('Usuário não encontrado!')</script>";
      return false;
    }
  }
}
