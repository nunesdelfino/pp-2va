<!doctype html>
<html lang="en">
    <head>
        <?php include "../head.php"?>
    </head>
    <body>
        <div class="container p-5">
            <?php include "formulario.php"; ?>
        </div>

        <?php if($exibir_conta): ?>
            <?php include "tabela.php"; ?>
        <?php endif; ?>
</html>