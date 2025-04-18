<script>
    const ta_log = localStorage.getItem('ta_logado');

    if (ta_log != 1) {
        console.log(ta_log);
        window.location.href = "../index.php";
    }
</script>
<?php
include("cabecalho.php");
?>
<h1>Comeco dos testes</h1>
<div class='form'>
<form action="Verifica_criar_quiz.php" method="POST" enctype="multipart/form-data">
    <h2> AAAAAA </h2>
    <input class= "inputs" type="text" placeholder="Nome do Quiz" name="nomequiz" required>

    <input class="inputs" type="radio" id="personalidade" name="tipoQuiz" value="Personalidade" required>
    <label for="personalidade">Personalidade</label><br>

    <input class="inputs" type="radio" id="conhecimentos" name="tipoQuiz" value="Conhecimentos Gerais" required>
    <label for="conhecimentos">Conhecimentos Gerais</label>

<input class = "inputs" name="imagem" type="file" accept="image/*" required/>

<div class='botao'>
<input class="btnLogar" type="submit" name="btnLogar" value="Criar">
</div>

</form>
</div>
<?php
include("rodape.php");
?>