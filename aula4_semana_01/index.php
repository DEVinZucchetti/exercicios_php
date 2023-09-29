<?php
define('TAXA', 1.5);

header("Content-Type: application/json"); // a aplicação retorna json
header("Access-Control-Allow-Origin: *"); // vai aceitar requisições de todas origens
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // habilita métodos
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];

if($method === 'POST') {

    $body = file_get_contents("php://input"); // body em formato de string
    $data = json_decode($body); 
  
    $nome = filter_var($data->nome, FILTER_SANITIZE_SPECIAL_CHARS);
    $idade = filter_var($data->idade, FILTER_VALIDATE_INT);
    $curso = filter_var($data->curso, FILTER_SANITIZE_SPECIAL_CHARS);
    $valor = filter_var($data->valor, FILTER_VALIDATE_FLOAT);
    $prazo = filter_var($data->prazo, FILTER_VALIDATE_INT);

    if(!$nome) {
        http_response_code(400);
        echo json_encode(['error' => 'nome é obrigatório']);
        exit;
    }

    if(!$idade) {
        http_response_code(400);
        echo json_encode(['error' => 'idade é obrigatório']);
        exit;
    }

    if(!$curso) {
        http_response_code(400);
        echo json_encode(['error' => 'curso é obrigatório']);
        exit;
    }

    if(!$valor) {
        http_response_code(400);
        echo json_encode(['error' => 'valor é obrigatório']);
        exit;
    }

    if(!$prazo) {
        http_response_code(400);
        echo json_encode(['error' => 'prazo é obrigatório']);
        exit;
    }

    $taxa = TAXA / 100;

    $juros = $valor * $taxa * $prazo; // JUROS
    
    $montante = $valor + $juros;

    $parcela = $montante / $prazo;

    echo json_encode([
        'juros' => $juros,
        'montante' => $montante,
        'parcela' => number_format($parcela, 2)
    ]);
}
