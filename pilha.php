<?php

function funcao1()
{
    echo 'Entrei na função 1' . PHP_EOL;
    try{
        funcao2();
    } catch(RuntimeException | DivisionByZeroError $erro){
        echo "Erro apresentado: " . $erro->getMessage() . PHP_EOL;
        echo "Linha de erro: " . $erro->getLine() . PHP_EOL;
        echo "Caminho do erro: " . PHP_EOL . $erro->getTraceAsString() . PHP_EOL;
    }
    echo 'Saindo da função 1' . PHP_EOL;
}

function funcao2()
{
    echo 'Entrei na função 2' . PHP_EOL;

   throw new RuntimeException('Essa é a mensagem de erro!');

    echo 'Saindo da função 2' . PHP_EOL;
}

echo 'Iniciando o programa principal' . PHP_EOL;
funcao1();
echo 'Finalizando o programa principal' . PHP_EOL;
