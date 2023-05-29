<?php

$tela = fopen('php://stdout', 'w');
fwrite($tela, 'Olá mundo!');

// outra forma de escrever

fwrite(STDOUT, "\nTeste STDOUT");