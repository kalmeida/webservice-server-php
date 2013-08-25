CREATE DATABASE IF NOT EXISTS WebService;
USE WebService;

DROP TABLE IF EXISTS Telefone;
DROP TABLE IF EXISTS Funcionario;
DROP TABLE IF EXISTS Funcao;

/** Cria a table Funcao **/
CREATE TABLE IF NOT EXISTS Funcao(
	Id INT AUTO_INCREMENT PRIMARY KEY,
	Cargo VARCHAR(50) NOT NULL,
	Descricao VARCHAR(200) DEFAULT NULL
);

/** Popular a tabela Funcao **/
INSERT INTO Funcao(Id, Cargo, Descricao) VALUES(1, 'Programador 1', 'Programador de Sistemas Nível 1');
INSERT INTO Funcao(Id, Cargo, Descricao) VALUES(2, 'Programador 2', 'Programador de Sistemas Nível 2');
INSERT INTO Funcao(Id, Cargo, Descricao) VALUES(3, 'Programador 3', 'Programador de Sistemas Nível 3');
INSERT INTO Funcao(Id, Cargo, Descricao) VALUES(4, 'Programador 3', 'Programador de Sistemas Nível 4');

/** Cria a table Funcionario **/
CREATE TABLE IF NOT EXISTS Funcionario(
	Id INT AUTO_INCREMENT PRIMARY KEY,
	Nome VARCHAR(200) NOT NULL,
	Idade INT NOT NULL,
	Email VARCHAR(100) DEFAULT NULL,
	IdFuncao INT NOT NULL,
	CONSTRAINT fk_funFuncao FOREIGN KEY(IdFuncao) REFERENCES Funcao(Id) ON UPDATE CASCADE
);

/** Popular a tabela funcionario **/
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(1, 'Cássio Almeida', 23, 'cassio@email.com', 2);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(2, 'João da Silva', 30, 'joao@email.com.br', 1);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(3, 'Maria Souza', 20, 'maria@email.com.br', 2);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(4, 'Fernando Guedes', 27, 'fernando@email.com.br', 1);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(5, 'Aline Morais', 29, 'aline@email.com.br', 3);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(6, 'Marcos Ferreira', 27, 'marcos@email.com.br', 3);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(7, 'Joelma Ferreira', 32, 'joelma@email.com.br', 1);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(8, 'Fernanda Gular', 22, 'fernanda@email.com.br', 4);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(9, 'Mario Mendes', 37, 'mario@email.com.br', 4);
INSERT INTO Funcionario(Id, Nome, Idade, Email, IdFuncao) VALUES(10, 'Jão Batista', 35, 'joao.batista@email.com.br', 2);

/** Cria a tabela Telefone **/
CREATE TABLE IF NOT EXISTS Telefone(
	Id INT AUTO_INCREMENT PRIMARY KEY,
	IdFuncionario INT NOT NULL,
	DDD INT NOT NULL,
	Numero INT NOT NULL,
	CONSTRAINT fk_telFuncionario FOREIGN KEY(IdFuncionario) REFERENCES Funcionario(Id) ON UPDATE CASCADE
);

/** Popular a tabela Telefone **/
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(1, 11, 999988888);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(2, 11, 977977888);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(3, 11, 969966686);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(4, 11, 977777555);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(9, 11, 966688888);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(5, 11, 955551111);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(6, 11, 977733336);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(7, 11, 966633322);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(8, 11, 922558877);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(1, 11, 944115522);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(3, 11, 963258741);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(4, 11, 987654321);
INSERT INTO Telefone(IdFuncionario, DDD, Numero) VALUES(6, 11, 959872547);