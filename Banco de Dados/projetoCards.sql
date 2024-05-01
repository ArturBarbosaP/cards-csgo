create database projetoCards;
use projetoCards;

create table arma(
id int unsigned auto_increment not null primary key,
nome varchar(80) not null,
balas int not null,
dano int not null,
preco int not null,
img varchar(150)
);