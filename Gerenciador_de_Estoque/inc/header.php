<!DOCTYPE html>
<?php 
 ?>
<html>
<head>
    <style type="text/css">
	

.navnavbar-inverse {
    background-color:#ffc107!important;

}


</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Gerenciador de Estoque</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/bootstrap.min.css">
    <style>
        body {
            padding-top: 50px;
            padding-bottom: 20px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>
<body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container ">
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo BASEURL; ?>home.php" class="navbar-brand">Home</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Produtos <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>produtos">Gerenciar Produtos</a></li>
                    <li><a href="<?php echo BASEURL; ?>produtos/add.php">Novo produto</a></li>
                </ul>
            </li>
          </ul>




          <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    Marcas <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>marcas">Gerenciar Marcas</a></li>
                    <li><a href="<?php echo BASEURL; ?>marcas/add.php">Nova Marca</a></li>
                </ul>
            </li>
          </ul>








 <ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                   Categorias <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>categorias">Gerenciar Categorias</a></li>
                    <li><a href="<?php echo BASEURL; ?>categorias/add.php">Nova Categoria</a></li>
                </ul>
            </li>
          </ul>


<ul class="nav navbar-nav">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                   Mensagens <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?php echo BASEURL; ?>contatos/mensagem.php">Ver Mensagens</a></li>
                    
                </ul>
            </li>
          </ul>



<ul class="nav navbar-nav">
                <li><a href="<?php echo BASEURL; ?>index.php">Loja</a></li>
                
                    <li><a href="<?php echo BASEURL; ?>sair.php">Sair</a></li>
                    
                </ul>
            </li>
          </ul>


        </div>








        <!--/.navbar-collapse -->
      </div>
    </nav>

    <main class="container">
