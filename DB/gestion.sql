create database personas;

create table tbl_personas(
    IdPersona int auto_increment,
    DNI varchar(45),
    NOMBRE varchar(45),
    FECNAC date,
    DIR varchar(45),
    TFNO int,
    primary key(IdPersona)
);