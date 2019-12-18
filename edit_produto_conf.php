<html>
	<head>
		<title></title>
		<meta charset='utf-8'/>
	</head>

	<body>
           
<?php


    include('conexao.php');
    
    

    $nome = $_POST['nome_produto'];
    $preco = $_POST ['preco_produto'];
    $codigoproduto = $_POST['codigo_produto'];
    $tamanho = $_POST['tamanho_produto'];
    $cod = $_POST['cod_produto'];

    echo "Nome do Produto: ".$nome." <br> Preço do Produto: ".$preco." <br> Codigo do Produto: ".$codigoproduto." <br> Tamanho do Produto: ".$tamanho." </br></br>" ;

    $adc = "UPDATE produto join categoria SET nome_produto='$nome', preco_produto='$preco', codigo_produto='$codigoproduto', tamanho_produto='$tamanho' WHERE cod_produto='$cod'"; 

    $ins = mysqli_query($con,$adc);

    if($ins)
    {
    echo "<b style='color:green'>Produto editado com sucesso!</b> </br><a href='areadoadmin.php'>Voltar</a>";

    }
    else
    {
    echo "Erro </br><a href='areadoaluno.php'>Voltar</a>";

    }
    
    
?>
	</body>
</html>
