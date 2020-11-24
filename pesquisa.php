<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Pesquisar</title>
  </head>
  <body>
  <div class="container">
    <div class="row">
        <div class="col">
        <h1 class="display-4">Pesquisar</h1>
        
        <?php
          //Verifica se há alguma palavra a ser perquisada, através do input de nome 'busca'
        if(isset($_POST['busca'])){
            $pesquisa = $_POST['busca'];
        } else {
            $pesquisa = '' ;
        }
        include "conexao.php";
          //Realiza uma consulta, com o valor passado no INPUT
        $sql = "SELECT * FROM pessoa WHERE nome LIKE '%$pesquisa%'";
        $dados = mysqli_query($conexao,$sql);
        ?>
        <nav class="navbar navbar-light bg-light">
        <form class="form-inline" action="pesquisa.php" method="POST">
            <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
        </nav>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Endereço</th>
                <th scope="col">Telefone</th>
                <th scope="col">E-mail</th>
                <th scope="col">Data de Nascimento</th>
                <th scope="col">Alterar/Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
              //Laço que Retorna uma linha da tabela correspondente a Busca, a cada iteração.
                while($linha = mysqli_fetch_assoc($dados)) {
                    $id =$linha['id'];
                    $nome =$linha['nome'];
                    $endereco =$linha['endereco'];
                    $telefone =$linha['telefone'];
                    $email =$linha['email'];
                    $dt_nasc=$linha['dt_nasc'];
                    echo " 
                    <tr>
                        <th scope='row'>$id</th>
                        <td>$nome</td>
                        <td>$endereco</td>
                        <td>$telefone</td>
                        <td>$email</td>
                        <td>$dt_nasc</td>
                        <td width=150px>
                            <a href='alterar.php?id=$id' class='btn btn-success btn-sm'>Alterar</a> 
                            <a href='#'class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                            onclick=" .'"' ."pegar_dados($id, '$nome')" .'"' .">Excluir</a>
                            </td>
                    </tr>";
                }
            ?>
            </tbody>
            </table>
            <a href="index.php" class=" btn btn-primary">Voltar</a>
        </div>
    </div>
  </div>
    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLabel">Confirmação de exclusão</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="excluir_post.php" method="POST">
               <p>Deseja realmente excluir cadastro de <b id="nome_pessoa">Nome do pessoa</b>?</p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
            <input type="hidden" name="nome" id="nome_p" value="">
            <input type="hidden" name="id" id="id" value="">
            <input type="submit" class="btn btn-danger" value="Sim">
            </form>
        </div>
    </div>
    </div>
    <script type="text/javascript">
        function pegar_dados(id, nome) {
            document.getElementById('nome_pessoa').innerHTML = nome;
            document.getElementById('nome_p').value = nome;
            document.getElementById('id').value = id;
        }
      </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
 </body>
</html>



