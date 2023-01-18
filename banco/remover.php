<?php

    include "banco.php";
    remover_banco($conn, $_GET['id']);
    header('Location: criar_banco.php');
    die();

    ?>