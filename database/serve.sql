create database espaco_conecta;

use espaco_conecta;

-- TABELA PERFIL 
create table perfil (
id int primary key NOT NULL AUTO_INCREMENT,
nome varchar(100)NOT NULL,
cpf varchar(12)NOT NULL UNIQUE,
email varchar(100) NOT NULL UNIQUE,
senha varchar(20) NOT NULL
);

CREATE TABLE avaliacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    comentario TEXT,
    nota DECIMAL(2,1),
    data_avaliacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);