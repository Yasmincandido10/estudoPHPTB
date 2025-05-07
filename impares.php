<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intervalo de Números</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 alert alert-info">

                <h1 class="text-dark text-center">numeros pares e impares</h1>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="inicio">inicio do intervalo:</label>
                        <input type="number" name="inicio" id="inicio" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fim">Fim do intervalo:</label>
                        <input type="number" name="fim" id="fim" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">gerar Intervalo</button>
                </form>

                <?php
                if (isset($_POST['inicio']) && isset($_POST['fim'])) {
                    $inicio = $_POST['inicio'];
                    $fim = $_POST['fim'];

                    $pares = [];
                    $impares = [];
                    $somaPares = 0;
                    $somaImpares = 0;

                    for ($i = $inicio; $i <= $fim; $i++) {
                        if ($i % 2 == 0) {
                            $pares[] = $i;
                            $somaPares += $i;
                        } else {
                            $impares[] = $i;
                            $somaImpares += $i;
                        }
                    }

                    echo "<h4 class='text-dark mt-4'>Pares:</h4>";
                    foreach ($pares as $par) {
                        echo "<p>" . $par . "</p>"; 
                    }
                    echo "<p>Soma dos Pares: " . $somaPares . "<p>";

                    echo "<h4 class='text-dark mt-4'>Ímpares:</h4>";
                    foreach ($impares as $impar) {
                        echo "<p>" . $impar . "</p>"; 
                    }

                    echo "<p>Soma dos Ímpares: " . $somaImpares . "</p>";
                }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
