<?php

//Inicia o array
    $banco = array(
        'ID'        => 0,
        'NOME'      => '',
        'N_AGENCIA'  => 0,
        'ENDERECO'  => ''
    );

    $exibir_banco = true;

    //chama o outro arquivo para que sua funcao 
    //seja possivel de executar
    include "banco.php";

    // Verifica se o campo "Nome" foi enviado no 
    //formulário POST e se não está vazio
    if(isset($_POST['nome']) && $_POST['nome'] != ''){
        // Cria um array para armazenar os dados do banco
        $dados = array();

        $dados['nome'] = $_POST['nome'];
        
        // Verifica se o campo do numero da agencia foi enviado no 
        //formulário POST e se não está vazio
        if(isset($_POST['NAgencia']) && $_POST['NAgencia'] != ''){
            // Adiciona o número da agencia no array e remove 
            //qualquer caractere que não seja numero
            $dados['NAgencia'] = filter_var($_POST['NAgencia'], FILTER_SANITIZE_NUMBER_INT);
        }
        
        //Verifica se o endereco foi enviado e nao esta vazio
        if(isset($_POST['Endereco']) && $_POST['Endereco'] != ''){
            $dados['Endereco'] = $_POST['Endereco'];
        }

        // salva o banco
        salvar_banco($conn, $dados);
        header('Location: criar_banco.php');
        // Finaliza a execução do script
        die();

    }

    // Chama a função buscar_bancos para obter a lista de bancos
    $lista_bancos = buscar_bancos($conn);

    include "template.php";

    

?>