<?php 
  define("NOME_SITE", 'Carta de férias')
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de ferias</title>

    <style>
        .container {
            margin: 0 auto;
            width: 70%;
            border: 1px solid #000;
            padding: 10px;

            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
        }
    </style>
</head>

<body>
    <?php echo $_SERVER['PHP_SELF'] ?>
    <form class="container" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>Nome do funcionário:</label>
        <input type="text" placeholder="Digite o nome do funcionário" name="name" />
        <br />
        <label>Data de início da férias:</label>
        <input type="date" name="start_date" />
        <br />
        <label>Data de fim da férias:</label>
        <input type="date" name="end_date" />
        <br />
        <button type="submit">Gerar</button>
    </form>

    <?php

    echo $NOME_SITE;

    // var_dump($_POST);

    /*  
        ........
        .......
    */

    if (isset($_POST['name']) &&  isset($_POST['start_date']) && isset($_POST['end_date'])) {

        $name = $_POST['name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

    ?>
        <div class="container">
            <p>Nome do funcionario: <?php echo $name ?> </p>
            <p>Data de inicio: <?php echo $start_date ?> </p>
            <p>Data de fim: <?php echo $end_date ?> </p>
        </div>

    <?php
    } else {
        echo "Aguardando preenchimento das informações";
    }

    ?>
</body>

</html>