<?php
  session_start();
   
if(isset($_POST['logar'])){	

    include ("conexao.php");

	$login = $_POST['login_admin'];
	$senha = $_POST['senha_admin'];
	
	$query = "select login_admin, senha_admin from admin where login_admin='$login' and senha_admin='$senha' ";
	
        $resultado = mysqli_query($con,$query);
 
         $i = 0;
		if (mysqli_num_rows($resultado) == 0){
			echo "<h4>Não foi possível logar</h4>";
		}
		else{
		while ($linha = mysqli_fetch_array($resultado)) {
		   //$login = $linha["login"];
                   //echo $login.", você está logado!";
                  
                    $_SESSION['logado'] = $linha['login_admin'];
                    //echo $_SESSION['logado'];
                   header('Location: areadoadmin.php');
                }
                }
	
}
mysqli_close($con);
?>


