<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>EDITAR USUARIO</title>
</head>
<body>
<nav class="teal">
    <div class="nav-wrapper">
        <div class="container">
        <div class="col s10">
        </div>
        </div>
    </div>
  </nav>
	<div class="container">
		<div class="row">
			<form action="?clase=Document&method=Update" method="post">
			<div class="col s6">
				<br>
                <?php
                     $document=parent::edit_id($_GET['id']);
                ?>
				<div class="form-group">
            <input type="hidden" name="id" value="<?php echo $document->id ?>">              
        </div>
          <div class="form-group">
            <label for="">Nombres</label>
                  <input type="text" class="form-control" name="names" value="<?php echo $document->names ?>">              
                </div>
    
                  
                <div class="form-group">
				  <label for="">Abreviatura</label>
				  <input class="form-control" type="text" name="abreviation" value="<?php echo $document->abreviation ?>">                  
                </div>
                
                <br>
                <button class="btn" type="submit">Actualizar</button>
                <a href="?clase=Document&method=document">Volver</a>

			</div>
		</div>
	</div>

</body>
</html>