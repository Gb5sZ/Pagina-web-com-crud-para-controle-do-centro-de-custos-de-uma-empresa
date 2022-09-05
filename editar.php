<h1>Editar Registro</h1>
<?php
session_start();
include('verifica_login.php');

    $sql = "SELECT * FROM pa WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>

<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label> Numero da solicitaçao</label>
        <input type="number" name="solicitacao" min="200000" max="300000" value="<?php print $row->solicitacao; ?>" class="form-control" >
    </div>
    <div class="mb-3">
        <label> Numero do Pedido</label>
        <input type="number" name="pedido" min="200000" max="300000" value="<?php print $row->pedido; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> Valor</label>
        <input  type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" value="<?php print $row->valor; ?>"  class="form-control" name="valor">
    </div>
    <div class="mb-3">
        <label> Data da Solicitacao</label>
        <input type="date" name="data1" value="<?php print $row->data1; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> Nome do Solicitante</label>
        <input type="texto" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label> Situaçao</label>
        <input type="texto" name="situacao" value="<?php print $row->situacao; ?>" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
    
</form>