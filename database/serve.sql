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

    perfil_id INT,
    sala_id INT,

    comentario TEXT,
    nota DECIMAL(2,1),

    data_avaliacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (perfil_id)
    REFERENCES perfil(id),

    FOREIGN KEY (sala_id)
    REFERENCES salas(id)
);

CREATE TABLE reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,

    sala_id INT NOT NULL,
    perfil_id INT NULL,

    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(14) NOT NULL,
    email VARCHAR(100) NOT NULL,

    data_reserva DATE NOT NULL,
    horario TIME NOT NULL,

    status_reserva ENUM(
        'Pendente',
        'Confirmada',
        'Cancelada'
    ) DEFAULT 'Confirmada',

    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    FOREIGN KEY (sala_id)
    REFERENCES salas(id),

    FOREIGN KEY (perfil_id)
    REFERENCES perfil(id)
);

CREATE TABLE salas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    tipo VARCHAR(50) NOT NULL,
    regiao VARCHAR(50),
    endereco VARCHAR(255) NOT NULL,
    descricao_topo TEXT,
    descricao TEXT,
    avaliacao DECIMAL(2,1) DEFAULT 0.0
);

CREATE TABLE imagens_salas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sala_id INT NOT NULL,
    imagem VARCHAR(255) NOT NULL,

    FOREIGN KEY (sala_id)
    REFERENCES salas(id)
    ON DELETE CASCADE
);