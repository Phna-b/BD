create table Usuario (
id int auto_increment,
nome varchar(20),
sobrenome varchar(50),
email varchar(70),
cpf varchar(15) not null, 
senha varchar(50) not null,
primary key(id)
);
insert into Usuario values ('1','Dalton','Oyama Morais','dalton.oyama@hotmail.com','12345678921','dalton');
select * from usuario;


create table Adm(
login varchar (20),
senha varchar(20),
id int,
primary key(login),
FOREIGN KEY (id) REFERENCES usuario(id));
insert into Adm values('adm','adm','1');


create table Consumo(
nome_usuario varchar(50),
cigarros_consumo_dia int,
cigarros_meta int,
cigarros_gasto_mes float,
cigarro_gasto_mes_meta float,
tipo varchar(20),
preco float,
id int auto_increment,
primary key(nome_usuario),
FOREIGN KEY (id) REFERENCES usuario(id));

select * from consumo;