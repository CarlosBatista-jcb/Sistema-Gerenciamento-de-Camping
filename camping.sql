CREATE DATABASE IF NOT EXISTS camping;

-- Usar o Banco de Dados `ecommerce`
USE camping;

CREATE TABLE administradores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL
);