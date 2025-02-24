<?php

function saudacao($nome) {
    return "Olá, $nome!";
}

if (php_sapi_name() == "cli") {
    echo saudacao("Mundo") . PHP_EOL;
}
?>
