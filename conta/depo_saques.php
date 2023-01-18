<?php

    $conta = array(
        'N_CONTA'            => 0,
        'NOME'          => '',
        'CPF'           => '',
        'FK_BANCO_ID'     => 0,
        'ENDERECO'      => '',
        'SALDO'         => 0
    );

    $exibir_conta = true;

    include "bancoConta.php";
    include "../banco/banco.php";

    if(isset($_POST['Conta']) && $_POST['Conta'] != ''){

        
        $dados = array();

        $aux = explode("##",$_POST['Conta']);

        $dados['N_CONTA'] = $aux[0];
        
        if(isset($_POST['T_Oper']) && $_POST['T_Oper'] != ''){
            
            if($_POST['T_Oper'] == 'D'){
                $dados['SALDO'] = intval($aux[1]) + intval($_POST['Valor']);
            }
            if($_POST['T_Oper'] == 'S'){
                $dados['SALDO'] = intval($aux[1]) - intval($_POST['Valor']);
            }
        }

        salvar_saldo($conn, $dados);
        header('Location: criar_conta.php');
        die();

    }

    $lista_contas = buscar_contas($conn);

    function nome_agencia($conn, $id){

        $banco = buscar_banco($conn, $id);

        return $banco['NOME'];
    }

    include "temp_depo_saques.php";

    

?>