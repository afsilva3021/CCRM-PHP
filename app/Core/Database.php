<?php

namespace App\Core;

use PDO;
use PDOException;
use Dotenv\Dotenv;

class Database
{
  private static $pdo;

  public static function connect()
  {
    if (!self::$pdo) {
      $dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
      $dotenv->load();

      $host = $_ENV['DB_HOST'];
      $dbname = $_ENV['DB_NAME'];
      $user = $_ENV['DB_USER'];
      $pass = $_ENV['DB_PASS'];
      $port = $_ENV['DB_PORT'];

      try {
        self::$pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $user, $pass, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
      } catch (PDOException $e) {
        die("Erro na conexão: " . $e->getMessage());
      }
    }
    return self::$pdo;
  }
}
