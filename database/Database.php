<?php

class Database
{
  private $host = 'localhost:3306';
  private $database = 'facil_tecnologia';
  private $user = 'phpmyadmin';
  private $password = '123456';
  private $pdo;

  public function __construct()
  {
    try {
      $this->pdo = new PDO("mysql:host={$this->host};dbname={$this->database}", $this->user, $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      throw new Exception('Erro ao conectar ao banco de dados: ' . $e->getMessage());
    }
  }

  public function getConnection(): PDO
  {
    return $this->pdo;
  }
}