<?php

$arquivoCursos = fopen('lista-cursos.txt', 'r');

stream_filter_append($arquivoCursos, 'string.toupper' );

$conteudo = fread($arquivoCursos, filesize('lista-cursos.txt'));

echo $conteudo;