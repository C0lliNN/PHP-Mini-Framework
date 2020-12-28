<?php


namespace App\Controllers;

abstract class Controller {
  private const DSN = 'mysql:host=localhost;dbname=miniframework';
  private const USER = 'raphael';
  private const PASS = 'root';

  protected \PDO $connection;
  
  protected function __construct() {
    $this->connection = new \PDO(self::DSN, self::USER, self::PASS);
  }
} 