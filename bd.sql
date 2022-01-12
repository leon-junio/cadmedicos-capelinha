create database sistema_cadmedicos;
use sistema_cadmedicos;
SET SQL_SAFE_UPDATES = 0;
create table medico(
id_med int primary key not null auto_increment,
nome varchar (350) not null,
cpf varchar (11) not null,
senha varchar (45) not null,
cns varchar (15),
data_nasc varchar (14),
sexo varchar (10),
email varchar (250),
telefone varchar (20),
cnes varchar (20),
cbo varchar (20) not null
);

create table info_adm(
id_info int primary key not null,
data_att date not null,
num_acessos int not null,
num_exames int not null,
num_impressoes int not null,
num_total_acoes int not null
);



create table exame_tfd(
id_tfd int primary key not null auto_increment,
id_medico int not null,
foreign key (id_medico) references medico (id_med),
muncipio_origem varchar (60) not null,
DRS varchar (60) not null,
numero int not null,
nome_paciente varchar (160) not null,
identidade_paciente varchar (30) not null,
residencia_paciente varchar (350) not null,
telefone_paciente varchar (11) not null,
cep_paciente varchar (8) not null,
profissao varchar (60) ,
data_nasc_ac varchar (8) ,
nome_ac varchar (160) ,
identidade_ac varchar(30) ,
residencia_ac varchar (350) ,
telefone_ac varchar (11),
cep_ac varchar(8),
relacao_pc varchar (60),
historico varchar (1350) not null,
exame_fisico varchar (1050) not null,
diagnostico varchar (750) not null,
cid varchar (12) not null,
exames_comp varchar (350) not null,
tratamentos_real varchar(550) not null,
trat_exam_indicado varchar (350) not null,
just_imp_tratamento varchar (250) not null,
just_urgencia varchar (350),
just_acompanhante varchar (350),
transporte varchar (250),
observacoes varchar (1250),
localidade varchar (50) not null,
data_atual date not null,
tipo_transporte varchar (60),
local_assistencial varchar (60),
data_assistencial date,
horas_assistencial datetime,
endereco_assistencial varchar (250)
);


create table exame_alto_custo(
id_altocusto int primary key not null auto_increment,
id_medico int not null,
foreign key (id_medico) references medico (id_med),
origem varchar (150) not null,
sia varchar (50) not null,
municipio varchar (60) not null,
numero_prontuario int,
nome_pac varchar (250) not null,
nome_mae_pac varchar (250) not null,
data_nasc_pac date not null,
sexo char not null,
telefone varchar (11) not null,
rua varchar (120) not null,
bairro varchar (50) not null,
cep varchar (8) not null,
numero_casa int not null,
municipio_casa varchar (50) not null,
uf varchar (2) not null,
consulta int  not null,
identidade varchar (50) not null,
justificativa_clinica varchar(1000) not null,
diagnostico_inicial varchar (150) not null,
cid varchar (12) not null,
clinica_solicitante varchar (100) not null,
codigo_clinica int not null,
procedimento_solicitado varchar (150) not null,
codigo_procedimento int not null,
medico_solicitante varchar (250) not null,
crm_med varchar (30) not null,
cpf_med varchar (16) not null
);

create table exame_aih(
id_aih int primary key not null auto_increment,
id_medico int not null,
foreign key (id_medico) references medico (id_med),
nome_unidade varchar (100) not null,
codigo_cnpj varchar (20) not null,
nome_paciente varchar (230) not null,
endereco varchar (450) not null,
municipio varchar (50) not null,
uf varchar (2) not null,
cep varchar (8) not null,
data_nasc_paciente date not null,
sexo char not null,
nome_pai varchar (230) not null,
nome_mae varchar (230) not null,
cpf_med_solicitante varchar (15) not null,
cpf_med_responsavel varchar (15) not null,
data_emissao date not null,
procedimento_sol varchar (50) not null,
aut_cirurgia_eletiva varchar (120) not null,
fornecida_AIH varchar (25) not null,
data_atual date not null,
sinais_sintomas varchar (1200) not null,
condicoes_just varchar (550) not null,
provas_diagnosticas varchar(550) not null,
procedimento_solicitado varchar (350) not null,
cid varchar (12) not null,
clinica varchar (55) not null,
crm_solicitante varchar (50),
data_solicitante date not null
);



create table usuario(
	id int not null primary key auto_increment,
	user  varchar (20) not null,
    senha varchar (125) not null
);

DELIMiTER $
create trigger CREATE_USER_BD
before insert on medico
for each row
begin
insert into usuario (user,senha) values(
new.cpf,
md5(new.senha));
END
$

DELIMITER $
create procedure update_info_acoes ()
begin
update info_adm set data_att = now(), num_total_acoes = num_total_acoes + 1 where id_info like '1'; 
end$
DELIMITER ;
DELIMITER $
create procedure update_info_acess ()
begin
update info_adm set data_att = now(), num_acessos = num_acessos + 1 where id_info like '1'; 
call update_info_acoes(); 
end$
DELIMITER ;
DELIMITER $
create procedure update_info_exames ()
begin
update info_adm set data_att = now(), num_exames = num_exames + 1 where id_info like '1'; 
call update_info_acoes(); 
end$
DELIMITER ;
DELIMITER $
create procedure update_info_impressoes ()
begin
update info_adm set data_att = now(), num_impressoes = num_impressoes + 1 where id_info like '1';
call update_info_acoes(); 
end$
DELIMITER ;

DELIMITER $
create procedure horaSistema()
begin
select now();
call update_info_acoes(); 
end$
DELIMITER ;

call horaSistema();

DELIMITER $
create procedure login (username varchar(20), senha varchar(125))
begin
select u.id from usuario as u 
where u.user like username and u.senha like md5(senha);
call update_info_acoes(); 
call update_info_acess(); 
end$
DELIMITER ;

DELIMITER $
create procedure findExamesTfd (id_med int)
begin
select e.nome_paciente, e.data_atual from exame_tfd as e
where e.id_med like id_med;
call update_info_acoes(); 
end$
DELIMITER ;
DELIMITER $
create procedure findExamesAlc (id_med int)
begin
select e.nome_pac, e.municipio from exame_alto_custo as e
where e.id_med like id_med;
end$
DELIMITER ;
DELIMITER $
create procedure findExamesAih (id_med int)
begin
select e.nome_paciente, e.data_atual from exame_aih as e
where e.id_med like id_med;
call update_info_acoes(); 
end$
DELIMITER ;



insert into info_adm values (1,CURDATE(),0,0,0,0);

insert into medico values (null,'Teste','root','root123456789','1111111111','01/01/1999','N',NULL,NULL,'242424','2424242');

insert into medico values (null,'TesteSas','teste','teste','1111111111','01/01/1999','N',NULL,NULL,'242424','2424242');

insert into medico values (null,'Testsfdsdfas','teste',md5('teste'),'1111111111','01/01/1999','N',NULL,NULL,'242424','2424242');

insert into medico values (null,'14433628670','teste',md5('noel123'),'1111111111','01/01/1999','N',NULL,NULL,'242424','2424242');

select * from medico;
select * from usuario;
select * from info_adm;

select * from medico where id_med =  1;

select * from medico where id_med like 1;


/*SISTEMA DE DADOS */

create database medicos2;
use medicos2;
drop database medicos2;
select * from dados;
CREATE TABLE `dados` (
  `id_med` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(350) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cns` varchar(15) DEFAULT NULL,
  `data_nasc` varchar(14) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `cnes` varchar(20) DEFAULT NULL,
  `cbo` varchar(20) NOT NULL,
  PRIMARY KEY (`id_med`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
