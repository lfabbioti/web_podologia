<!doctype html>
<html lang="pt-br">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

<title>Pé de Rainha</title>
<link rel="stylesheet" href="css/estilo.css">
<!-- cria compatibilidade entre html5 e navegadores antigos -->
<script scr="js/modernizr.js" "></script>
<!-- modifica a escala do dispositivo-->
<meta name="viewport" content="initial-scale-1">
<link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<div id="total">
<header id="topo">
<div id="logo">
<img src="img/logo/logo.png" alt="Logotipo">
</div>
<div id="divBusca">
<!-- <input type="text" id="txtBusca" placeholder="Buscar produtos..."/>
<input type="submit" name="buscar" value="Buscar">-->
</div>
<nav id="menu">
<a href="index.php">Home</a>
<a href="quemsomos.php">Quem Somos</a>
<a href="contato.php">Contato</a>
<a href="agendamento.php">Agendamento</a>	

</nav>
</header>

<section id="carrosel">
<div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img src="img/carrousel/imgp3.jpg" class="d-block w-100" alt="Slider 1">
</div>
<div class="carousel-item">
<img src="img/carrousel/imgp2.jpg" class="d-block w-100" alt="Slider 2">
</div>
<div class="carousel-item">
<img src="img/carrousel/imgp1.jpg" class="d-block w-100" alt="Slider 3">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Anterior</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Próximo</span>
</a>
</div>
<article id="conteudo">    	
<br>
<div id="dest">
<h1 id="ft">
<b>Agendamento</b>
</h1>
</div>

</div>	
<h1><b>____</b></h1>
<div class="page-content">
<div class="col-sm-16">
<div class="box-authentication">
<div class="row">
<div class="col-sm-6">
<div class="box-authentication">
<h3>Já Possuo Cadastrado</h3>
<form action="logar.php" method="post" 
<label for="login">Login</label>
<input id="login" name="login" type="login" class="form-control">
<label for="senha">Senha</label>
<input id="senha" name="senha" type="password"  class="form-control">
<br>
<button type="submit" value="acessar" id="acessar" name="acessar">Acessar</button>
</form>                    </div>
</div>
<div class="col-sm-6">
<div class="box-authentication">
	<h3>Preencha os campos</h3>
<!-- <p>Please enter your email address to create an account.</p> -->
	<form action="agendamentodireto.php" method="post">
<label>Nome</label>
<input type="nome" name="nome" id="nome" required class="form-control">

<label>Horário</label>
<select type="horario" name="horario" id="horario" class="browser-default custom-select mb-2">
  <option value="07:00 ás 09:00">07:00 ás 09:00</option>
  <option value="10:00 ás 13:00">10:00 ás 13:00</option>
  <option value="14:00 ás 17:00">14:00 ás 17:00</option>
</select>
<label>Procedimento</label>
<select type="procedimento" name="procedimento" id="procedimento"class="browser-default custom-select mb-2">
  <option value="Massagem">Massagem</option>
  <option value="Reflexologia">Reflexologia</option>
  <option value="Laserterapia">Laserterapia</option>
  <option value="Depilação">Depilação</option>
  <option value="Manicure">Manicure</option>
  <option value="Pedicure">Pedicure</option>
</select>
<label>Mensagem</label>
<textarea type="mensagem" name="mensagem" id="mensagem" style="text-align:left; margin:0; width:99%; max-width:480px; height:120px;" id="fscf_field2_3" name="message" cols="30" rows="10"></textarea>
<br>
<button type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">Enviar</button>

</form> 
</div>
</div>
</div>
</div>
</div>
</div>
<?php include_once './rodape.php'; ?>
<style>
#ft{
color: #00ace6;
font-family: Lucida Calligraphy;
font-size: 45px;
}
.figuras{
border: 2px dotted #00ace6;
}
</style>