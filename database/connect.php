<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "contatos";

    $connect = mysqli_connect($servername, $username, $password, $db_name);

    if(mysqli_connect_error()){
        echo "Erro ao tentar se conectar" . mysqli_connect_error;
    }
?>