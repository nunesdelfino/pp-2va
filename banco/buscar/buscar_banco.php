<?php

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_conta = true;

    $lista_bancos = array();
    
    include "../banco.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){

        $nome = $_POST['Nome'];

        $lista_bancos = buscar_banco_nome($conn, $nome);

    }

    include "temp_busca.php";

    

?>