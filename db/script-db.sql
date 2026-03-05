create database dbsistemacadastro;

use dbsistemacadastro;

create table tbusuarios(

    idUsuario int not null primary key auto_increment,
    nomeUsuario varchar(100) not null,
    emailUsuario varchar(100) not null,
    senhaUsuario varchar(100) not null,
    dataNascUsuario date,
    obsUsuario text
);