<?php
include("cabecalho.php");

$codiguin = $_GET['codquiz'];
$sql = "SELECT * FROM quizes WHERE codquiz = '$codiguin'";
$resultado = mysqli_query($conexao, $sql);
$linha2 = mysqli_fetch_assoc($resultado);

$sql_perguntas = "SELECT * FROM perguntas WHERE codquiz_fk = $codiguin";
$resultado_perguntas = mysqli_query($conexao,$sql_perguntas);


//if($linha['tipoquiz'] == 'Personalidade'){
//}
?>

<div class="quiz-detalhe">
<img src="<?php echo $linha2['foto_quiz']; ?>" alt="Imagem do resultado">
    <h1 class="quiz-titulo"><?php echo htmlspecialchars($linha2['nomequiz']); ?></h1>
</div>
<?php
while($linha = mysqli_fetch_assoc($resultado_perguntas)) {
?>
<div class="quiz-respostas">
<h1> <?php echo htmlspecialchars($linha['textopergunta']); ?></h1>
</div>

<?php
}

include("rodape.php");
?>
