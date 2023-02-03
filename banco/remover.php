<?php

    include "banco.php";

    include "../conta/bancoConta.php";

    // Obtem as contas bancarias usando a funcao "buscar_conta_banco"
    $contas = buscar_conta_banco($conn, $_GET['id']);

// Verificar se não há a conta bancaria indicada
    if(sizeof($contas) < 1){
        // Remover o banco usando a funcao "remover_banco"
        remover_banco($conn, $_GET['id']);
        // Redirecionar para a pagina "criar_banco.php"
        header('Location: criar_banco.php');
        die();
    } else {
        // Redirecionar para a pagina "voltar.php"
        header('Location: voltar.php');
        die();
    }

    ?>