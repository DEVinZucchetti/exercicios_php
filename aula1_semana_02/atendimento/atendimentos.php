<?php 
header("Content-Type: application/json"); // a aplicação retorna json
header("Access-Control-Allow-Origin: *"); // vai aceitar requisições de todas origens
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // habilita métodos
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");

$method = $_SERVER['REQUEST_METHOD'];

if($method === 'POST') {
    $body = json_decode(file_get_contents("php://input"));

    $guiche = filter_var($body->guiche, FILTER_VALIDATE_INT );

    if(!$guiche) {
        echo json_encode(['error' => 'Não foi enviado o Nº do guiche']);
    }

    $fila = json_decode(file_get_contents('fileAtendimentos.txt'));

    // pega o primeiro item do array de fila
    // exclui a pessoa do array de fila

    // identifico qual é guiche

    //fazer um push do item retirado do array fila

}

?>