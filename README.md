# CRUD
Antes de Abrir o arquivo Index.php no servidor local, você deve criar um banco de dados e uma tabela.	<BR>
Usando o Prompt de comando do mysql, você deve escrever/colar o código abaixo.<br>
	
CREATE DATABASE cadastro;	<BR>
CREATE TABLE pessoa (	<BR>
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,	<BR>
            nome VARCHAR(200) NOT NULL,	<BR>
            endereco VARCHAR(20) NOT NULL,	<BR>
            telefone VARCHAR(16) NOT NULL,	<BR>
            email VARCHAR(255) NOT NULL,	<BR>
            dt_nasc DATE NOT NULL	<BR>
            );	<BR>
	
Se estiver usando em seu Servidor, outro usuário que não ROOT e possua senha diferentes do padrão.<br>
Você deve encontrar no arquivo "conexao.php" as seguintes linhas.<br>
3 $usuario = "root";  //COLOCAR O SEU USUÁRIO (CASO SEJA DIFERENTE)<br>
4 $senha = "";        //COLOCAR A SUA SENHA<br>
E alterar conforme o seu usuário e senha definido.
