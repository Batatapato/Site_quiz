<?php
include("conexao.php"); // Arquivo com a conexão ao banco de dados
if(isset($_GET["codquiz"])){
    $codquiz = $_GET["codquiz"];
}else{
$codquiz = $_POST['codquiz_fk'];
}
$Quantidade_perguntas = $_POST['Quantidade_perguntas'];
$textoPergunta = $_POST['pergunta'];
$sql_pergunta = "INSERT INTO perguntas(textopergunta, codquiz_fk) VALUES ('$textoPergunta', '$codquiz')";
$resultado = mysqli_query($conexao,$sql_pergunta);

$cod_pergunta_fk = mysqli_insert_id($conexao);


$Respostas = $_POST['Resposta'];
$Favorecimentos = $_POST['pontos_resposta'];



for ($i = 0; $i < count($Respostas); $i++) {

    $resposta = $Respostas[$i];
    $favorecimento = $Favorecimentos[$i];
    $sql = "INSERT INTO RESPOSTAS_PERSONALIDADE(textoresposta,pontosresposta,codpergunta_fk) VALUES ('$resposta','$favorecimento','$cod_pergunta_fk')";

    mysqli_query($conexao,$sql);
}

echo "Resultados inseridos com sucesso!";
$Quantidade_perguntas +=1;

    header("Location: Criar_perguntas.php?codquiz=" . $codquiz."&Quantidade_perguntas=".$Quantidade_perguntas);


?>
