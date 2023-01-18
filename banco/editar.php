<?php

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_banco = false;

    include "banco.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){
        $dados = array();

        $dados['ID'] = $_GET['id'];

        $dados['Nome'] = $_POST['Nome'];
        
        if(isset($_POST['NAgencia']) && $_POST['NAgencia'] != ''){
            $dados['NAgencia'] = filter_var($_POST['NAgencia'], FILTER_SANITIZE_NUMBER_INT);
        }
        
        if(isset($_POST['Endereco']) && $_POST['Endereco'] != ''){
            $dados['Endereco'] = $_POST['Endereco'];
        }

        editar_banco($conn, $dados);
        header('Location: criar_banco.php');
        die();
    }

    $banco = buscar_banco($conn, filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    $banco['N_AGENCIA'] = intval($banco['N_AGENCIA']);

    

    include "template.php";

    

?>