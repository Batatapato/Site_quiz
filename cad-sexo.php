<?php
include('cabecalho.php')
?>
 

<h1>Cadastro de sexos</h1>
    <form action='login.php' method='POST'>
    <tr>
            <td>Email:</td>
            <td>
                <input class="form-control" type="text" placeholder="Coloca porra" name="curso" require>
            </td>
        </tr>
        <tr>
            <br>
            <td>Senha:</td>
            <td>
                <input class="form-control" type="password" placeholder="Me mata pelo amor de deus" name="senha" require>
            </td>
        </tr>
    </table>
    <input class="btn btn-primary" type="submit" name="btnLogar" value="Logar">
 
    </form>

<?php
include('rodape.php')
?>