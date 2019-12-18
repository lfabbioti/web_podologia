<?php

if (isset($_POST["cadastrar"])) {
    $nome =$_POST["nome"];
    $horario =$_POST["horario"];
    $procedimento =$_POST["procedimento"];
    $mensagem =$_POST["mensagem"];


    include("conexao.php");
    
    $sqlagendamento = "insert into agendamento (nome, horario, procedimento, mensagem, id_agendamento) values
            ('".$nome."','".$horario."','".$procedimento."','".$mensagem."', LAST_INSERT_ID())";
    
      if(mysqli_query($con, $sqlagendamento)){
        echo "agendamento efetuado com sucesso, retornaremos em breve!";
    }else{
        echo "Não foi possivel efetuar o agendamento";
    }
}
?>
<br>
<br>
<a href='index.php?"'>Voltar</a>
