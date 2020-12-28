<?php

namespace App\Controllers;

use App\Models\Todo;

class TodosController extends Controller {
  public function __construct() {
    parent::__construct();
  }

  public function index(): array {
    $todos = $this->connection
      ->query('SELECT * from todos')
      ->fetchAll(\PDO::FETCH_ASSOC);
    return [200, $todos];
  }
}