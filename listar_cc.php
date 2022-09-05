<h1>Registro de CC</h1>
<div class="lol">
    <?php
    session_start();
include('verifica_login.php');
     ?>
</div>
<?php

    $sql = "SELECT * FROM cc";

    $res = $conn->query($sql);
    
    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print"<tr>";
        print "<th>#</th>";
        print "<th>Centro de Custo</th>";
       

        print "</tr>";

        while($row = $res->fetch_object()){
            print"<tr>";
            print "<td>".$row->id_cc."</td>";
            print "<td>".$row->centro_de_custo."</td>";
            print "<td>
                    <button onclick=\" location.href='?page=editar_cc&id_cc=".$row->id_cc."';\"class='btn btn-success'>Editar</button>
                    
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar_cc&acao=excluir&id_cc=".$row->id_cc."';}else{false;}\" class='btn btn-danger'>Excluir</button>
                    </td>";

            print "</tr>";
        }
    }else{
        print "<p class='alert alert-danger'>Nao encontrou resultados!</p>";
    }

?>
