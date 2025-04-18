create database escola;

create table usuarios(
    
    codusuario integer auto_increment primary key,
    nomeusuario varchar(80) not null unique,
    senha varchar(15) not null,
    email varchar(80) not null unique

);

insert into usuarios(nomeusuario, senha, email) values('MARCOS ANTÔNIO ESTREMOTE', '123', 'estramote@gmail.com');

create table cursos(

    codcurso integer auto_increment primary key,
    nomecurso varchar(80) not null unique

);

create table sexo(

    codsexo integer auto_increment primary key,
    nomesexo varchar(9) not null unique
);


create table alunos(

    codaluno integer auto_increment primary key,
    noemaluno varchar(80) not null,
    datanasc date not null,
    codcursofk integer references curso(codcurso),
    codsexofk integer references sexo(codsexo)

);

