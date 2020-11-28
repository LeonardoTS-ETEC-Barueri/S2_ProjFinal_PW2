CREATE DATABASE db_projfinalpw2
	DEFAULT CHARACTER SET utf8
    DEFAULT COLLATE utf8_general_ci;
    
USE db_projfinalpw2;

CREATE TABLE tbl_produto(
	cod_produto INT UNSIGNED NOT NULL AUTO_INCREMENT,
    foto_produto NVARCHAR(260) NOT NULL,
	nome_produto VARCHAR(100) NOT NULL,
	preco DECIMAL(10,2) NOT NULL,
	descricao VARCHAR(255),
	PRIMARY KEY (cod_produto)
);

CREATE TABLE tbl_estoque(
	cod_produto INT UNSIGNED NOT NULL,
	qtd_produto INT UNSIGNED,
    FOREIGN KEY (cod_produto) REFERENCES tbl_produto(cod_produto) ON DELETE CASCADE
);

CREATE TABLE tbl_venda(
	cod_venda INT UNSIGNED NOT NULL AUTO_INCREMENT,
    data_venda DATETIME NOT NULL DEFAULT NOW(),
    cpf VARCHAR(14),
	PRIMARY KEY (cod_venda)
);

CREATE TABLE tbl_item_venda(
	cod_produto INT UNSIGNED NOT NULL,
    cod_venda INT UNSIGNED NOT NULL,
	qtd_produto INT UNSIGNED NOT NULL,
	preco_unidade DECIMAL(10,2) UNSIGNED NOT NULL,
    preco_total DECIMAL(10,2) UNSIGNED NOT NULL,
    FOREIGN KEY (cod_produto) REFERENCES tbl_produto(cod_produto),
    FOREIGN KEY (cod_venda) REFERENCES tbl_venda(cod_venda)
);

SET FOREIGN_KEY_CHECKS = 0;
DROP TABLE tbl_venda;
DROP TABLE tbl_item_venda;
SET FOREIGN_KEY_CHECKS = 1;


SELECT * FROM tbl_produto;
SELECT * FROM tbl_estoque;
SELECT * FROM tbl_venda;
SELECT * FROM tbl_item_venda;

INSERT INTO tbl_produto
	(cod_produto, foto_produto, nome_produto, preco, descricao)
VALUES
	(DEFAULT, 'controle_game_usb.png', 'Controle Game USB', 19.99, 'Controle bacana para ser o imbatível nos games!'),
    (DEFAULT, 'pelucia_sonic01.png', 'Boneco de Pelúcia do Sonic', 9.99, 'Tenha o ouriço azul mais legal em miniatura, sempre ao seu lado!');
    
INSERT INTO tbl_estoque 
	(cod_produto, qtd_produto)
VALUES
	(1, 5),
    (2, 3);
    
INSERT INTO tbl_venda
	(cod_venda, data_venda, cpf)
VALUES
	(DEFAULT, DEFAULT, '123.456.789-73'),
    (DEFAULT, DEFAULT, '001.687.211-33');
    
INSERT INTO tbl_item_venda
	(cod_produto, cod_venda, qtd_produto, preco_unidade, preco_total)
VALUES
	(1, 1, 1, 19.99, 19.99),
    (1, 2, 1, 19.99, 19.99),
    (2, 2, 1, 9.99, 9.99);
    
SELECT tp.*, qtd_produto
FROM tbl_produto tp
	INNER JOIN tbl_estoque te
		ON tp.cod_produto = te.cod_produto;
        
SELECT tp.*, te.qtd_produto, sum(itv.preco_total) AS 'lucro_total', count(itv.cod_venda) as 'total_vendido'
FROM tbl_produto tp
	INNER JOIN tbl_estoque te
		ON tp.cod_produto = te.cod_produto
	INNER JOIN tbl_item_venda itv
		ON tp.cod_produto = itv.cod_produto
WHERE tp.cod_produto = 1;

SELECT count(itv.cod_venda)
FROM tbl_item_venda itv
WHERE cod_produto = 1;

SELECT count(*)
FROM tbl_item_venda;