<!doctype html>
<html lang="pt-BR">
    <head>
        <?php include "head.php"?>
    </head>
    <body>
        <!-- Div principal do carrossel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Imagens do carrossel -->
            <div class="carousel-inner">
                <!-- Primeira imagem do carrossel -->
                <div class="carousel-item active">
                    <!-- Imagem -->
                <img class="img-carrossel" src="assets/img/carrossel2.webp" alt="Imagem 1">
                <!-- Descrição da imagem -->
                <div class="carousel-caption d-none d-md-block">
                <h5>Seja Digital</h5>
                    <p>Represente os principais bancos agora mesmo.</p>
                    <!-- Botão para criar um novo banco -->
                    <button class="btn btn-success"onclick="window.location.href='../pp-2va/banco/criar_banco.php'">Criar novo banco</button>
                </div>
                </div>

<!-- Segunda imagem do carrossel -->
                <div class="carousel-item">
                    <!-- Imagem -->
                <img class="img-carrossel" src="assets/img/carrossel1.webp" alt="Imagem 2">
                <!-- Descrição da imagem -->
                <div class="carousel-caption d-none d-md-block">
                <h5>Vem ser cliente</h5>
                    <p>Gerencie suas contas em um unico lugar</p>
                    <!-- Botão para abrir uma nova conta -->
                    <button class="btn btn-success"onclick="window.location.href='../pp-2va/conta/criar_conta.php'">Abrir uma nova conta</button>
                </div>
                </div>
                
                <div class="carousel-item">
                <img class="img-carrossel" src="assets/img/carrossel3.webp" alt="Imagem 3">
                <div class="carousel-caption d-none d-md-block">
                <h5>Banco Digital</h5>
                    <p>Faça suas transações de forma online e segura.</p>
                    <button class="btn btn-success"onclick="window.location.href='../pp-2va/conta/transferencia/transferencia.php'">Realizar Transferência</button>
                </div>
            </div>
            <!-- Controles do carrossel -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <!-- Ícone de seta para a esquerda -->
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <!-- Ícone de seta para a direita -->
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    </body>
</html>