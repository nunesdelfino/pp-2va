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

    #Busca pela conta indicada pelo id
    if(isset($_POST['Id']) && $_POST['Id'] != ''){

        $Id = $_POST['Id'];

        $lista_contas = buscar_conta_banco($conn, $Id);

    }

    #Esta função formata um CPF
    function formata_cpf($cpf){
        $bloco1 = substr($cpf,0,3);
        $bloco2 = substr($cpf,3,3);
        $bloco3 = substr($cpf,6,3);
        $dv = substr($cpf,9,2);
        $cpf = $bloco1.".".$bloco2.".".$bloco3."-".$dv;
        return $cpf;
    }

    #formata um valor numérico para o padrão de moeda brasileira
    function valor_moeda($valor){
        return number_format(doubleval($valor),2,",",".");
    }

    function num_conta($valor){
        switch(strlen($valor)){ // Se o número da conta tem um dígito
            case 1:
                return "000".$valor; // Adiciona 3 zeros antes do número
            case 2:
                return "00".$valor; // Adiciona 2 zeros antes do número
            case 3:
                return "0".$valor; // Adiciona 1 zeros antes do número
            default:
                return $valor;
        }
    }

    // Função que retorna o nome da agência bancária pelo ID
    function nome_agencia($conn, $id){

        // Busca informações do banco pelo ID
        $banco = buscar_banco($conn, $id);

        return $banco['NOME'];
    }

    include "temp_list.php";

    

?>