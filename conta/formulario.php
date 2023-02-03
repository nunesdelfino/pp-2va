<head>
    <script src="../utils/JQuery/jquery.validate.min.js"></script>
    <script src="../utils/JQuery/additional-methods.js"></script>
    <script src="../utils/JQuery/localization/messages_pt_BR.min.js"></script>
    <script src="../utils/JQuery/jquery.mask.min.js"></script>
    <script src="../utils/contavalidate.js"></script>
</head>
<form id="validateconta" method="post">
    <input type="hidden" name="id" value="<?php echo $conta['N_CONTA']; ?> "/>
    <div class="form-group row">
        <label for="Nome" class="col-sm-2 col-form-label">Nome do Cliente:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="Nome"
                placeholder="Insira o nome do cliente"
                name="Nome"
                value="<?php echo $conta['NOME'];?>"
                >
        </div>
    </div>
    <div class="form-group row">
        <label for="CPF" class="col-sm-2 col-form-label">CPF:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="CPF"
                onkeypress="$(this).mask('000.000.000-00')"
                placeholder="000.000.000-00"
                name="CPF"
                value="<?php echo $conta['CPF'];?>"
                >
        </div>
    </div>
    <div class="form-group row">
        <label for="Endereco" class="col-sm-2 col-form-label">Endereço:</label>
        <div class="col-sm-10">
            <input
                type="text"
                class="form-control"
                id="Endereco"
                placeholder="Insira o endereço"
                name="Endereco"
                value="<?php echo $conta['ENDERECO'];?>"
                >
        </div>
    </div>
    <div class="form-group row">
        <label for="N_Agencia" class="col-sm-2 col-form-label">Número da Agência:</label>
        <div class="col-sm-10">
            <select class="form-control" id="N_Agencia" name="N_Agencia">
                <?php 
            $result = busca_bancos($conn);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['ID'].'">'.$row['NOME'].'</option>';
            }
            ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </div>
</form>