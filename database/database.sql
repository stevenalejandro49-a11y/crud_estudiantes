CREATE DATABASE IF NOT EXISTS bd_estudiantes;

USE bd_estudiantes;

CREATE TABLE estudiantes (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nombre VARCHAR(100) NOT NULL,

    correo VARCHAR(100) NOT NULL

);