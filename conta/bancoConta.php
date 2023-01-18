<?php
// Connect to the MySQL server running in a Docker container
$conn = mysqli_connect('localhost', 'root', '', 'pratica');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function buscar_contas($conn){
    $sqlBusca = 'SELECT * FROM conta';

    $resultado = mysqli_query($conn, $sqlBusca);
    $contas = array();

    while ($conta = mysqli_fetch_assoc($resultado)) {
        $contas[] = $conta;
    }
    return $contas;
}

function busca_contas($conn){

    $sqlBusca = "SELECT NOME, N_CONTA, SALDO, FK_BANCO_ID FROM CONTA";

    $resultado = mysqli_query($conn, $sqlBusca);
    
    return $resultado;
}


function salvar_conta($conn, $dados){

    // Prepare the data
    if(isset($dados['Nome'])){
        $nome = $dados['Nome'];
    }

    if(isset($dados['N_Agencia'])){
        $n_agencia = filter_var($dados['N_Agencia'], FILTER_SANITIZE_NUMBER_INT);
    }

    if(isset($dados['Endereco'])){
        $endereco = $dados['Endereco'];
    }

    if(isset($dados['CPF'])){
        $cpf = $dados['CPF'];
    }
    // Create the SQL query
    $sql = "INSERT INTO conta (NOME, CPF, ENDERECO, FK_BANCO_ID, SALDO) VALUES ('$nome', '$cpf', '$endereco', '$n_agencia', '0')";


    // Execute the query
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

function salvar_saldo($conexao, $conta)
{
    $sql = "
    UPDATE conta SET
    SALDO = '{$conta['SALDO']}'
    WHERE N_CONTA = '{$conta['N_CONTA']}'
    ";
    mysqli_query($conexao, $sql);
}

function buscar_conta($conn, $id){
    $sqlBusca = 'SELECT * FROM conta WHERE N_CONTA = ' . $id;
    
    $resultado = mysqli_query($conn, $sqlBusca);

    $retorno = mysqli_fetch_assoc($resultado);

    return $retorno;
}

function remover_conta($conn, $id){
    $sqlRemover = "DELETE FROM conta WHERE N_CONTA = {$id}";

    mysqli_query($conn, $sqlRemover);
}

function editar_conta($conexao, $conta)
{
    $sql = "
    UPDATE conta SET
    NOME = '{$conta['Nome']}',
    CPF = '{$conta['CPF']}',
    FK_BANCO_ID = '{$conta['N_Agencia']}',
    ENDERECO = '{$conta['Endereco']}'
    WHERE N_CONTA = '{$conta['N_CONTA']}'
    ";
    mysqli_query($conexao, $sql);
}


?>
