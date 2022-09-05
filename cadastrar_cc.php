<h1>Cadastrar CC</h1>

<form action="?page=salvar_cc" method="POST">
    <input type="hidden" name="acao" value="cadastrar_cc">
    <div class="mb-3">
        <label> Centro de custo:</label>
        <input type="number" name="centro_de_custo" min="1000" max="9000" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    
</form>