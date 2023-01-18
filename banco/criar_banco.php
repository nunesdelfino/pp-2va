<?php

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_banco = true;

    include "banco.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){
        $dados = array();

        $dados['Nome'] = $_POST['Nome'];
        
        if(isset($_POST['NAgencia']) && $_POST['NAgencia'] != ''){
            $dados['NAgencia'] = filter_var($_POST['NAgencia'], FILTER_SANITIZE_NUMBER_INT);
        }
        
        if(isset($_POST['Endereco']) && $_POST['Endereco'] != ''){
            $dados['Endereco'] = $_POST['Endereco'];
        }

        salvar_banco($conn, $dados);
        header('Location: criar_banco.php');
        die();

    }

    $lista_bancos = buscar_bancos($conn);

    

    include "template.php";

    

?>