<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="form_cadprodutos.php" method="post">
            <fieldset>
                <legend id="titulo">Cadastrar Produtos</legend>
                    <div id="grupo">
                        <div id="grupo">
                        <div class="grupo">
                            <label>Nome do Produto</label>
                            <input required class="controle" type="text" name="nome_produto" id="nome">
                        </div>
                        <div class="grupo">
                            <label>Tipo do Produto</label>
                            <input required class="controle" type="text" name="tipo_produto" id="tipo">
                        </div> 
                    </div>
                    <div class="grupo">
                        <label>Preço do Produto</label>
                        <input required class="controle" type="text" name="preco_produto" id="preco">
                    </div>
                    <div class="grupo">
                        <label>Código do Produto</label>
                        <input required class="controle" type="text" name="codigo_produto" id="codigo">
                    </div>   
                    
                    <div class="grupo">
                        <label>Tamanho do Produto</label>
                        <input required class="controle" type="text" name="tamanho_produto" id="tamanho">
                    </div>
                    <div id="grupo">                            
                    <div class="botao">
                        <input type="submit" value="cadastrar" id="cadastrar" name="cadastrar">
                    </div>                 
                    </<div>
                    
                
            </fieldset>  
            
            <!--Estilos -->
            
            <style>
                #titulo{
                   text-align: center;
                   font-size: 25px;
                   padding: auto;
                   display: inline;
                   margin: 15px;
                   font-family: verdana;
                   
                }
                .grupo label{
                   font-family: verdana;
                   margin: 7px;
                   font-size: 12px;
                   display: inline-block;
                   vertical-align: center;
                   display: inline-block;
                   text-align: right;
                   width: 25%
                    
                   
                }
                .controle{
                    margin: 6px;
                    padding: 3px;
                    width: 50%
                    
                }
                .botao{
                    text-align: center;
                    width: auto;
                }
                .separacao{
                    text-align:center;
                }
              

            </style>
            
        </form>
            </body>
</html>