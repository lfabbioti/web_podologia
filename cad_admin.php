<?php

if (isset($_POST["cadastrar"])) {
    $login =$_POST ["login_admin"];
    $senha =$_POST ["senha_admin"];
    
        
     
    include("conexao.php");
    
  
    
    $sqlcadadmin = "insert into admin (login_admin, senha_admin, cod_admin) values
            ('".$login."','".$senha."',LAST_INSERT_ID())";
    
      if(mysqli_query($con, $sqlcadadmin)){
        echo "Cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possível efetuar o cadastro";
    }
}
?>
