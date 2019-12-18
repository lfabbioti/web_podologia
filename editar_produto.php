<html>
	<head>
		<title>Editar registro de aluno</title>
		<meta charset='utf-8'/>

  
	</head>

	<body>
<?php


    include('conexao.php');

    $cod = $_GET['id'];
    

   echo "<b>Editando dados do Produto ".$cod."</b></br></br>";

    $query ="SELECT * FROM produto WHERE cod_produto = $cod";
    
    $result = mysqli_query($con,$query);
 

    if ($result->num_rows > 0) {
        echo "<form method='post' action='edit_produto_conf.php'>";
        while($linha = mysqli_fetch_array($result)) {

        	echo "<label>Nome do Produto:</label><input required type='text' name='nome_produto' value='".$linha["nome_produto"]."'></input><br>";
        	echo "<label>Preço do Produto:</label><input type='text' name='preco_produto' value='".$linha["preco_produto"]."'></input><br>";
                echo "<label>Cod do Produto:</label><input type='text' name='codigo_produto' value='".$linha["codigo_produto"]."'></input><br>";
                echo "<label>Tamanho do Produto:</label><input type='text' name='tamanho_produto' value='".$linha["tamanho_produto"]."'></input><br>";
                
        	
        	echo "<label>ID do produto:</label><input  type='text' name='cod_produto' readonly='readonly' value='".$linha["cod_produto"]."'></input><br>";
        	echo "<input type='submit' value='salvar'></input>";

        }
            echo "</form>";
    } else {
        echo "<b class='erro'>Sem resultados para mostrar</b><br><br>";
    }




?>


</body>
</html>
<style>
   
.grupo {
    padding: 5px;
    float: center;
    font-family: verdana;
    width: 15%;
    display: inline-block;
 }
</style>
