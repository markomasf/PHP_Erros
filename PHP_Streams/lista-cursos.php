<?php

$arquivo = fopen(filename:'lista-cursos.txt', mode:'r');

/* PEGAR LINHA A LINHA

while (!feof($arquivo)){
    $curso = fgets($arquivo);
    echo $curso;
}
*/

var_dump ($tamanhoDoArquivo = filesize(filename:'lista-cursos.txt'));

echo $cursos = fread($arquivo, $tamanhoDoArquivo);

fclose($arquivo);
