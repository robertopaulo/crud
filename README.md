# crud
Antes de Abrir o arquivo Index.php no servidor local, você deve criar um banco de dados e uma tabela.
Caso prefira usar phpMyAdmin:
-Crie um banco de dados chamado: cadastro , utf8_unicode_ci
-Crie uma tabela chamada "pessoa" com 6 atributos: "ID,NOME,ENDERECO,TELEFONE,EMAIL,DATA DE NASCIMENTO"

CREATE DATABASE cadastro;
CREATE TABLE pessoa (
            id  INT NOT NULL PRIMARY KEY,
            nome VARCHAR(200) NOT NULL,
            endereco VARCHAR(20) NOT NULL,
            telefone VARCHAR(16) NOT NULL,
            email VARCHAR(255) NOT NULL,
            dt_nasc DATE NOT NULL
            );
