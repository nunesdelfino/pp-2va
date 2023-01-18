<form method="post">
    <div class="form-group row">
        <label for="ContaOrigem" class="col-sm-2 col-form-label">Conta Origem:</label>
        <div class="col-sm-10">
            <select class="form-control" id="ContaOrigem" name="ContaOrigem">
                <?php 
            $result = busca_contas($conn);
            while ($row = mysqli_fetch_assoc($result)) {
                var_dump($row);
                echo '<option value="'.$row['N_CONTA'].'##'.$row['SALDO'].'##'.$row['FK_BANCO_ID'].'">'.$row['NOME']." -- ".nome_agencia($conn, $row['FK_BANCO_ID']).'</option>';
            }
            ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="ContaDestino" class="col-sm-2 col-form-label">Conta Destino:</label>
        <div class="col-sm-10">
            <select class="form-control" id="ContaDestino" name="ContaDestino">
                <?php 
            $result = busca_contas($conn);
            while ($row = mysqli_fetch_assoc($result)) {
                var_dump($row);
                echo '<option value="'.$row['N_CONTA'].'##'.$row['SALDO'].'##'.$row['FK_BANCO_ID'].'">'.$row['NOME']." -- ".nome_agencia($conn, $row['FK_BANCO_ID']).'</option>';
            }
            ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Valor" class="col-sm-2 col-form-label">Valor:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="Valor"
                name="Valor" 
                required">
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Efetuar Transação</button>
        </div>
    </div>
</form>