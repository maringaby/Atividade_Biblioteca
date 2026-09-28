<?php 

$conexao = myqli_connect(
    "localhost",
    "root",
    "root",
    "bibliotevca"
    );

    if (!$conexao) {
        die("Erro na conexão: " . mysqli_connect_error());
    }
    