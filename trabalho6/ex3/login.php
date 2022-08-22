<?php
function salvaString($string, $arquivo){
    $arq = fopen($arquivo, "w");
    fwrite($arq, $string);
    fclose($arq);
}

$strMail = $_POST["usuario"]??"";
$strPass = $_POST["senha"]??"";
$strPass = password_hash($strPass,PASSWORD_DEFAULT);

salvaString($strMail,"email.txt");
salvaString($strMail,"senhaHash.txt");

