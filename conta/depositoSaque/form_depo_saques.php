<form method="post">
    <div class="form-group row">
        <label for="Conta" class="col-sm-2 col-form-label">Conta:</label>
        <div class="col-sm-10">
            <select class="form-control" id="Conta" name="Conta">
                <?php 
            $result = busca_contas($conn);
            while ($row = mysqli_fetch_assoc($result)) {
                var_dump($row);
                echo '<option value="'.$row['N_CONTA'].'##'.$row['SALDO'].'">'.$row['NOME']." -- ".nome_agencia($conn, $row['FK_BANCO_ID']).'</option>';
            }
            ?>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="T_Oper" class="col-sm-2 col-form-label">Tipo de Operação:</label>
        <div class="col-sm-10">
            <select class="form-control" id="T_Oper" name="T_Oper">
                <option value="D">Depósito</option>
                <option value="S">Saque</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="Valor" class="col-sm-2 col-form-label">Valor:</label>
        <div class="col-sm-10">
            <input
                type="number"
                class="form-control"
                id="Valor"
                name="Valor" "
                required>
                
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Efetuar Transação</button>
        </div>
    </div>
</form>