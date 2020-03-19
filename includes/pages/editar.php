<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <title>Editar Contato</title>
</head>
<body>
    <?php
        include_once '../../database/connect.php';

        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "select * from tblContato where id = '$id'";
            $result = mysqli_query($connect, $sql);
            $dados = mysqli_fetch_array($result);
        }
    ?>

    <div class="container">
        <h4>Editar contato</h4>

        <form action="../../database/updateContato.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $dados['id'] ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $dados['nome'] ?>">
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $dados['email'] ?>">
            </div>

            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $dados['telefone'] ?>">
            </div>

            <button type="submit" name="btn-editar" class="btn btn-warning">Editar</button>
        </form>
    </div>

    <script type="text/javascript">
        $('#telefone').keypress().mask('(00) 00000-0000');
    </script>

    <?php
        include_once '../imports.php';
    ?>
</body>
</html>