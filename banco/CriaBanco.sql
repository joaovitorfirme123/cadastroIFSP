-- delete o anco de dados caso exista 
DROP DATABASE IF EXISTS IFSP;

-- Cria Banco de dados caso não exista
CREATE DATABASE IF NOT EXISTS IFSP;

-- selecione banco de dados uso 
USE  IFSP;

-- Cria tabela cidade 
CREATE TABLE cidade
(
    id  INT AUTO_INCREMENT,
    nome  VARCHAR(50),
    estado VARCHAR(02),
    PRIMARY KEY (id)
);

-- cria tabela de cliente
CREATE TABLE cliente
(
    id   INT AUTO_INCREMENT,
    nome  VARCHAR(50),
    email  VARCHAR(50),
    senha  VARCHAR(50),
    ativo  VARCHAR(50),
    id_cidade int,
    primary key (id),
    constraint fk_ClienteCidade foreign key (Id_cidade) references cidade(id)
);