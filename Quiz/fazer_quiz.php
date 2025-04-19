<?php
include("cabecalho.php");

$codiguin = $_GET['codquiz'];
$sql = "SELECT * FROM quizes WHERE codquiz = '$codiguin'";
$resultado = mysqli_query($conexao, $sql);
$linha2 = mysqli_fetch_assoc($resultado);

$sql_perguntas = "SELECT * FROM perguntas WHERE codquiz_fk = $codiguin";
$resultado_perguntas = mysqli_query($conexao, $sql_perguntas);



?>

<div class="quiz-detalhe">
    <img src="<?php echo $linha2['foto_quiz']; ?>" >
    <h1 class="quiz-titulo"><?php echo htmlspecialchars($linha2['nomequiz']); ?></h1>
</div>
<?php
while ($linha = mysqli_fetch_assoc($resultado_perguntas)) {
    if ($linha2['tipoquiz'] == 'Personalidade') {
        $cod_pergunta = $linha['codpergunta'];
        $sql_respostas = "SELECT * FROM respostas_personalidade WHERE codpergunta_fk = $cod_pergunta ";
        $resultado_respostas = mysqli_query($conexao, $sql_respostas);
    }
    ?>
    <div class="quiz-pergunta">

    <img src="<?php echo $linha['FOTO_PERGUNTA']; ?>" alt="Imagem">
        <h1> <?php echo htmlspecialchars($linha['textopergunta']); ?></h1>

    </div>
<div class = "quiz-respostas">
    <?php
    while ($linha_respostas = mysqli_fetch_assoc($resultado_respostas)) {
        ?>
        <button><?php echo $linha_respostas['textoresposta']; ?></button>
        <?php

    }
    ?>
</div>
    <?php
}

include("rodape.php");
?>