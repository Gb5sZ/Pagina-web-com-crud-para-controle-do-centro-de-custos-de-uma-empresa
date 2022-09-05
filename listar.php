<h1>Registro de PAs</h1>
<?php
    $sql = "SELECT * FROM pa AS l
    INNER JOIN cc AS c
    ON l.cc_id_cc = c.id_cc";

    $res = $conn->query($sql);
    
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print"<tr>";
        print "<th>Nº Solicitação</th>";
        print "<th>Centro de Custo</th>";
        print "<th>Nº do Pedido</th>";
        print "<th>Valor</th>";
        print "<th>Data</th>";
        print "<th>Nome</th>";
        print "<th>Situaçao</th>";
        print "<th>Açoes</th>";

        print "</tr>";

        while($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row->solicitacao."</td>";
            print "<td>".$row->centro_de_custo."</td>";
            print "<td>".$row->pedido."</td>";
            print "<td>".$row->valor."</td>";
            print "<td>".$row->data1."</td>";
            print "<td>".$row->nome."</td>";
            print "<td>".$row->situacao."</td>";
            print "<td>
                    <button onclick=\" location.href='?page=editar&id=".$row->id."';\"class='btn btn-success'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";

            print "</tr>";
        }
    }else{
        print "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }

?>
