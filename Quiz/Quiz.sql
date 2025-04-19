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
INSERT INTO `quizes` (`codquiz`, `nomequiz`, `tipoquiz`,`fotoquiz`) VALUES
(1, 'Qual personagem de filme você seria?', 'Personalidade','0x89504E470D0A1A0A0000000D49484452000000010000000108060000001F15C4890000000A49444154789C6360000002000100A2F527450000000049454E44AE426082');

INSERT INTO `perguntas` (`codpergunta`, `textopergunta`, `codquiz_fk`) VALUES
(1, 'Você prefere sair com amigos ou ficar em casa?', 1);

INSERT INTO `perguntas` (`textopergunta`, `codquiz_fk`) VALUES
(, 'Você prefere sair com amigos ou ficar em caasa?', 2);



INSERT INTO `respostas_personalidade` (`codresposta_personalidade`, `textoresposta`, `pontosresposta`, `codpergunta_fk`) VALUES
(1, 'Ficar em casa, com um bom livro ou filme', 10, 1),
(2, 'Sair para uma festa com a galera', 20, 1),
(3, 'Depende do meu humor no dia', 15, 1);