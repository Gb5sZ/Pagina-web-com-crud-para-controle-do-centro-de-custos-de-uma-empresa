<?php
session_start();
include('verifica_login.php');

    switch (@$_REQUEST["acao"]){

        case 'cadastrar_cc':
            $centro_de_custo = $_POST["centro_de_custo"];
            

            $sql = "INSERT INTO cc (centro_de_custo) 
            VALUES ('{$centro_de_custo}')";

            $res = $conn->query($sql);
            
            if($res==true){
                print "<script>alert('Registro feito com sucesso');</script>";
                print "<script>location.href='?page=listar_cc';</script>";
            }else{
                print "<script>alert('Nao foi Possivel realizar o registro');</script>";
                print "<script>location.href='?page=listar_cc';</script>";
            }


            break;

        case 'editar_cc':
            $centro_de_custo = $_POST["centro_de_custo"];
            


            $sql = "UPDATE cc SET centro_de_custo='{$centro_de_custo}'

                WHERE 
                    id_cc=".$_REQUEST["id_cc"];

                $res = $conn->query($sql);

                if($res==true){
                print "<script>alert('Editado com sucesso');</script>";
                print "<script>location.href='?page=listar_cc';</script>";
                }else{
                print "<script>alert('Nao foi Possivel Editar');</script>";
                print "<script>location.href='?page=listar_cc';</script>";
                }

                break;
                case 'excluir':
                    $sql = "DELETE FROM cc WHERE id_cc=".$_REQUEST["id_cc"];

                    $res = $conn->query($sql);

                    if($res==true){
                        print "<script>alert('Excluido com sucesso');</script>";
                        print "<script>location.href='?page=listar_cc';</script>";
                        }else{
                        print "<script>alert('Nao foi Possivel Excluir');</script>";
                        print "<script>location.href='?page=listar_cc';</script>";
                        }


                break;
    }