# crud
Antes de Abrir o arquivo Index.php no servidor local, você deve criar um banco de dados e uma tabela.	<BR>
Caso prefira usar phpMyAdmin:	<BR>
-Crie um banco de dados chamado: cadastro , utf8_unicode_ci		<BR>
-Crie uma tabela chamada "pessoa" com 6 atributos: "ID,NOME,ENDERECO,TELEFONE,EMAIL,DATA DE NASCIMENTO"	<BR>
	
CREATE DATABASE cadastro;	<BR>
CREATE TABLE pessoa (	<BR>
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,	<BR>
            nome VARCHAR(200) NOT NULL,	<BR>
            endereco VARCHAR(20) NOT NULL,	<BR>
            telefone VARCHAR(16) NOT NULL,	<BR>
            email VARCHAR(255) NOT NULL,	<BR>
            dt_nasc DATE NOT NULL	<BR>
            );	<BR>
