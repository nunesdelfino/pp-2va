<table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">N Agência</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_bancos as $banco) : ?>
                <tr>
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
                        <a href="editar.php?id=<?php echo $banco['ID']; ?> ">
                            Editar
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>