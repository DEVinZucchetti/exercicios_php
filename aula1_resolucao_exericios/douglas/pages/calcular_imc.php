<?php
    $peso = filter_var($_POST['peso'], FILTER_VALIDATE_FLOAT);
    $altura = filter_var($_POST['altura'], FILTER_VALIDATE_FLOAT);

    if(!$peso || !$altura) {
        echo "O peso e altura são necessários";
        exit;
    } else {
        $imc = $peso / ($altura * $altura);
        echo "O seu imc é ".number_format($imc, 2);
    }
?>