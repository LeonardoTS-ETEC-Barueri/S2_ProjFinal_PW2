CREATE DATABASE db_projfinalpw2
	DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE db_projfinalpw2;

CREATE TABLE tbl_produto(
	cod_produto INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT,
    foto_produto NVARCHAR(260) NOT NULL,
	nome_produto VARCHAR(100) NOT NULL,
	preco DECIMAL(10,2) NOT NULL,
	descricao VARCHAR(255),
	PRIMARY KEY (cod_produto)
);

CREATE TABLE tbl_estoque(
	cod_produto INT UNSIGNED UNIQUE NOT NULL,
	qtd_produto INT UNSIGNED,
    FOREIGN KEY (cod_produto) REFERENCES tbl_produto(cod_produto)
);

CREATE TABLE tbl_venda(
	cod_venda INT UNSIGNED UNIQUE NOT NULL AUTO_INCREMENT,
    data_venda DATETIME NOT NULL DEFAULT NOW(),
    cpf VARCHAR(14)
);

CREATE TABLE tbl_item_venda(
	cod_produto INT UNSIGNED UNIQUE NOT NULL,
    cod_venda INT UNSIGNED UNIQUE NOT NULL,
	qtd_produto INT UNSIGNED NOT NULL,
	preco_unidade DECIMAL(10,2) UNSIGNED NOT NULL,
    preco_total DECIMAL(10,2) UNSIGNED NOT NULL,
    FOREIGN KEY (cod_produto) REFERENCES tbl_produto(cod_produto),
    FOREIGN KEY (cod_venda) REFERENCES tbl_venda(cod_venda)
);
