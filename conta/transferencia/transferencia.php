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

    if(isset($_POST['Valor']) && $_POST['Valor'] != ''){

        $contaOrigem = array();
        $contaDestino = array();

        $origem = explode("##",$_POST['ContaOrigem']);
        $destino = explode("##",$_POST['ContaDestino']);

        $valor = str_replace(",",".",$_POST['Valor']);

        $valor = doubleval($valor);

        if($origem[0] != $destino[0]){
            if($origem[2] == $destino[2]){
                if(doubleval($origem[1]) < $valor){
                    $erro = "Erro: A conta de origem não tem saldo suficiente";
                } else {
                    $contaOrigem['N_CONTA'] = $origem[0];
                    $contaOrigem['SALDO'] = doubleval($origem[1]) - $valor;

                    $contaDestino['N_CONTA'] = $destino[0];
                    $contaDestino['SALDO'] = doubleval($destino[1]) + $valor;

                    realiza_tranferencia($conn, $contaOrigem, $contaDestino);

                    $erro = "Tranferência realizada";
                }
            } else {
                $erro = "Erro: As contas informadas devem ser do mesmo banco";
            }
        } else {
            $erro = "Erro: Conta de origem e destino não pode ser a mesma";
        }


    } else {
        if(isset($_POST['ContaOrigem'])){
            $erro = "Valor não informado";
        }
    }

    $lista_contas = buscar_contas($conn);

    function nome_agencia($conn, $id){

        $banco = buscar_banco($conn, $id);

        return $banco['NOME'];
    }

    include "temp_trans.php";
    
    if($erro != ""){
        echo ($erro);
    }

?>