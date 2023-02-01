<?php
// Conectando ao servidor MySQL rodando em um container Docker
$conn = mysqli_connect('localhost', 'root', '', 'pratica');

// Verificando a conexao
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Funcao para buscar todos os bancos
function buscar_bancos($conn){
    $sqlBusca = 'SELECT * FROM banco';

    $resultado = mysqli_query($conn, $sqlBusca);
    $bancos = array();

    // Armazenando os resultados em um array
    while ($banco = mysqli_fetch_assoc($resultado)) {
        $bancos[] = $banco;
    }
    return $bancos;
}

// Funcao para buscar os ID, nomes e números de agência dos bancos
function busca_bancos($conn){
    $sqlBusca = "SELECT ID, NOME, N_AGENCIA FROM BANCO";

    //armazena aos resultados os dados da busca
    $resultado = mysqli_query($conn, $sqlBusca);
    
    return $resultado;
}

// Funcao para buscar um banco pelo nome
// recebe uma conexao e um nome
function buscar_banco_nome($conn, $nome){
    // A query busca todos os dados da tabela "banco" 
    //onde NOME e semelhante ao nome procurado
    $sqlBusca = 'SELECT * FROM banco WHERE NOME LIKE "%' . $nome. '%"';

    // A funcao retorna o resultado da query, que e 
    //armazenado na variavel $resultado
    $resultado = mysqli_query($conn, $sqlBusca);
   $contas = array();

   // O while percorre o resultado da query e 
   //adiciona cada linha dentro do array $contas 
    while ($conta = mysqli_fetch_assoc($resultado)) {
        $contas[] = $conta;
    }

    return $contas;
}

// A função recebe dois parâmetros: a conexão com o banco ($conn) 
//e os dados a serem salvos ($dados)
function salvar_banco($conn, $dados){

    // Verificação se existe não estiver vazio
    // armazena o valor na variável
    if(isset($dados['Nome'])){
        $nome = $dados['Nome'];
    }

    if(isset($dados['NAgencia'])){
        $n_agencia = filter_var($dados['NAgencia'], FILTER_SANITIZE_NUMBER_INT);
    }

    if(isset($dados['Endereco'])){
        $endereco = $dados['Endereco'];
    }
    
    // Declaração da variável $sql para inserir os dados no banco
    $sql = "INSERT INTO BANCO (NOME, N_AGENCIA, ENDERECO) VALUES ('$nome', '$n_agencia', '$endereco')";

    // Se a execução da query retornar um erro, exibe uma mensagem de erro
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

// Busca banco pelo id
function buscar_banco($conn, $id){
    $sqlBusca = 'SELECT * FROM banco WHERE id = ' . $id;
    
    // Executa a consulta
    $resultado = mysqli_query($conn, $sqlBusca);

    // Retorna o resultado da consulta em formato de array associativo
    $retorno = mysqli_fetch_assoc($resultado);

    return $retorno;
}

// Remove banco pelo id
function remover_banco($conn, $id){
    $sqlRemover = "DELETE FROM banco WHERE id = {$id}";

    // Executa a consulta
    mysqli_query($conn, $sqlRemover);
}

function editar_banco($conexao, $banco)
{
    // Prepara a consulta SQL para atualizar as informações do banco
    $sql = "
    UPDATE banco SET
    NOME = '{$banco['Nome']}',
    N_AGENCIA = '{$banco['NAgencia']}',
    ENDERECO = '{$banco['Endereco']}'
    WHERE id = '{$banco['ID']}'
    ";
    
    // Executa a consulta
    mysqli_query($conexao, $sql);
}


?>
