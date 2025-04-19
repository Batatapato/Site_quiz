<?php
include_once("cabecalho.php");

?>
<center><h1> Fique a vontade para escolher ai rapaiz</h1></center>
<?php
$sql = "select * from quizes";
$resp = mysqli_query($conexao, $sql);
?>
<div class="quiz-container">
<?php
while ($linha = mysqli_fetch_assoc($resp)) {
?>
    <div class="quiz-card">
        <a href="fazer_quiz.php?codquiz=<?php echo $linha['codquiz']; ?>">
        <img src="<?php echo $linha['foto_quiz']; ?>" alt="Imagem do resultado">
            <h3><?php echo htmlspecialchars($linha['nomequiz']); ?></h3>
        </a>
    </div>
<?php
}
?>
</div>


<?php
include_once("rodape.php");

?>
