<?php
    require_once 'connect.php';

    if(isset($_POST['btn-editar'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];

        $sql = "update tblContato set nome = '$nome', email = '$email', telefone = '$telefone' where id = '$id'";

        if(mysqli_query($connect, $sql)){
            header('Location: ../index.php?edit=ok');
        }else{
            echo 'Erro';
        }
    }
?>