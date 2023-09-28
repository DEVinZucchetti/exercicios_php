<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    $text = file_get_contents('database.txt');
    $data =  json_decode($text);

    // var_dump($data[0]);
    echo json_encode(['products' => $data]);
} else if ($method === "POST") {
    $body = file_get_contents("php://input");
    $data = json_decode($body);

    
    echo json_encode(['message' => 'Recebi um post']);
}
