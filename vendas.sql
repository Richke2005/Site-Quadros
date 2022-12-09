create database vendas;

use vendas;

create table ADM(
id_adm int auto_increment,
nome varchar(30), 
email varchar(90),
senha varchar(50),
primary key (id_adm)
);

create table produto (
id_produto int,
nome varchar(90),
valor int, 
pedido boolean,
primary key(id_produto)
);

create table cliente (
id_cliente int,
nome varchar(90),
email varchar(100),
tel int, 
primary key(id_cliente)
);

