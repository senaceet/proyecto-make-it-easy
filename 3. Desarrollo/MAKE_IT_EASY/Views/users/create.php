<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>USUARIOS</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4">			
					<div>
	                   <form action="?clase=Users&method=store" method="post">
	                   	<div class="form-group">
	                   		<label for="">Documento</label>
	                   		<input type="text" id="document_number" name="document_number"  class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Nombres</label>
	                   		<input type="text" id="names" name="names"  class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Apellidos</label>
	                   		<input type="text" id="last_names" name="last_names"  class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Fecha de Nacimiento</label>
	                   		<input type="date" id="birthdate" name="birthdate" class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Edad</label>
	                   		<input type="number" id="age" name="age"  class="form-control">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Correo</label>
	                   		<input type="text" placeholder="example@gmail.com" id="email" name="email"  class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Contraseña</label>
	                   		<input type="password" id="password" name="password" class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">TIPO DE DOCUMENTO</label>
	                   		<select name="document_types_id" id="" class="form-control" required="">
	                   		  <option value="">Seleccionar...</option>
                              <?php foreach(Document::get_all() as $result){ ?>
                              	<option value="<?php echo $result->id ?>"><?php echo $result->names ?></option>
                              <?php } ?>
	                   	    </select>
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">GENERO</label>
	                   		<select name="genders_id" id="" class="form-control" required="">
	                   			<option value="">Seleccionar...</option>
	                   			<?php foreach (Gender::get_all() as $result){ ?>
                                     <option value="<?php echo $result->id ?>"><?php echo $result->name ?></option>
	                   			<?php } ?>
	                   		</select>
	                   	</div>
	                   	<br>
	                   	<button class="btn btn-primary" type="submit">Registrar Usuario</button>
	                   	<a href="?clase=product&method=index">Cancelar</a>
	                   </form>
	                   <br>
					</div>
			</div>
		</div>
	</div>

</body>
</html>