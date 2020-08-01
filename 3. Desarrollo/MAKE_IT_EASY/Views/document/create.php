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
	                   <form action="?clase=Document&method=store" method="post">
	                   	<div class="form-group">
	                   		<label for="">Nombres</label>
	                   		<input type="text" id="names" name="names"  class="form-control">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Abreviatura</label>
	                   		<input type="text" id="abreviation" name="abreviation"  class="form-control">
	           
	                   	<br>
	                   	<button class="btn btn-primary" type="submit">Registrar Documento</button>
	                   	<a href="?clase=Document&method=document">Cancelar</a>
	                   </form>
	                   <br>
					</div>
			</div>
		</div>
	</div>

</body>
</html>