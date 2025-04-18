create database Time;

create table times(
    
    codtime integer auto_increment primary key,
    nomeTime varchar(255) not null unique,
    mascote varchar(255) not null,
    estadio varchar(255) not null unique,
    escudo varchar(255) not null unique

);

insert into times(nomeTime,mascote,estadio,escudo) values("Flamengo","corvo?","maracana","download.png");