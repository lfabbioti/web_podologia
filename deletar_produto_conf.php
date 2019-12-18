<html>
	<head>
		<title></title>
		<meta charset='utf-8'/>
	</head>

	<body>
<?php


    include('conexao.php');

    $nome = $_POST['nome_produto'];
    $cod = $_POST['cod_produto'];
    $situacao = 'Sem_estoque';
    

     $query = "UPDATE produto SET situacao='$situacao' WHERE cod_produto='$cod'"; 

    $ins = mysqli_query($con,$query);

    if($ins)

     {
    echo "<b style='color:green'>Produto editado com sucesso!</b> </br><a href='areadoadmin.php'>Voltar</a>";

    }
    else
    {
    echo "<b style='color:red'>Não foi possível editar o Aluno!</b> </br><a href='areadoadmin.php'>Voltar</a>";

    }
    



?>
	</body>
</html>
