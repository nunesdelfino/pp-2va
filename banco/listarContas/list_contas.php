<?php

    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_conta = true;
    $lista_contas = array();

    include "../../conta/bancoConta.php";
    include "../banco.php";

    if(isset($_POST['Id']) && $_POST['Id'] != ''){

        $Id = $_POST['Id'];

        $lista_contas = buscar_conta_banco($conn, $Id);

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

    include "temp_list.php";

    

?>