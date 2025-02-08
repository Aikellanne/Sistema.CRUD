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
            <div class="col">
                <h1>Cadastro</h1>
                <form action="cadastro_script.php" method="POST">
                    <div class="form-group">
                       <label for="nome">Nome Completo</label>
                       <input type="text" class="form-control" name="nome" required>
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="endereco">Endereço</label>
                       <input type="text" class="form-control" name="endereco">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="telefone">Telefone</label>
                       <input type="text" class="form-control" name="telefone">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="telefone">Email</label>
                       <input type="email" class="form-control" name="email">
                    </div>
                    <br>
                    <div class="form-group">
                       <label for="telefone">Data de Nascimento</label>
                       <input type="date" class="form-control" name="data_nascimento">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="submit" class= "btn btn-success">
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