<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Alteração de Cadastro</title>
  </head>
  <body>
    <?php
        include "conexao.php";
        $id = $_GET['id'];
    //Retorna uma linha da tabela que possui o ID correspondente, que foi passado pelo método GET
        $sql = "SELECT * FROM pessoa WHERE id = $id";
        $dados = mysqli_query($conexao,$sql);
        $linha = mysqli_fetch_assoc($dados);
    ?>

  <div class="container">
    <div class="row">
        <div class="col">
        <h1>Cadastro</h1>
    
        <form action="alterar_post.php" method="POST">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" required value="<?php echo $linha ['nome']; ?>">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input type="text" class="form-control" name="endereco" required value="<?php echo $linha ['endereco']; ?>">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" name="telefone" required value="<?php echo $linha ['telefone']; ?>">
            </div>
            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" class="form-control" name="email" required value="<?php echo $linha ['email']; ?>">
                <small id="emailHelp" class="form-text text-muted">Escreva seu email</small>
            </div>
            <div class="form-group">
                <label for="dt_nasc">Data de Nascimento</label>
                <input type="date" class="form-control" name="dt_nasc" required value="<?php echo $linha ['dt_nasc']; ?>">
            </div>
            
            <div class="form-group">
                <input type="submit" class="btn btn-success"  value="Salvar alterações">
                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>">
            </div>
            
        </form>
        <a class="btn btn-danger" href="index.php">Voltar ao início</a>
      </div>
    </div>
  </div>
    
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>
