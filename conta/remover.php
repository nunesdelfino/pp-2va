<?php

    include "bancoConta.php";
    remover_conta($conn, $_GET['id']);
    header('Location: criar_conta.php');
    die();

    ?>