create database Quiz;

CREATE TABLE quizes (
    codquiz INT AUTO_INCREMENT PRIMARY KEY,
    nomequiz VARCHAR(80) NOT NULL,
    tipoquiz VARCHAR(80) NOT NULL,
    foto_quiz varchar(255) NOT NULL
);

CREATE TABLE perguntas (
    codpergunta INT AUTO_INCREMENT PRIMARY KEY,
    textopergunta VARCHAR(255) NOT NULL,
    FOTO_PERGUNTA VARCHAR(255),
    codquiz_fk INT NOT NULL,
    FOREIGN KEY (codquiz_fk) REFERENCES quizes(codquiz)
);

CREATE TABLE respostas_personalidade (
    codresposta_personalidade INT AUTO_INCREMENT PRIMARY KEY,
    textoresposta VARCHAR(80),
    pontosresposta INT NOT NULL,
    codpergunta_fk INT NOT NULL,
    FOREIGN KEY (codpergunta_fk) REFERENCES perguntas(codpergunta)
);

CREATE TABLE respostas (
    codresposta INT AUTO_INCREMENT PRIMARY KEY,
    textoresposta VARCHAR(80),
    resposta_certa BOOLEAN NOT NULL,
    codpergunta_fk INT NOT NULL,
    FOREIGN KEY (codpergunta_fk) REFERENCES perguntas(codpergunta)
);
Create TABLE resultados(
    codresultado INT AUTO_INCREMENT PRIMARY KEY,
    titulo_resultado VARCHAR(80) NOT NULL,
    descricao_resultado VARCHAR(255) NOT NULL,
    foto_resultado VARCHAR(255) NOT NULL,
    codquiz_fk INT NOT NULL,
    pontuacao_necessaria int not null,
    FOREIGN KEY (codquiz_fk) REFERENCES quizes(codquiz)
);
