create table if not exists tblPessoa(
    id int not null primary key,
    nome varchar(100) not null,
    email varchar(45) not null,
    telefone varchar(20) not null
) character set = utf8
