<?php
require_once '../vendor/autoload.php';

use App\Routes;

header('Content-Type: Application/json');

$responseData = Routes::handle();
http_response_code($responseData[0]);
echo json_encode($responseData[1]);
