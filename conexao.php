<?php
            $servidor = "localhost";
            $usuario = "root";  //COLOCAR O SEU USUÁRIO (CASO SEJA DIFERENTE)
            $senha = "";        //COLOCAR A SUA SENHA
            $bd = "cadastro";   

            // conectar
            $conexao=mysqli_connect($servidor, $usuario, $senha, $bd);
            if( !$conexao){ 
                echo "Erro na conexão com o servidor:";
            }


           function mensagem($texto, $tipo) {
               echo "<div class='alert alert-$tipo' role='alert'> $texto </div>";
           }
?>
