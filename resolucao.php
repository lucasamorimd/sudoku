<?php
require_once 'functions_class.php';
$params = filter_input_array(INPUT_POST, FILTER_DEFAULT);


$quadrantes = functions::verificarGrupo($params);
$linhas_colunas = functions::verificarLinhaColuna($params);

if ($quadrantes === 1 && $linhas_colunas === 1) {
    echo 1;
} else {
    echo 0;
}
