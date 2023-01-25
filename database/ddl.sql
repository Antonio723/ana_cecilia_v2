drop database AnaCecilia;
create database AnaCecilia;
use AnaCecilia;

create table AnaCecilia.doacao(
	id int auto_increment primary key,
    nome varchar(255),
    email varchar(255),
    telefone varchar(255),
    tipoDoacao varchar(255),
    info varchar(255)
);


insert into AnaCecilia.doacao(nome,email,telefone,tipoDoacao) values("teste","teste@email", "11994136466","0 1 2");

select * from AnaCecilia.doacao;


