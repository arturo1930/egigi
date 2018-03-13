--CARGA DE BASE DE DATOS

CREATE TABLE CONTACTO (
                idContacto BIGINT AUTO_INCREMENT NOT NULL,
                correo VARCHAR(256) NOT NULL,
                telefono VARCHAR(30) NOT NULL,
                mensaje VARCHAR(1000) NOT NULL,
                leido BOOLEAN NOT NULL,
                PRIMARY KEY (idContacto)
);


CREATE TABLE USUARIO (
                idUsuario BIGINT AUTO_INCREMENT NOT NULL,
                credencial VARCHAR(256) NOT NULL,
                nombre VARCHAR(50) NOT NULL,
                correo VARCHAR(256) NOT NULL,
                PRIMARY KEY (idUsuario)
);


CREATE TABLE PROVEEDOR (
                idProveedor BIGINT NOT NULL,
                idUsuario BIGINT NOT NULL,
                nombre VARCHAR(100) NOT NULL,
                webUrl VARCHAR(256),
                PRIMARY KEY (idProveedor)
);


CREATE TABLE PARRAFO_PROVEEDOR (
                idParrafoProveedor BIGINT AUTO_INCREMENT NOT NULL,
                idProveedor BIGINT NOT NULL,
                contenido VARCHAR(1000) NOT NULL,
                PRIMARY KEY (idParrafoProveedor)
);


CREATE TABLE BLOG (
                idBlog BIGINT AUTO_INCREMENT NOT NULL,
                idUsuario BIGINT NOT NULL,
                nombre VARCHAR(100) NOT NULL,
                img VARCHAR(50) NOT NULL,
                imgAlt VARCHAR(200) NOT NULL,
                fecha DATE NOT NULL,
                hora TIME NOT NULL,
                PRIMARY KEY (idBlog)
);


CREATE TABLE COMENTARIO (
                idComentario BIGINT AUTO_INCREMENT NOT NULL,
                idBlog BIGINT NOT NULL,
                nombre VARCHAR(100) NOT NULL,
                correo VARCHAR(256) NOT NULL,
                comentario VARCHAR(1000) NOT NULL,
                estado INT NOT NULL,
                PRIMARY KEY (idComentario)
);


CREATE TABLE PARRAFO (
                idParrafo BIGINT AUTO_INCREMENT NOT NULL,
                idBlog BIGINT NOT NULL,
                contenido VARCHAR(1000) NOT NULL,
                PRIMARY KEY (idParrafo)
);


ALTER TABLE BLOG ADD CONSTRAINT usuario_blog_fk
FOREIGN KEY (idUsuario)
REFERENCES USUARIO (idUsuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PROVEEDOR ADD CONSTRAINT usuario_proveedor_fk
FOREIGN KEY (idUsuario)
REFERENCES USUARIO (idUsuario)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PARRAFO_PROVEEDOR ADD CONSTRAINT proveedor_parrafo_proveedor_fk
FOREIGN KEY (idProveedor)
REFERENCES PROVEEDOR (idProveedor)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE PARRAFO ADD CONSTRAINT blog_parrafo_fk
FOREIGN KEY (idBlog)
REFERENCES BLOG (idBlog)
ON DELETE NO ACTION
ON UPDATE NO ACTION;

ALTER TABLE COMENTARIO ADD CONSTRAINT blog_comentario_fk
FOREIGN KEY (idBlog)
REFERENCES BLOG (idBlog)
ON DELETE NO ACTION
ON UPDATE NO ACTION;
