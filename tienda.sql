
DROP DATABASE TIENDA
CREATE DATABASE tienda;
USE TIENDA;
CREATE TABLE DISTRITO (
    ID_DISTRITO CHAR(3) PRIMARY KEY,
    DESCRIPCION VARCHAR(50)
);

CREATE TABLE CLIENTE (
    ID_CLIENTE CHAR(5) PRIMARY KEY,
    NOMBRES VARCHAR(30) NOT NULL,
    PATERNO VARCHAR(30) NOT NULL,
    MATERNO VARCHAR(30) NOT NULL,
    DIRECCION VARCHAR(40),
    FONO CHAR(15),
    ID_DISTRITO CHAR(3),
    EMAIL VARCHAR(50),
    FOREIGN KEY (ID_DISTRITO) REFERENCES DISTRITO(ID_DISTRITO)
);

CREATE TABLE PRODUCTO (
    ID_PRODUCTO CHAR(5) PRIMARY KEY,
    DESCRIPCION VARCHAR(50) NOT NULL,
    PRECIO DECIMAL(8,2) NOT NULL,
    STOCK INT NOT NULL, 
    FECHA_VENC DATE
);

CREATE TABLE BOLETA (
    NUM_BOLETA INT PRIMARY KEY,
    FECHA DATE NOT NULL,
    ID_CLIENTE CHAR(5) NOT NULL,
    FOREIGN KEY (ID_CLIENTE) REFERENCES CLIENTE(ID_CLIENTE)
);

CREATE TABLE DETALLE_BOLETA (
    NUM_BOLETA INT,
    ID_PRODUCTO CHAR(5),
    CANTIDAD INT NOT NULL,
    PRIMARY KEY (NUM_BOLETA, ID_PRODUCTO),
    FOREIGN KEY (NUM_BOLETA) REFERENCES BOLETA(NUM_BOLETA),
    FOREIGN KEY (ID_PRODUCTO) REFERENCES PRODUCTO(ID_PRODUCTO)
);





