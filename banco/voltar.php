<!doctype html>
<html lang="pt-BR">
    <head>
<<<<<<< Updated upstream
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <?php include "../navbar.php"?>;
        </nav>
            <!-- Título da página -->
        <title>Erro Remover</title>
=======
        <?php include "../head.php"?>
>>>>>>> Stashed changes
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