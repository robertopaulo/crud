<?php
            //Credenciais de conexão
            $servidor = "localhost";
            $usuario = "root";  //COLOCAR O SEU USUÁRIO (CASO SEJA DIFERENTE)
            $senha = "";        //COLOCAR A SUA SENHA
            $bd = "cadastro";   

            // Realiza conexão com o servidor
            $conexao=mysqli_connect($servidor, $usuario, $senha, $bd);
            if( !$conexao){ 
                echo "Erro na conexão com o servidor:";
            }
            //Função imprime uma caixa de texto com o valor de $texto, e com a cor especificada por $tipo. 
            function mensagem($texto, $tipo) {
               echo "<div class='alert alert-$tipo' role='alert'> $texto </div>";
            }
?>
