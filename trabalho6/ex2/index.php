<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Lista de Proutos</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <?php
                $qtd = $_GET["qde"] ?? 5;
                $prod = array(
                    "Carro",
                    "Moto",
                    "Trem",
                    "Avião",
                    "Barco",
                    "Caminhão",
                    "Carreta",
                    "Quadriciclo",
                    "Bicicleta",
                    "Cavalo"
                );
                $desc = array(
                    "Veiculo de quatro rodas",
                    "Veiculo de duas rodas",
                    "Veiculo de transporte sobre trilhos",
                    "Veiculo de transporte aereo",
                    "Veiculo de transporte sobre a agua",
                    "Veiculo de transporte de carga",
                    "Veiculo de transporte de cargas pesadas",
                    "Veiculo para transporte de pequenas cargas",
                    "Veiculo de duas rodas movido por tração humana",
                    "Animal quadrupede utilizado para passeio ou transporte de carga"
                );
                for ($i = 1; $i <= $qtd; $i++) {
                    $pos = rand(0,9);
                    echo <<<DIV
                        <div class="col-sm-2">
                            $i
                        </div>
                        <div class="col-sm-4">
                            $prod[$pos]
                        </div>
                        <div class="col-sm-6">
                            $desc[$pos]
                        </div>
                    DIV;
                }
            ?>
        </div>
    </div>
</body>

</html>