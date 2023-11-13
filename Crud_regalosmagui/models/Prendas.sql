
Create database if not exists regalosmagui;
use regalosmagui;

CREATE TABLE IF NOT EXISTS Prendas (
	IdPrenda INT NOT NULL AUTO_INCREMENT,
    Marcaid INT (20),
    categoriaid INT(20),
    Precio VARCHAR(10) NOT NULL,
    DescripcionProducto VARCHAR(70) NOT NULL,
    Nombre Varchar(50),
    PRIMARY KEY (idPrenda)
);
insert into Prendas value(1,345,2,"50","playera de dama con floresitas ","payera");
insert into Prendas value(2,223,3,"350","chamarra pluma de ganzo","chamarra");
insert into Prendas value(3,134,1,"200","mameluco sonyc talla-14","mameluco");
insert into Prendas value(4,136,4,"200","playera de ladybog talla-15","payera");
