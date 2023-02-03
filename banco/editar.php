<?php

//Inicia o array
    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_banco = false;

    //chama o outro arquivo para que sua funcao 
    //seja possivel de executar
    include "banco.php";

    //Verifica se a variavel não esta vazia
    if(isset($_POST['nome']) && $_POST['nome'] != ''){
        $dados = array();

        // Armazena o ID que foi enviado via GET na 
        //posição 'ID' do array
        $dados['ID'] = $_GET['id'];

        // Armazena o valor enviado pelo POST na variável 
        //'Nome' na posição 'Nome' do array
        $dados['nome'] = $_POST['nome'];
        
        if(isset($_POST['NAgencia']) && $_POST['NAgencia'] != ''){
        // Armazena o valor enviado pelo POST na variável 
        //'NAgencia' após ser filtrado na posição 'NAgencia'
        $dados['NAgencia'] = filter_var($_POST['NAgencia'], FILTER_SANITIZE_NUMBER_INT);
        }
        
        if(isset($_POST['Endereco']) && $_POST['Endereco'] != ''){
            $dados['Endereco'] = $_POST['Endereco'];
        }

        // edita os dados passando a conexao e o array
        editar_banco($conn, $dados);
        // Redireciona para a página 'criar_banco.php'
        header('Location: criar_banco.php');
        die();
    }

    // Busca o banco pelo ID passado na URL
    $banco = buscar_banco($conn, filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT));
    // Converte o número de agência de string para inteiro
    $banco['N_AGENCIA'] = intval($banco['N_AGENCIA']);


    var_dump($banco);
    
    include "template.php";
?>