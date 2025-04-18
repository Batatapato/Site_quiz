<?php
include('cabecalho.php')
?>


<h1> Faz teu cadastro ai</h1>

<div class='form'>
    <form action='verifica-cadastro.php' method='POST'>
        <h2>Piru</h2>
        <div class='input'>
                <input class="inputs" type="text" placeholder="nome de usuario" name="nome" require>              
                <input class="inputs" type="email" placeholder="Coloca porra" name="email" require>   
                <input class="inputs" type="password" placeholder="Me mata pelo amor de deus" name="senha" require>
</div>
           
    
    <div class='botao'>
    <input class="btnLogar" type="submit" name="btnLogar" value="Logar">
</div>
    </form>
</div>






<?php
include('rodape.php')
?>
