 

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<fieldset>
<legend>Lista de Registros</legend>

<table border="1" width="100%" style="
    width: 752px;
">
 <tr>
      <th>ID do Produto</th>
      <th>Nome do Produto</th>
      <th>Tipo do Produto</th>
      <th>Preço do produto</th>
      <th>Codigo do Produto</th>
      <th>Tamanho do produto</th>
      <th>Editar Produto</th>
      <th>Excluir produto</th>
      
      
    
     
      
      
      
 </tr>
 
<?php
    

	if(isset($_POST["consultar"])){
            $nome = $_POST['nome_produto'];
            $tipoproduto = $_POST['tipo_produto'];
            $preco = $_POST['preco_produto'];
            $codigoproduto = $_POST['codigo_produto'];
            $tamanho = $_POST['tamanho_produto'];
            
                    
           
         include('conexao.php');
            
            $sqlconsultarproduto = "select * from produto p join categoria c on p.cod_produto= c.cod_categoria where nome_produto='$nome' or tipo_produto='$tipoproduto'";    
            $consultarproduto = mysqli_query($con,$sqlconsultarproduto);
            
            
           $i = 0;
                if (!$consultarproduto|| mysqli_num_rows($consultarproduto) == 0){
			echo "<h4>Nenhum produto Encontrado!</h4>";
		}
		else{
		while ($linha = mysqli_fetch_array($consultarproduto)) {
		   $cod_produto = $linha["cod_produto"];
                   $cod_categoria = $linha["cod_categoria"];
		   $nome = $linha["nome_produto"];
		   $tipoproduto = $linha["tipo_produto"];
		   $preco = $linha["preco_produto"];
                   $codigoproduto = $linha["codigo_produto"];
                   $tamanho = $linha["tamanho_produto"];
		   if ($i % 2 == 0){
			  $cor = "#DDDDDD";
		   }
		   else{
			  $cor = "#FFFFFF";
		   }
         
    ?>
		<tr bgcolor="<?php echo $cor; ?>"
                    <td></td>
                    <td><?php echo $cod_produto; ?></td>
                    <td><?php echo $nome; ?></td>
                    <td><?php echo $tipoproduto; ?></td>
                    <td><?php echo $preco; ?></td>
                    <td><?php echo $codigoproduto; ?></td>
                    <td><?php echo $tamanho; ?></td>
                    
                   
                    
                   
                    
                    <td><?php echo "<a href='editar_produto.php?id=".$linha["cod_produto"]."'>Editar </a>";?></td>
                    <td><?php echo "<a href='deletar_produto.php?id=".$linha["cod_produto"]."'>Excluir </a>";?></td>
                    

		</tr>
		 
		<?php
		   $i++;
                   
		}
	}
  
        }    
?>
</table>
    </body>
</html>