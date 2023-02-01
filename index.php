<!doctype html>
<html lang="pt-BR">
    <head>
        <?php include "head.php"?>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Imagens do carrossel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="assets/img/carrossel2.jpg" alt="Imagem 1" style="height: 93vh; width: 100%; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                <h5>Seja Digital</h5>
                    <p>Represente os principais bancos agora mesmo.</p>
                    <button class="btn btn-primary"onclick="window.location.href='../pp-2va/banco/criar_banco.php'">Criar novo banco</button>
                </div>
                </div>

                <div class="carousel-item">
                <img src="assets/img/carrossel1.jpg" alt="Imagem 2" style="height: 93vh; width: 100%; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                <h5>Vem ser cliente</h5>
                    <p>Gerencie suas contas em um unico lugar</p>
                    <button class="btn btn-primary"onclick="window.location.href='../pp-2va/conta/criar_conta.php'">Abrir uma nova conta</button>
                </div>
                </div>
                
                <div class="carousel-item">
                <img src="assets/img/carrossel3.jpg" alt="Imagem 3" style="height: 93vh; width: 100%; object-fit: cover;">
                <div class="carousel-caption d-none d-md-block">
                <h5>Banco Digital</h5>
                    <p>Faça suas transações de forma online e segura.</p>
                    <button class="btn btn-primary"onclick="window.location.href='../pp-2va/conta/transferencia/transferencia.php'">Realizar Transferência</button>
                </div>
            </div>
            <!-- Controles do carrossel -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>



        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
    </body>
</html>