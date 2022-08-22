<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function carregaString($arquivo){
        $arq = fopen($arquivo, "r");
        $string = fgets($arq);
        fclose($arq);
        return $string;
    }
    
    $mail = htmlspecialchars(carregaString("../ex3/email.txt"));
    $pass = htmlspecialchars(carregaString("../ex3/senhaHash.txt"));

    echo("Email: ".$mail);
    echo("Hash: ".$pass);

    ?>
</body>

</html>