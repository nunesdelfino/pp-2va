<!DOCTYPE html>
<html lang="pt-BR">
<head>
        <?php include "head.php"?>
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div class="container py-4">
            <div class="p-5 mb-4 bg-light rounded-3">
                <div class="container-fluid py-4">
                    <h1 class="display-5 fw-bold">Atividade Avaliativa</h1>
                    <p>Elaborar um software sobre a representação de bancos financeiros, suas contas correntes e algumas operações, em que preocupar-se-á com a experimentação das tecnologias de programação para a web e um SGBD e a persistência de dados.</p>
                </div>
            </div>

            <div class="row align-items-md-stretch">
            <div class="col-md-6">
                <div class="h-100 p-5 text-bg-dark rounded-3">
                <h2>Requisitos Funcionais</h2>
                    <p>
                        <ol>
                            <li>(0,5) Criar bancos financeiros informando o nome do banco, o número da agência que esse 
                            banco representa, o endereço e a bandeira (itaú, bradesco, caixa econômica, etc...);</li>
                            <li>(0,43) Criar conta corrente informando dados do cliente (nome, CPF, endereço), número da 
                            conta, número da agência;</li>
                            <li>(0,43) Excluir conta corrente específica;</li>
                            <li>(0,43) Realizar depósitos e saques na conta corrente;</li>
                            <li>(1,0) Pesquisar contas por dados do cliente (nome);</li>
                            <li>(1,0) Transferir dinheiro entre contas de um mesmo banco;</li>
                            <li>(0,43) Listar todas as contas de um banco;</li>
                            <li>(0,43) Listar uma conta de um banco, que será escolhida por nome;</li>
                            <li>(1,0) Pesquisar um banco a partir do nome ou da bandeira;</li>
                            <li>(0,43) Listar todos os bancos criados;</li>
                        </ol>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-light border rounded-3">
                <h2>Requisitos não funcionais</h2>
                <p>
                    <ol>
                        <li>O sistema deve gerar automaticamente o número das contas de um banco. Tal número deve 
                            seguir sequência lógica consecutiva àqueles gerados mesmo após o programa ser encerrado 
                            e posteriormente inicializado;</li>
                        <li>Durante a criação de uma conta corrente, o número da conta e número da agência devem ser 
                            obtidos do banco responsável (escolhido) por tal conta;</li>
                        <li>Depósitos não podem receber valor nulo (zero) ou negativo;</li>
                        <li>Saques não podem exceder o saldo de uma conta;</li>
                        <li>Todas as interações usuário/sistema definidos no item 2.2 devem estar disponíveis em 
                            FORMA de um menu, ou estratégia semelhante/alternativa, para a intervenção do usuário na 
                            escolha de qual funcionalidade será requisita à execução;</li>
                        <li>A interação com o usuário deve ser fácil e de boa aparência;</li>
                        <li>Um banco não pode ser excluído se possuir contas ativas;</li>
                        <li>Os bancos e as contas, devem ter seus dados persistidos (armazenados) para continuidade 
                            das ações do software mesmo após o fechamento e posterior início de execução;</li>
                    </ol>
                </p>
            </div>
            </div>
            <div class="p-5 mb-4 rounded-3">
                <hr>
                <div class="container-fluid py-2">
                    <h2 class="display-5 fw-bold">REQUISITOS TÉCNICOS (obrigatório)</h2>
                    <p class="col-md-8 fs-4">
                        <ol>
                            <li>Uso da linguagem PHP;</li>
                            <li>Uso da GUI para web (HTML, JScript, CSS);</li>
                            <li>Uso do SGBD MySQL e linguagem SQL;</li>
                            <li>Caso não haja implementação de todas as funcionalidades, o sistema deverá executar 
                                para a apresentação daquelas implementadas. Não há como avaliar um programa e 
                                suas funcionalidades, parciais ou totais, sem estar EXECUTANDO</li>
                        </ol> 
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>