<?php
 
 $codigo = filter_input(INPUT_POST, 'codigo', FILTER_VALIDATE_INT);
 $quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_VALIDATE_INT);

 if(!$codigo || !$quantidade) {
    echo "Informações incorretas";
    exit;
 } else {

    switch($codigo) {
        case 3456: {
            $valor = number_format($quantidade * 6, 2);
            echo "Você pediu $quantidade Coxinha(s) e vai pagar $valor";
            break;
        }
        case 3457: {
            $valor = number_format($quantidade * 1, 2);
            echo "Você pediu $quantidade Sushi(s) e vai pagar $valor";
            break;
        }
        case 3458: {
            $valor = number_format($quantidade * 8.99, 2);
            echo "Você pediu $quantidade pastéi(s) e vai pagar $valor";
            break;
        }
        default: {
            echo "Código não localizado";
            break;
        }

    }
 }

?>