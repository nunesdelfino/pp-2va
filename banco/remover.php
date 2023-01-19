<?php

    include "banco.php";

    include "../conta/bancoConta.php";

    $contas = buscar_conta_banco($conn, $_GET['id']);


    if(sizeof($contas) < 1){
        remover_banco($conn, $_GET['id']);
        header('Location: criar_banco.php');
        die();
    } else {
        header('Location: voltar.php');
        die();
    }

    ?>