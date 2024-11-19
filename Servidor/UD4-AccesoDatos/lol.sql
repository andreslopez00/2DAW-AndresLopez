DROP DATABASE lol;
CREATE DATABASE lol;

USE lol;

CREATE TABLE champ (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    rol VARCHAR(50) NOT NULL,
    difficulty TINYINT NOT NULL,
    description TEXT
);

-- Insertar registros de ejemplo
INSERT INTO champ (name, rol, difficulty, description) VALUES
('Ahri', 'Mago', 3, 'Campeona que controla las emociones y lanza orbes mágicos.'),
('Garen', 'Tanque', 2, 'Guerrero de Demacia con gran resistencia.'),
('Jinx', 'Tirador', 4, 'Experta en armas y caos.'),
('Thresh', 'Soporte', 5, 'Guardián de almas con habilidades de control.'),
('Yasuo', 'Asesino', 4, 'Maestro espadachín con habilidades de viento.');

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE
);

