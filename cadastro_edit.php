<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Alteração de Cadastro</title>
</head>
<body>

<?php
include "conexao.php";
$id = $_GET['id'] ?? '';
$sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

$dados = mysqli_query($conn, $sql);
$linha = mysqli_fetch_assoc($dados);

?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="edit_script.php" method="POST">
                    <div class="form-group">
                       <label for="nome">Nome Completo</label>
                       <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="endereco">Endereço</label>
                       <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="telefone">Telefone</label>
                       <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="telefone">Email</label>
                       <input type="email" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="telefone">Data de Nascimento</label>
                       <input type="date" class="form-control" name="data_nascimento" value="<?php echo $linha['data_nascimento']; ?>">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class= "btn btn-success" value="Salvar Alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa']; ?>">
                    </div>
                </form>
                <br>
                <a href="index.php" class="btn btn-secondary">Voltar para o Início</a>
            </div>
        </div>
    </div>

<!-- Optional JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>