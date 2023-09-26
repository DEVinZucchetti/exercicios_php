<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>

<body>
    <?php
    $nome = 'douglas';

    $idade = 24;

    $salario = 2100.40;

    $is_old = false;

    $lista_nomes = ['maria', 'joao', 'pedro'];

    $outro_lista = array('maria', 'joao');
    
    $pessoa = (object) [
        'nome' => 'douglas',
        'idade' => 24
    ];

    $pessoas = [
        [
            'nome' => 'douglas',
            'idade' => 24
        ],
        [
            'nome' => 'douglas',
            'idade' => 24
        ]
    ];

    var_dump($pessoas);
    ?>

    <?php echo $pessoa->nome ?>
    <br />
    <?php echo  'menu nome é ' . $nome . 'e tenho' . $idade . ' anos' ?>
    <br />
    <?php echo  "menu nome é $nome" ?>
    
    <?= "......" ?>
</body>

</html>