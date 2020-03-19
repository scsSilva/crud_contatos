<?php

    require_once 'connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "delete from tblContato where id = '$id'";

        if(mysqli_query($connect, $sql)){
            header('Location: ../index.php?del=ok');
        }else{
            echo 'Erro';
        }
    }

?>