<?php

if (isset($_POST["cadastrar"])) {
    $nome =$_POST["nome"];
    $email =$_POST["email"];
    $telefone =$_POST["telefone"];
    $assunto =$_POST["assunto"];
    $comentario =$_POST["comentario"];

    include("conexao.php");
    
    $sqlcontato = "insert into contato (nome, email, telefone, assunto, comentario, id_contato) values
            ('".$nome."','".$email."','".$telefone."','".$assunto."','".$comentario."', LAST_INSERT_ID())";
    
      if(mysqli_query($con, $sqlcontato)){
        echo "Contato efetuado com sucesso, retornaremos em breve!";
    }else{
        echo "Não foi possivel efetuar o contato";
    }
}
?>
<br>
<br>
<a href='index.php?"'>Voltar</a>
