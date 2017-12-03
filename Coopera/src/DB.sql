create table categories (
    id SERIAL PRIMARY KEY,
    nome varchar(255) not null
);

create table collaborators (
    id SERIAL PRIMARY KEY,
    nome varchar(255) not null,
    telefone varchar(25) not null,
    email varchar(50) not null
);

create table clients (
    id SERIAL PRIMARY KEY,
    nome varchar(255) not null,
    telefone varchar(25) not null,
    email varchar(50) not null,
    bio varchar(500)
);

create table schedules (
    id SERIAL PRIMARY KEY,
    dia_data_semana int not null,
    hora float not null
);

create table workshops (
    id SERIAL PRIMARY KEY,
    nome varchar(255) not null,
    locar varchar(255),
    vagas int not null,
    descricao varchar(500) not null,
    periodo_inscr varchar(100) not null,
    collaborator_id bigint(20) unsigned,
    FOREIGN KEY (collaborator_id) REFERENCES collaborators(id)
);

create table registrations (
    id SERIAL PRIMARY KEY,
    nome varchar(255) not null,
    flag int not null default 1,
    schedule_id bigint(20) unsigned,
    workshop_id bigint(20) unsigned,
    client_id bigint(20) unsigned,
    FOREIGN KEY (schedule_id) REFERENCES schedules(id),
    FOREIGN KEY (workshop_id) REFERENCES workshops(id),
    FOREIGN KEY (client_id) REFERENCES clients(id)
);

create table category_workshop ( 
    workshop_id bigint(20) unsigned not null,
    category_id bigint(20) unsigned not null,
    PRIMARY KEY(workshop_id , category_id),
    FOREIGN KEY (workshop_id) REFERENCES workshops(id),
    FOREIGN KEY (category_id) REFERENCES categories(id)
);
