<table class="table">
      <!-- Cabeçalho da tabela com as colunas -->
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">N. Agência</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                    <!-- Loop para exibir os dados de cada banco na lista -->
                <?php foreach ($lista_bancos as $banco) : ?>
                <tr>
                          <!-- Exibição dos itens do banco -->
                    <td>
                        <?php echo $banco['NOME']; ?>
                    </td>
                    <td>
                        <?php echo $banco['N_AGENCIA']; ?>
                    </td>
                    <td>
                        <?php echo $banco['ENDERECO']; ?>
                    </td>
                    <td>
                        <!-- O campo com os links para editar e remover -->
                        <a href="/pp/pp-2va/banco/editar.php?id=<?php echo $banco['ID']; ?> ">
                            Editar
                        </a>
                        <a href="/pp/pp-2va/banco/remover.php?id=<?php echo $banco['ID']; ?> ">
                            Remover
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>