<?php

if (isset($_POST["cadastrar"])) {
    $nome = $_POST["nome_produto"];
    $preco =$_POST["preco_produto"];
    $tamanho =$_POST["tamanho_produto"];
    $tipoproduto =$_POST ["tipo_produto"];
    $codigoproduto = $_POST["codigo_produto"];
    $situacao = "Em_estoque";
   
     
    include("conexao.php");
    
    $sqlcategoria = "insert into categoria (cod_categoria, tipo_produto)
            values(null, '".$tipoproduto."')";  
    
    $sqlproduto = "insert into produto (nome_produto, preco_produto, codigo_produto, situacao, tamanho_produto,cod_categoria) values
            ('".$nome."','".$preco."','".$codigoproduto."','".$situacao."','".$tamanho."',LAST_INSERT_ID())";
    
    if(mysqli_query($con, $sqlcategoria)){
      if(mysqli_query($con, $sqlproduto)){
        echo "Cadastro efetuado com sucesso!";
    }else{
        echo "Não foi possível efetuar o cadastro";
    }
    }
}
?>
<br>
<br>
<a href='areadoadmin.php?"'>Voltar</a>
