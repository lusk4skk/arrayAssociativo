<?php
    $nomes = ["Maria", "Fábio", "Caio"];
    $nomes[] = "Ana";
    $nomes[2] = "Carlos";

    rsort($nomes);

    echo "Segundo nome: " . $nomes[1];

    for ($c = 0, $c < count($nomes); $c++;) {
        echo "<br>Nomes " . $c . ": " . $nomes[$c];
    }

    $idades = array(25, 36, 15, "dez");

    echo "<br>Última idade: " . $idades[3];
    echo "<br>Total de idades: " . count($idades);

    $aluno = [
        "matrícula" => 123,
        "nome" => "Júlio",
        "curso" => "DSM",
    ];

    echo "<br>Nome: " . $aluno['nome'];
    $aluno["período"] = "Vespertino";

    foreach ($aluno as $a) {
        echo "<br>$a";
    }

    $unidades = [
        0 => "PG",
        1 => "SV"
    ];

    foreach ($unidades as $chave => $valor) {
        echo "<br>$chave : $valor";
    }
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <br>
    <button><a href="select.php">Select</a></button>
</body>
</html>