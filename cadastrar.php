<h1>Cadastrar PA</h1>

<form action="?page=salvar" method="POST">
    
    <div class="mb-3">
        <label> Escolha o centro de custo:</label>
        <select name="cc_id_cc" class="form-control">
            <?php           
session_start();
include('verifica_login.php');
 
                $sql = "SELECT * FROM cc";
                $res = $conn->query($sql);
                while($row = $res->fetch_object()){
                    print "<option value='".$row->id_cc."'>";
                    print $row->centro_de_custo."</option>";
                }
            ?>
    </div>

    <div class="mb-3">
    <input type="hidden" name="acao" value="cadastrar">
        <label> Numero da solicitaçao:</label>
        <input type="number" name="solicitacao" min="200000" max="300000" class="form-control">
    </div>
    <div class="mb-3">
        <label> Numero do Pedido:</label>
        <input type="number" name="pedido" min="200000" max="300000" class="form-control">
    </div>
    <div class="mb-3">
        <label> Valor:</label>
        <input  type="number" pattern="[0-9]+([,\.][0-9]+)?" min="0" step="any" class="form-control" name="valor">
    </div>
    <div class="mb-3">
        <label> Data da Solicitacao:</label>
        <input type="date" name="data1" class="form-control">
    </div>
    <div class="mb-3">
        <label> Nome do Solicitante:</label>
        <input type="texto" name="nome" class="form-control">
    </div>
    <div class="mb-3">
        <label> Situaçao:</label>
        <input type="texto" name="situacao" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>