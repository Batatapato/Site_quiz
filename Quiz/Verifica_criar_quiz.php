<?php

 include("conexao.php");

    $nomequiz = $_POST['nomequiz'];
    $tipoquiz = $_POST["tipoQuiz"];
    $fotoBinaria = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));

        
        if (isset($_FILES['imagem']) && $_FILES['imagem']['error'] === 0) {
            $fotoBinaria = addslashes(file_get_contents($_FILES['imagem']['tmp_name']));
            
    
            $sql = "Insert into quizes(nomequiz,tipoquiz,fotoquiz) values('$nomequiz', '$tipoquiz', '$fotoBinaria')";
        } else {
            echo "Erro: Nenhuma imagem foi enviada ou ocorreu um erro no upload.";
        }
        
        
        
        if(mysqli_query($conexao, $sql)){ 
        $codquiz = mysqli_insert_id($conexao);
        header("Location: Criar_resultados.php?codquiz=" . $codquiz);
        }
        else{
       header("Location:index.php");
    }
       
        

?>
