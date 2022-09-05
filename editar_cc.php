<h1>Editar Registro</h1>
<?php
    $sql = "SELECT * FROM cc WHERE id_cc=".$_REQUEST["id_cc"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar_cc" method="POST">
    <input type="hidden" name="acao" value="editar_cc">
    <input type="hidden" name="id_cc" value="<?php print $row->id_cc; ?>">
    <div class="mb-3">
        <label> Centro de Custo</label>
        <input type="number" name="centro_de_custo" min="1000" max="9999" value="<?php print $row->centro_de_custo; ?>" class="form-control" >
    </div>
    
    <button type="submit" class="btn btn-primary">Salvar</button>
    
</form>