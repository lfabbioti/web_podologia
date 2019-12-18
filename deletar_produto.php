<html>
	<head>
		<title>Editar registro de aluno</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php


    include('conexao.php');

    $cod = $_GET['id'];
    //echo $cod;

   echo "<b>Excluindo Produto".$cod."</b></br></br>";

    $query ="SELECT * FROM produto WHERE cod_produto = $cod";
    
    $result = mysqli_query($con,$query);
 

    if ($result->num_rows > 0) {
        echo "<form method='post' action='deletar_produto_conf.php'>";
        while($linha = mysqli_fetch_array($result)) {

        	echo "<label>Nome do Produto:</label><input required type='text' name='nome_produto' value='".$linha["nome_produto"]."'></input><br>";
        	
                
        	
        	echo "<label>ID do produto:</label><input  type='text' name='cod_produto' readonly='readonly' value='".$linha["cod_produto"]."'></input><br>";
        	echo "<input type='submit' value='Excluir'></input>";

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados para mostrar</b><br><br>";
    }




?>


</body>
</html>