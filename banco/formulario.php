 <head>
    <script src="../utils/JQuery/jquery.validate.min.js"></script>
    <script src="../utils/JQuery/additional-methods.js"></script>
    <script src="../utils/JQuery/localization/messages_pt_BR.min.js"></script>
    <script src="../utils/validate.js"></script>
</head>
<!-- Este eh um formulário para atualizar as informações do banco -->
<!-- Este campo de entrada eh para armazenar o ID do banco -->
    <form id="formvalidate" method="post">
        <input type="hidden" name="id" value="<?php echo $banco['ID']; ?> "/>
        <div class="form-group row">
            <label for="nome" class="col-sm-2 col-form-label">Nome do Banco:</label>
            <div class="col-sm-10">
            <!--Adiciona as informacoes-->
                <input
                    type="text"
                    class="form-control"
                    id="nome"
                    placeholder="Digite o nome do banco"
                    name="nome"
                    value="<?php echo $banco['NOME'];?>"
                    >
            </div>
        </div>
        <div class="form-group row">
            <label for="NAgencia" class="col-sm-2 col-form-label">Número da Agência:</label>
            <div class="col-sm-10">
                <input
                    type="number"
                    class="form-control"
                    id="NAgencia"
                    placeholder="Digite o numero da agencia"
                    name="NAgencia"
                    inputmode="numeric"
                    pattern="\d*"
                    value="<?php echo $banco['N_AGENCIA'];?>">
            </div>
        </div>
        <div class="form-group row">
            <label for="Endereco" class="col-sm-2 col-form-label">Endereço:</label>
            <div class="col-sm-10">
                <input
                    type="text"
                    class="form-control"
                    id="Endereco"
                    placeholder="Digite o endereço"
                    name="Endereco"
                    value="<?php echo $banco['ENDERECO']; ?>"
                    >
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <!--Botao salvar-->
                <button type="submit" class="btn btn-success">Salvar</button>
            </div>
        </div>
    </form>
