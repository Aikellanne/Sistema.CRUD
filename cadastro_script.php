<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <?php
            include "conexao.php";
            
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];
            
            $sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) 
            VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";

            if (mysqli_query($conn, $sql)){
                mensagem ("$nome cadastrado com sucesso!", 'success');
            } else 
                mensagem ("$nome NÃO foi cadastrado!",'danger');
           ?>
        </div>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>

<!-- Optional JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>