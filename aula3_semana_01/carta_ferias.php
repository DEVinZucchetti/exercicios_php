<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de férias</title>

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
    <?php
     
    if (isset($_POST['name']) &&  isset($_POST['start_date']) && isset($_POST['end_date'])) {

        $name = $_POST['name'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $salario = $name === 'douglas' ? 10000 : 1000;

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