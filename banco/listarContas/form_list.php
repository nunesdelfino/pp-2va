<form method="post">
<div class="form-group row">
        <label for="Id" class="col-sm-2 col-form-label">Nome do Banco:</label>
        <div class="col-sm-10">
            <select class="form-control" id="Id" name="Id">
                <?php 
            $result = busca_bancos($conn);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<option value="'.$row['ID'].'">'.$row['NOME'].'</option>';
            }
            ?>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </div>
</form>