<?php

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_conta = true;

    $lista_bancos = array();
    
    //contem funções relacionadas a banco
    include "../banco.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){

        $nome = $_POST['Nome'];

        //busca com o nome especificado e armazena
        $lista_bancos = buscar_banco_nome($conn, $nome);

    }

    include "temp_busca.php";

    

?>