CREATE DATABASE estoque;

use estoque;

CREATE TABLE categorias
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(50) NOT NULL,
  PRIMARY KEY(id)
);

CREATE TABLE produtos
(
  id INT NOT NULL AUTO_INCREMENT,
  nome VARCHAR(150) NOT NULL,
  preco DOUBLE(9,2) NOT NULL,
  quantidade INT NOT NULL,
  categoria_id INT NOT NULL,
  PRIMARY KEY(id)
);

ALTER TABLE produtos ADD CONSTRAINT fk_categorias FOREIGN KEY (categoria_id) REFERENCES categorias(id);

INSERT INTO categorias (nome) VALUES
('Livros'),
('Jogos'),
('Filmes'),
('Revistas');

INSERT INTO produtos (nome, preco, quantidade, categoria_id) VALUES
('O Senhor dos Anéis, Trilogia Completa', 119.50, 10, 3),
('Batman Arkahan City', 65.99, 7, 2),
('Jogador Nº 1', 29.90, 5, 1),
('As Cronicas de Gelo e Fogo - 5 Livros', 199.99, 2, 1),
('O Poderoso Chefão', 89.90, 1, 3);
