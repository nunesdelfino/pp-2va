<!doctype html>
<html lang="pt-BR">
    <head>
        <?php include "../head.php"?>
    </head>
    <body>
        <div class="container py-4">
                <div class="p-5 mb-4 bg-light rounded-3">
                <?php echo "<h1>Atenção</h1>"; ?>
                <?php echo "<h5>Não foi possivel excluir esse banco pois existem contas registradas nele.</h6>"; ?>
        <hr>
            <form method="post">
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a class="btn btn-danger" id="botao" href="/pp/pp-2va/banco/listarTodos/listar_bancos.php">Voltar</a>
                    </div>
                </div>
            </form>
            </div>
        </div>
    </body>
</html>