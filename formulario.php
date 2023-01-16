<form method="post">
            <input type="hidden" name="id" value="<?php echo $banco['ID']; ?> " />
            <div class="form-group row">
                <label for="Nome" class="col-sm-2 col-form-label">Nome do Banco:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Nome" placeholder="Nome do banco" name="Nome" value="<?php echo $banco['NOME']; ?> ">
                </div>
            </div>
            <div class="form-group row">
                <label for="NAgencia" class="col-sm-2 col-form-label">Número da Agência:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="NAgencia" name="NAgencia" inputmode="numeric" pattern="\d*" value="<?php echo $banco['N_AGENCIA']; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="Endereco" class="col-sm-2 col-form-label">Endereço:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="Endereco" name="Endereco" value="<?php echo $banco['ENDERECO']; ?> ">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" >Salvar</button>
                </div>
            </div>
        </form>