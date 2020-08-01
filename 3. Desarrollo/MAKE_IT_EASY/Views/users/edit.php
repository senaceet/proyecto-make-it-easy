<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>EDITAR USUARIO</title>
</head>
<body>
<nav class="teal">


	<div class="container">
		<div class="row">
			<form action="?clase=Users&method=Update" method="post">
			<div class="col s6">
				<br>
                <?php
                     $users=parent::edit_id($_GET['id']);
                ?>
                <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $document->id ?>">              
        </div>
				<div class="input-field">
				  <label for="">Documento</label>
				  <input type="text" id="document_number" name="document_number" class="form-control" value="<?php echo $users->document_number ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Nombres</label>
				  <input type="text" id="names" class="form-control" name="names" value="<?php echo $users->names ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Apellidos</label>
				  <input type="text" id="last_names" class="form-control" name="last_names" value="<?php echo $users->last_names ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Fecha de Nacimiento</label>
				  <input type="text" id="birthdate" class="form-control" name="birthdate" value="<?php echo $users->birthdate ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Edad</label>
				  <input type="text" id="age" class="form-control" name="age" value="<?php echo $users->age ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Correo</label>
				  <input type="text" placeholder="example@gmail.com" class="form-control" id="email" name="email" value="<?php echo $users->email ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Contraseña</label>
				  <input type="password" class="form-control" id="password" name="password" value="<?php echo $users->password ?>">                  
                </div>
                
                <div class="input-field">
				  <label for="">Tipo de Documento</label>
				  <input type="text" class="form-control" id="document_types_id" name="document_types_id" value="<?php echo $users->document_types_id ?>">                  
                </div>
                <div class="input-field">
				  <label for="">Genero</label>
				  <input type="text" id="genders_id" class="form-control" name="genders_id" value="<?php echo $users->genders_id ?>">                  
                </div>
                <br>
                <button class="btn" type="submit">Actualizar</button>
                <a href="?clase=Users&method=user">Volver</a>

			</div>
		</div>
	</div>
  </nav>
</body>
</html>