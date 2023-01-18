<?php

$conta = array(
    'N_CONTA'       => 0,
    'NOME'          => '',
    'CPF'           => '',
    'FK_BANCO_ID'   => 0,
    'ENDERECO'      => '',
    'SALDO'         => 0
);

    $exibir_conta = false;

    include "bancoConta.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){
        $dados = array();

        $dados['N_CONTA'] = $_GET['NConta'];

        $dados['Nome'] = $_POST['Nome'];
        
        if(isset($_POST['FK_BANCO_ID']) && $_POST['FK_BANCO_ID'] != ''){
            $dados['FK_BANCO_ID'] = filter_var($_POST['FK_BANCO_ID'], FILTER_SANITIZE_NUMBER_INT);
        }
        
        if(isset($_POST['Endereco']) && $_POST['Endereco'] != ''){
            $dados['Endereco'] = $_POST['Endereco'];
        }
        
        if(isset($_POST['CPF']) && $_POST['CPF'] != ''){
            $dados['CPF'] = $_POST['CPF'];
        }

        editar_banco($conn, $dados);
        header('Location: criar_banco.php');
        die();
    }

    $conta = buscar_conta($conn, filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));

    

    include "template.php";

    

?>