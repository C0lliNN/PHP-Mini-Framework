<?php

namespace App;

use App\Controllers\TodosController;

class Routes {
  private const ROUTES = [
    '/' => [TodosController::class, 'index'],
    '/todos' => [TodosController::class, 'index']
  ];

  public static function handle(): array {
    $requestUri = $_SERVER['REQUEST_URI'];

    $handler = self::ROUTES[$requestUri];

    if (!isset($handler)) {
      return [404, ['message' => 'The Requested Resource was not found!']];
    }

    $controller = new $handler[0];
    $method = $handler[1];

    $responseData = $controller->$method();
    return $responseData;
  }
}