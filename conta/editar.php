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
    include "../banco/banco.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){

        $dados = array();

        $dados['N_CONTA'] = $_POST['id'];

        $dados['Nome'] = $_POST['Nome'];
        
        if(isset($_POST['N_Agencia']) && $_POST['N_Agencia'] != ''){
            $dados['N_Agencia'] = filter_var($_POST['N_Agencia'], FILTER_SANITIZE_NUMBER_INT);
        }
        
        if(isset($_POST['Endereco']) && $_POST['Endereco'] != ''){
            $dados['Endereco'] = $_POST['Endereco'];
        }
        
        if(isset($_POST['CPF']) && $_POST['CPF'] != ''){
            $dados['CPF'] = $_POST['CPF'];
        }

        var_dump($dados);

        editar_conta($conn, $dados);
        header('Location: criar_conta.php');
        die();
    }

    $conta = buscar_conta($conn, filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    

    include "template.php";

    

?>