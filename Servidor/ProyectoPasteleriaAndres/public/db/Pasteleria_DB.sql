DROP DATABASE IF EXISTS PasteleriaDB;
CREATE DATABASE PasteleriaDB;

USE PasteleriaDB;

-- Crear tabla de productos
CREATE TABLE productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    categoria VARCHAR(255) NOT NULL
);

-- Crear tabla de clientes
CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    usuario VARCHAR(255) NOT NULL UNIQUE,
    contraseña VARCHAR(255) NOT NULL
);

-- Crear tabla de pedidos
CREATE TABLE pedidos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT NOT NULL,
    producto_id INT NOT NULL,
    cantidad INT NOT NULL,
    FOREIGN KEY (cliente_id) REFERENCES clientes(id),
    FOREIGN KEY (producto_id) REFERENCES productos(id)
);

INSERT INTO productos (nombre, precio, categoria) VALUES
('Tarta de Chocolate', 15.99, 'Tartas'),
('Bollo de Crema', 3.99, 'Bollos'),
('Chocolate con Avellanas', 6.99, 'Chocolates'),
('Dulce de Leche', 4.50, 'Dulces');


INSERT INTO clientes (id, usuario, contraseña) VALUES
('1', 'admin', 'admin'),
('2', 'usuario', 'usuario');


