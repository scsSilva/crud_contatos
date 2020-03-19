<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Agenda de Contatos</title>
    <style>
        h4{
            margin: 20px 0;
        }

        .btn-success{
            margin: 10px 0 20px 0;
        }
    </style>
</head>
<body>
    
    <?php
        require_once 'database/connect.php';
    ?>

    <div class="container">
        <h4>Agenda de Contatos</h4>
        <a href="includes/pages/adicionar.php" class="btn btn-success">Adicionar contato</a>
        <?php 
            if(isset($_GET['cad'])){
                if($_GET['cad'] == "ok"){
                    echo "<div class='alert alert-success' role='alert'>Cadastrado com sucesso!</div>";
                }
            }else if(isset($_GET['edit'])){
                if($_GET['edit'] == "ok"){
                    echo "<div class='alert alert-success' role='alert'>Editado com sucesso!</div>";
                }
            }else if(isset($_GET['del'])){
                if($_GET['del'] == "ok"){
                    echo "<div class='alert alert-success' role='alert'>Excluído com sucesso!</div>";
                }
            }
        ?>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                $sql = "select * from tblContato";
                $result = mysqli_query($connect, $sql);
                while($dados = mysqli_fetch_array($result)){ 
                ?>
                <tr>
                    <th><?php echo $dados['nome']; ?></th>
                    <th><?php echo $dados['email']; ?></th>
                    <th><?php echo $dados['telefone']; ?></th>
                    <th>
                        <a href="includes/pages/editar.php?id=<?php echo $dados['id']; ?>" class="btn btn-warning">Editar</a>
                        <a href="database/deleteContato.php?id=<?php echo $dados['id'] ?>" class="btn btn-danger">Deletar</a>
                    </th>
                </tr>

                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <?php
        include_once 'includes/imports.php';
    ?>
</body>
</html>