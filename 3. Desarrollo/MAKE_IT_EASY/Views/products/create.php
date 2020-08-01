<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/bootstrap-4.5/css/bootstrap.css"> 		
	<title>Crear Producto</title>
</head>
<body>

	<div class="container">
		<div class="row">							
			<div class="col-md-4">			
					<div>
	                   <form action="?clase=Product&method=store" method="post" enctype="multipart/form-data">
	                   	<br>	
	                   	<div class="form-group">
	                   		<label for="">Nombre del Producto</label>
	                   		<input type="text" name="product_name" class="form-control" required="">
	                   	</div>
	                   	<div class="form-group">
	                   		<label for="">Descripción</label>
	                   		<input type="text" name="description" class="form-control" required="">
	                    </div>
	                    <div class="form-group">
	                   		<label for="">Precio</label>
	                   		<input type="number" name="price" class="form-control" required="">
	                    </div>
	                    <div class="form-group">
	                   		<label for="">Imagen del Producto</label>
	                   		<input type="file" name="image" class="form-control" required="">
	                    </div>
	                   	<br>
	                   	<button class="btn btn-primary" type="submit">Registrar Producto</button>
	                   	<a href="?clase=Product&method=product">Cancelar</a>
	                   </form>
	                   <br>
					</div>
			</div>		
		</div>
	</div>

</body>
</html>