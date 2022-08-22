<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Resultado</title>
</head>
<body>
    <div class='container'>
        <?php
            $str = <<<HTML
            <div class="row">
                <div class="col-sm-3">
                    {$_GET['cep']}
                </div>
                <div class="col-sm-5">
                    {$_GET["log"]}
                </div>
                <div class="col-sm-4">
                    {$_GET["brr"]}
                </div>
                <div class="col-sm-8">
                    {$_GET["cdd"]}
                </div>
                <div class="col-sm-4">
                    {$_GET["UF"]}
                </div>
            </div>    
            HTML;
            echo $str;
        ?>
    </div>
</body>
</html>