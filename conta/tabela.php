<table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">N Conta</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">N Agência</th>
                    <th scope="col">Saldo</th>
                    <th scope="col">Opções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista_contas as $conta) : ?>
                <tr>
                    <td>
                        <?php echo $conta['N_CONTA']; ?>
                    </td>
                    <td>
                        <?php echo $conta['NOME']; ?>
                    </td>
                    <td>
                        <?php echo $conta['CPF']; ?>
                    </td>
                    <td>
                        <?php echo $conta['ENDERECO']; ?>
                    </td>
                    <td>
                        <?php echo nome_agencia($conn, $conta['FK_BANCO_ID']); ?>
                    </td>
                    <td>
                        <?php echo $conta['SALDO']; ?>
                    </td>
                    <td>
                        <!-- O campo com os links para editar e remover -->
                        <a href="editar.php?id=<?php echo $conta['N_CONTA']; ?> ">
                            Editar
                        </a>
                        <a href="remover.php?id=<?php echo $conta['N_CONTA']; ?> ">
                            Remover
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>