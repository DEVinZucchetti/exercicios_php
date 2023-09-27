<?php
  $peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT);
  $distancia = filter_input(INPUT_POST, 'distancia', FILTER_VALIDATE_FLOAT);
  
  if(!$peso || !$distancia) {
    header('Location: frete.php?error=true');
  }

  // var_dump($peso);
  
  $distancia = $_POST['distancia'];

  $resultado = $peso * 0.8 + $distancia * 0.2;

  echo "O valor do frete é $resultado";
?>