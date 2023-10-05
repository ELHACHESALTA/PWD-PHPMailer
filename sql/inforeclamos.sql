/*Estructura de tabla para la tabla reclamo*/
CREATE TABLE reclamo(
    numReclamo int AUTO_INCREMENT,
    tipo varchar(10),
    descripcion varchar(250),
    contacto varchar(60),
    PRIMARY KEY  (numReclamo)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT = 1;