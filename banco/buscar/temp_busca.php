<!doctype html>
<html lang="en">
    <head>
        <?php include "../../head.php"?>
    </head>
    <body>
        <?php include "form_busca.php"; ?>
            
        <?php if($exibir_conta): ?>
            <?php include "../tabela.php"; ?>
        <?php endif; ?>
        
    </body>
</html>