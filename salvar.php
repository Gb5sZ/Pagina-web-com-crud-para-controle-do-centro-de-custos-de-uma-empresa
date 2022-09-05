<?php
session_start();
include('verifica_login.php');
    switch (@$_REQUEST["acao"]){

        case 'cadastrar':
            $cc_id_cc = $_POST["cc_id_cc"];
            $solicitacao = $_POST["solicitacao"];
            $pedido = $_POST["pedido"];
            $valor = $_POST["valor"];
            $data1 = $_POST["data1"];
            $nome = $_POST["nome"];
            $situacao = $_POST["situacao"];

            $sql = "INSERT INTO pa (cc_id_cc, solicitacao, pedido, valor, data1, nome, situacao) 
            VALUES ('{$cc_id_cc}','{$solicitacao}', '{$pedido}', '{$valor}', '{$data1}', '{$nome}', '{$situacao}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Registro feito com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else{
                print "<script>alert('Nao foi Possivel realizar o registro');</script>";
                print "<script>location.href='?page=listar';</script>";
            }


            break;

        case 'editar':
           
            $solicitacao = $_POST["solicitacao"];
            $pedido = $_POST["pedido"];
            $valor = $_POST["valor"];
            $data1 = $_POST["data1"];
            $nome = $_POST["nome"];
            $situacao = $_POST["situacao"];
            


            $sql = "UPDATE pa SET solicitacao='{$solicitacao}', pedido='{$pedido}', valor='{$valor}', data1='{$data1}', nome='{$nome}', situacao='{$situacao}'

                WHERE 
                    id=".$_REQUEST["id"];

                $res = $conn->query($sql);

                if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
                }else{
                print "<script>alert('Nao foi Possivel Editar');</script>";
                print "<script>location.href='?page=listar';</script>";
                }

                break;
                case 'excluir':
                    $sql = "DELETE FROM pa WHERE id=".$_REQUEST["id"];

                    $res = $conn->query($sql);

                    if($res==true){
                        print "<script>alert('Excluido com sucesso');</script>";
                        print "<script>location.href='?page=listar';</script>";
                        }else{
                        print "<script>alert('Nao foi Possivel Excluir');</script>";
                        print "<script>location.href='?page=listar';</script>";
                        }


                break;
    }