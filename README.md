Clientes:
CREATE TABLE clientes (
id int AUTO_INCREMENT PRIMARY KEY,
cliente VARCHAR(150) NOT NULL,
cidade VARCHAR(100),
estado VARCHAR(50)
)




Produtos:
CREATE TABLE produtos (
id int AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
estado VARCHAR(100),
valor DECIMAL(10,2)
)
