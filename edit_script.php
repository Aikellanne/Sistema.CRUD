<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Altereção de Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <?php
            include "conexao.php";
            $id = $_POST['id']; 
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];
            $data_nascimento = $_POST['data_nascimento'];
            
            //$sql = "INSERT INTO `pessoas` (`nome`, `endereco`, `telefone`, `email`, `data_nascimento`) 
            //VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";

            $sql = "UPDATE `pessoas` SET `nome` = '$nome', `endereco` = '$endereco', `telefone`= '$telefone', `email` = '$email', `data_nascimento` = '$data_nascimento' WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)){
                mensagem ("$nome alterado com sucesso!", 'success');
            } else 
                mensagem ("$nome NÃO foi alterado!",'danger');
           ?>
        </div>
        <a href="pesquisa.php" class="btn btn-primary">Voltar</a>
    </div>

<!-- Optional JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>