<?php
$name = "Henrique Douglas Cavalcante Costa"; // string
$age = 24; // int
$salary_expectation = 29000.12; // float
$description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia dolorem tenetur, veritatis tempora at eligendi reiciendis a, assumenda quo quisquam corrupti laboriosam aliquid numquam explicabo nobis perferendis corporis rem. Consectetur?";
$open_to_negotiation = true; // bool

$skills = ['React', 'SQL', 'HTML5', 'Jogar YuGiOh'];
// $skills = array('React', 'SQL', 'HTML5', 'Jogar YuGiOh');

$address = [
    'cep' => '62870000',
    'city' => 'Pacajus',
    'state' => 'Ceará',
    'street' => 'Rua mario coriolando',
    'neighborhood' => 'Buriti',
    'number' => 8,
    'complement' => 'perto dali'
];

// $address['cep']

$contacts = (object) [
    'github' => 'http://github.com/douglas-cavalcante',
    'phone' => '4002-8922',
    'linkedin ' => 'http://linkedim',
];

$experiences = [
    [
        'company_name' => 'Doug Tech',
        'cargo' => 'Programador',
        'period' => '12/02/2020 até 12/10/2023',
        'description' => '...................'
    ],
    [
        'company_name' => 'Doug Tech',
        'cargo' => 'Programador',
        'period' => '12/02/2020 até 12/10/2023',
        'description' => '...................'
    ]
]

// $address->github
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 24px;
            margin-top: 20px;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        p {
            margin: 0;
        }

        ul {
            list-style-type: square;
            padding-left: 20px;
        }
    </style>
</head>

<body>

    <header>
        <h1><?php echo $name ?></h1>
        <p><?php echo "$address[street] - $address[number] - $address[neighborhood]"; ?></p>
        <p><?php echo "$address[cep] - $address[city] - $address[state]"; ?></p>
        <p>Github: <?php echo $contacts->github ?></p>
        <p>Telefone: <?php echo $contacts->phone ?></p>
        <p><?php echo $open_to_negotiation ? 'ACEITO NEGOCIACAO' : 'NAO ABERTO A NEGOCIACAO' ?></p>
    </header>

    <div class="container">
        <h2>Resumo Profissional</h2>
        <p><?php echo $description; ?></p>

        <h2>Experiência Profissional</h2>
        <ul>
            <?php
            foreach ($experiences as $experience) {
            ?>
                <li>
                    <p><strong><?php echo $experience['company_name'] ?></strong></p>
                    <p>Cargo: <?php echo $experience['cargo'] ?></p>
                    <p>Período: <?php echo $experience['period'] ?></p>
                    <p><?php echo $experience['description'] ?>.</p>
                </li>
            <?php
            }
            ?>

            <!-- Adicione mais experiências profissionais conforme necessário -->
        </ul>

        <h2>Formação Acadêmica</h2>
        <ul>
            <li>
                <p><strong>Nome da Universidade</strong></p>
                <p>Curso: Nome do Curso</p>
                <p>Ano de Conclusão: Ano de Conclusão</p>
            </li>
            <!-- Adicione mais formações acadêmicas conforme necessário -->
        </ul>

        <h2>Habilidades Técnicas</h2>
        <ul>
            <?php
            foreach ($skills as $skill) {
                echo "<li>$skill</li>";
            }
            // unset($skill);
            ?>
        </ul>



        <h2>Habilidades Técnicas</h2>
        <ul>
            <li><?php echo $skills[0] ?></li>
            <li><?php echo $skills[1] ?></li>
            <li><?php echo $skills[2] ?></li>
            <li><?php echo $skills[3] ?></li>
        </ul>
    </div>
</body>

</html>