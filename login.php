<?php
include('cabecalho.php')
?>


<h1> Faz teu login ai</h1>

<div class='form'>
    <form action='verifica-login.php' method='POST'>
        <h2> rola</h2>

               
                <input class="inputs" type="email" placeholder="Coloca porra" name="email" require>
                <input class="inputs" type="password" placeholder="Me mata pelo amor de deus" name="senha" require>
    <div class='botao'>
    <input class="btnLogar" type="submit" name="btnLogar" value="Logar">
</div>

<div class='naotenho'>
    <a href="Criar_conta.php">Não tenho conta</a>
</div>
    </form>
</div>






<?php
include('rodape.php')
?>
