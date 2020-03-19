<?php
    require_once 'connect.php';

    if(isset($_POST['btn-cadastro'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
    
        $sql = "insert into tblContato (nome, email, telefone) values ('$nome', '$email', '$telefone')";
    
        if(mysqli_query($connect, $sql)){
            header('Location: ../index.php?cad=ok');
        }else{
            echo "Erro";
        }
    }
?>