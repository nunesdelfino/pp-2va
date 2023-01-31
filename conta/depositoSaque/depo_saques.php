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

    $erro = "";

    include "../bancoConta.php";
    include "../../banco/banco.php";

    if(isset($_POST['Valor']) && doubleval($_POST['Valor']) > '0'){

        
        $dados = array();

        $aux = explode("##",$_POST['Conta']);

        $dados['N_CONTA'] = $aux[0];

        $valor = str_replace(",",".",$_POST['Valor']);
        
        if(isset($_POST['T_Oper']) && $_POST['T_Oper'] != ''){
            
            if($_POST['T_Oper'] == 'D'){
                $dados['SALDO'] = doubleval($aux[1]) + doubleval($valor);
                salvar_saldo($conn, $dados);
                header('Location: ../buscarTodas/buscar_contas.php');
                die();
            }
            if($_POST['T_Oper'] == 'S'){
                if(doubleval($aux[1]) > doubleval($valor)){
                    var_dump(doubleval($aux[1]) . " -- " . doubleval($valor));
                    $dados['SALDO'] = doubleval($aux[1]) - doubleval($valor);

                    salvar_saldo($conn, $dados);
                    header('Location: ../buscarTodas/buscar_contas.php');
                    die();
                } else {
                    $erro = "Saldo insuficiente";
                }
            }
        }

    } else {
        if(isset($_POST['Valor'])){
            $erro = "O Valor não pode ser 0 ou negativo";
        }
    }

    $lista_contas = buscar_contas($conn);

    function nome_agencia($conn, $id){

        $banco = buscar_banco($conn, $id);

        return $banco['NOME'];
    }

    include "temp_depo_saques.php";

    echo $erro;

?>