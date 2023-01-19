<?php

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_conta = true;
    
    include "../banco.php";

    $nome = "%%";

    $lista_bancos = buscar_banco_nome($conn, $nome);

    include "temp_busca.php";

    

?>