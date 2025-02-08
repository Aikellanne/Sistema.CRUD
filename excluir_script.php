<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Exclusão de Cadastro</title>
</head>
<body>
    <div class="container">
        <div class="row">
           <?php
            include "conexao.php";
            $id = $_POST['id']; 
            $nome = $_POST['nome'];

            $sql = "DELETE from `pessoas` WHERE cod_pessoa = $id";

            if (mysqli_query($conn, $sql)){
                mensagem ("$nome excluído com sucesso!", 'success');
            } else 
                mensagem ("$nome NÃO foi excluído!",'danger');
           ?>
        </div>
        <a href="index.php" class="btn btn-primary">Voltar</a>
    </div>

<!-- Optional JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>