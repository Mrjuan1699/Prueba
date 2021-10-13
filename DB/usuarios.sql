create database personas;
use personas;
create table tbl_usuarios(
    IdPersona int auto_increment,
    usuario varchar(45),
    contrasena varchar(45),
    primary key(IdPersona)
);