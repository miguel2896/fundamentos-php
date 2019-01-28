<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" type="text/css" href="<?php require_once 'vendor\autoload.php'; ?>">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    
    <title>Hola Mundo</title>
  </head>
  <body>
  	<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Bootstrap theme</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  	<div class="container theme-showcase" role="main">
    	<div class="jumbotron">
        	<h1>Theme example</h1>
        	<p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a 	starting point to create something more unique by building on or modifying it.</p>
      	</div>
	</div>

  <div class="container theme-showcase jumbotron" role="main">
    <h2>PDF</h2>
    <?php echo form_open('Prueba/descargar/'); ?>
      <?php
            $id = array(//arreglo donde se especifican los parametros del input='Caja de texto'
              'name'=>'id',
               'placeholder' =>'Ingresa'
            );
            $nombre = array(//arreglo donde se especifican los parametros del input='Caja de texto'
              'name'=>'nombre',
               'placeholder' =>'Ingresa tu usuario'
            );
            $password = array(//arreglo donde se especifican los parametros del input='Caja de texto'
              'name'=>'password',
               'placeholder' =>'Ingresa tu password'
            );
      ?> 
      <?php echo form_label('Id:','id') ?>
      <?php echo form_input($id) ?>
        <br><br>
      <?php echo form_label('Nombre:','nombre') ?>
      <?php echo form_input($nombre) ?>
        <br><br>
      <?php echo form_label('Password:','password') ?>
      <?php echo form_input($password) ?>
        <br><br>
      <?php echo form_submit('','Generar') ?>
      
    <?php echo form_close() ?>  
        </div>
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>