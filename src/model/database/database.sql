SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE usuarios(
  ID_Usuario INT PRIMARY KEY AUTO_INCREMENT,
  Nombre VARCHAR(100) NOT NULL,
  Email TINYTEXT NOT NULL,
  Contrasena TEXT NOT NULL,
  Creado_En DATETIME NOT NULL DEFAULT NOW(),
  Ultimo_Login DATETIME NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

CREATE TABLE tareas(
  ID_Tarea INT PRIMARY KEY AUTO_INCREMENT,
  FK_Usuario INT,
  Titulo VARCHAR(100) NULL,
  Descripcion TINYTEXT NOT NULL,
  Fecha_Vencimiento DATETIME NULL,
  Creado_En DATETIME NOT NULL DEFAULT NOW(),
  Completado BOOLEAN DEFAULT FALSE,
  FOREIGN KEY (FK_Usuario) REFERENCES usuarios(ID_Usuario) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;