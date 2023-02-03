<?php

    # Inicialização de um array com as informações do banco

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    # Variável booleana para definir se a exibição de conta será realizada
    $exibir_conta = true;

    # Inclusão do arquivo de conexão com o banco que tem todas as informações
    #e conexao com banco de dados
    include "../banco.php";

    $nome = "%%";

    # Busca pelos bancos com nome similar ao definido
    $lista_bancos = buscar_banco_nome($conn, $nome);

    include "temp_busca.php";

    

?>