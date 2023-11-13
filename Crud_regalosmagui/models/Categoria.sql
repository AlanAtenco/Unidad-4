
CREATE TABLE IF NOT EXISTS Categoria (
	Id INT NOT NULL AUTO_INCREMENT,
	Nombrecategoria VARCHAR(50) NOT NULL,
    Direccion VARCHAR(70) NOT NULL,
    PRIMARY KEY (Id)
);

insert into Categoria value(1,"niño","calle victoria");
insert into Categoria value(2,"dama","calle allende");
insert into Categoria value(3,"caballero","29 de septiembre");
insert into Categoria value(4,"niña","cda victoria");