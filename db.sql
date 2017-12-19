CREATE TABLE Bodegas (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
direccion VARCHAR(80) NOT NULL,
email VARCHAR(50),
telefono VARCHAR(20),
contacto VARCHAR(20),
fecha VARCHAR(20),
restaurante INT(1) DEFAULT 0,
hotel INT(1) DEFAULT 0
)

CREATE TABLE Vinos (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(30) NOT NULL,
bodega INT(6) NOT NULL,
descripcion VARCHAR(80) NOT NULL,
año VARCHAR(4),
tipo VARCHAR(20),
alcohol VARCHAR(4)
)