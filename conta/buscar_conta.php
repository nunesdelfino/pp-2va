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
    $lista_contas = array();

    include "bancoConta.php";
    include "../banco/banco.php";

    if(isset($_POST['Nome']) && $_POST['Nome'] != ''){

        $nome = $_POST['Nome'];

        $lista_contas = buscar_conta_nome($conn, $nome);

    }

    function formata_cpf($cpf){
        $bloco1 = substr($cpf,0,3);
        $bloco2 = substr($cpf,3,3);
        $bloco3 = substr($cpf,6,3);
        $dv = substr($cpf,9,2);
        $cpf = $bloco1.".".$bloco2.".".$bloco3."-".$dv;
        return $cpf;
    }

    function valor_moeda($valor){
        return number_format(doubleval($valor),2,",",".");
    }

    function num_conta($valor){
        switch(strlen($valor)){
            case 1:
                return "000".$valor;
            case 2:
                return "00".$valor;
            case 3:
                return "0".$valor;
            default:
                return $valor;
        }
    }

    function nome_agencia($conn, $id){

        $banco = buscar_banco($conn, $id);

        return $banco['NOME'];
    }

    include "temp_busca.php";

    

?>