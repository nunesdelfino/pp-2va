<?php
// Connect to the MySQL server running in a Docker container
$conn = mysqli_connect('localhost', 'root', '', 'pratica');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

function buscar_bancos($conn){
    $sqlBusca = 'SELECT * FROM banco';

    $resultado = mysqli_query($conn, $sqlBusca);
    $bancos = array();

    while ($banco = mysqli_fetch_assoc($resultado)) {
        $bancos[] = $banco;
    }
    return $bancos;
}

function busca_bancos($conn){
    $sqlBusca = "SELECT ID, NOME, N_AGENCIA FROM BANCO";

    $resultado = mysqli_query($conn, $sqlBusca);
    
    return $resultado;
}


function salvar_banco($conn, $dados){

    // Prepare the data
    if(isset($dados['Nome'])){
        $nome = $dados['Nome'];
    }

    if(isset($dados['NAgencia'])){
        $n_agencia = filter_var($dados['NAgencia'], FILTER_SANITIZE_NUMBER_INT);
    }

    if(isset($dados['Endereco'])){
        $endereco = $dados['Endereco'];
    }
    // Create the SQL query
    $sql = "INSERT INTO BANCO (NOME, N_AGENCIA, ENDERECO) VALUES ('$nome', '$n_agencia', '$endereco')";

    // Execute the query
    if (!mysqli_query($conn, $sql)) {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
}

function buscar_banco($conn, $id){
    $sqlBusca = 'SELECT * FROM banco WHERE id = ' . $id;
    
    $resultado = mysqli_query($conn, $sqlBusca);

    $retorno = mysqli_fetch_assoc($resultado);

    return $retorno;
}

function remover_banco($conn, $id){
    $sqlRemover = "DELETE FROM banco WHERE id = {$id}";

    mysqli_query($conn, $sqlRemover);
}

function editar_banco($conexao, $banco)
{
    $sql = "
    UPDATE banco SET
    NOME = '{$banco['Nome']}',
    N_AGENCIA = '{$banco['NAgencia']}',
    ENDERECO = '{$banco['Endereco']}'
    WHERE id = '{$banco['ID']}'
    ";
    mysqli_query($conexao, $sql);
}


?>
