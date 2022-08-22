<?php
function carregaString($arquivo){
    $arq = fopen($arquivo, "r");
    $string = fgets($arq);
    fclose($arq);
    return $string;
}

$strMail = $_POST["usuario"] ?? "";
$strPass = $_POST["senha"] ?? "";

$mail = htmlspecialchars(carregaString("../ex3/email.txt"));
$pass = htmlspecialchars(carregaString("../ex3/senhaHash.txt"));

if($strMail!=$mail || !password_verify($strPass,$pass)){
    header("Location: index.html");
    exit();
}

else{
    header("Location: sucess.html");
    exit();
}

