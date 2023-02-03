<!doctype html>
<html lang="pt-BR">
    <head>
        <?php include "../../head.php"?>
    </head>
    <body>
        <div class="container p-5">
            <?php include "form_busca.php"; ?>
        </div>
            
        <?php if($exibir_conta): ?>
            <?php include "../tabela.php"; ?>
        <?php endif; ?>

    </body>
</html>