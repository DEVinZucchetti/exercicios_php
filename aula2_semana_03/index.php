<?php
require_once 'models/Funcionario.php';
require_once 'models/Empresa.php';
require_once 'models/Pessoa.php';

require_once 'utils.php';

$empresa = new Empresa('Zuchetti Solutions', '38.646.639/0001-11');


$funcionario1 = new Funcionario('Henrique', '191.685.930-58', '2000');
$funcionario2 = new Funcionario('Douglas', '191.685.930-11', '2000');

$empresa->contratar($funcionario1);
$empresa->contratar($funcionario2);

echo $funcionario1->getId();
echo $funcionario2->getId();

$empresa->demitir($funcionario1->getId());

debug($empresa->listarFuncionarios());



   

