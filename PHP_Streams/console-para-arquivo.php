<?php

/*
$teclado = fopen('php://stdin', 'r');
$novoCurso = trim(fgets($teclado));
file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);
*/

// Outra forma de fazer o código acima:
$novoCurso = trim(fgets(STDIN));
file_put_contents('cursos-php.txt', "\n$novoCurso", FILE_APPEND);
