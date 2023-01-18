<form method="post">
    <input type="hidden" name="id" value="<?php echo $conta['N_CONTA']; ?> "/>
    <div class="form-group row">
        <label for="Nome" class="col-sm-2 col-form-label">Nome do Cliente:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="Nome"
                placeholder="Nome do Cliente"
                name="Nome"
                value="<?php echo $conta['NOME']; ?> ">
        </div>
    </div>
    <div class="form-group row">
        <label for="CPF" class="col-sm-2 col-form-label">CPF:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="CPF"
                name="CPF"
                value="<?php echo $conta['CPF']; ?>">
        </div>
    </div>
    <div class="form-group row">
        <label for="Endereco" class="col-sm-2 col-form-label">Endereço:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="Endereco"
                name="Endereco"
                value="<?php echo $conta['ENDERECO']; ?> ">
        </div>
    </div>
    <div class="form-group row">
        <label for="N_Agencia" class="col-sm-2 col-form-label">Número da Agência:</label>
        <div class="col-sm-10">
            <select class="form-control" id="N_Agencia" name="N_Agencia">
                <?php 
            $conn = mysqli_connect('localhost', 'root', '', 'pratica');
            $query = "SELECT ID, NOME, N_AGENCIA FROM BANCO";
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['ID'].'">'.$row['NOME'].'</option>';
            }
            ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </div>
</form>