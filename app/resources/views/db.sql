-- Base de Datos: ferretodo
CREATE DATABASE IF NOT EXISTS ferretodo;
USE ferretodo;

-- Tabla: usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);

-- Usuario administrador por defecto
INSERT INTO usuarios (usuario, password) VALUES ('admin', 'admin');

-- Tabla: productos
CREATE TABLE IF NOT EXISTS productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    stock INT NOT NULL,
    categoria VARCHAR(50) NOT NULL
);

-- Productos de ejemplo
INSERT INTO productos (nombre, precio, stock, categoria) VALUES 
('Martillo Stanley', 149.99, 20, 'Herramientas'),
('Taladro Bosch', 1099.00, 10, 'Eléctricas'),
('Caja de Tornillos (100pz)', 49.50, 100, 'Fijaciones'),
('Broca para Concreto', 25.00, 50, 'Accesorios'),
('Llave Inglesa Ajustable', 89.99, 30, 'Herramientas');
