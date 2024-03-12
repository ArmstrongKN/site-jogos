create database EAtec;
use EAtec;
/*
Para alteração rápida no banco de dados, faça os ajustes que deseja adicionar ou mudar, seleciona o código de comando
da tabela para excluir (Ex: drop table player) e selecione a parte da create table que irá criar novamente a tabela

	drop table administrador;
	drop table player;
    drop table pontuacao;
*/

create table administrador (
    nm_admin varchar(30) not null,
	email_admin varchar(50) not null,
    senha_admin varchar(50) not null
);

create table player (
    nm_play varchar(30) not null,
	email_play varchar(50) not null,
    senha_play varchar(50) not null
);

create table pontuacao (
	nm_pontuacao varchar(50) not null,
    pont_adivinha int not null,
    pont_jokenpo int not null,
    pont_parimpar int not null,
    pont_forca int not null
);

insert into administrador values ('Kawan', 'kawan.silva23@etec.sp.gov.br', 'ex123456');
insert into player values ('Exemplo', 'ex.ex@etec.sp.gov.br', 'ex123456');
insert into pontuacao values ('Exemplo', 1, 1, 1, 1);

/* Inserção de dados
	insert into *nome da tabela* values (*1°Coluna*,  *2°Coluna*, *3°Coluna*, etc. );
    Para entender como vai ser ser a inserção dos valores através de todos os registros testando a inserção de dados
    aqui no Workbench antes, ao funcionar a inserção de dados aqui, passará isso para o front-end (VS Code)
    
    Ex de como vai ficar no arquivos php's:
    $conexao = mysqli_connect($host, $usuario, $senha, $bd);
	$inputNm = $_POST['nome'];
	$inputEMail = $_POST['email'];
	$inputCPF = $_POST['cpf'];
	$input_atuacaoEscolhida = $_POST['atuacao'];
    $cadastro = mysqli_query($conexao, "insert into aluno(nm_alu, email_alu, cpf_alu) values('$inputNm', '$inputEMail', '$inputCPF');");
*/

/*
	Conferir a estrutura e os dados das tabelas
	select * from administrador;
	select * from player;
	select * from pontuacao;
    
    Seleção de dados no php
    $selectAlunos = mysqli_query($conexao, "select * from aluno;");
    while ( $escreverAlunos = mysqli_fetch_array($selectAlunos) ) { ... }
*/