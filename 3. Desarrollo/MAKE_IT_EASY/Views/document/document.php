<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>DOCUMENTO</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="cold-md-12">
				<div class="card-body">
                   <a href="?clase=Document&method=create" class="btn btn-outline-secondary">Crear nuevo Documento</a> <a href="?clase=Product&method=product">Volver</a>
			         <br>
			         <br>
					  <table class="table table-bordered">
					  	<thead>
							<tr">
								<td>ID</td>
						 		<td>NOMBRES</td>
								<td>ABREVIATURA</td>
								<td>OPCIONES</td>
							</tr>
						</thead>
                   <?php foreach (parent::get_all() as $result){ ?>

                      <tbody>
						<tr>

						<td><?php echo $result->id ?></td>
						<td><?php echo $result->names ?></td>
						<td><?php echo $result->abreviation ?></td>
						<td>
						 <a href="?clase=Document&method=show&id=<?php echo $result->id ?>"class="btn btn-info btn-sm">Detalles</a>
						 <a href="?clase=Document&method=edit&id=<?php echo $result->id ?>"class="btn btn-warning btn-sm">Editar</a>
						 <a href="?clase=Document&method=delete&id=<?php echo $result->id ?>"class="btn btn-danger btn-sm">Eliminar</a>
						</td>
					    </tr>
				      </tbody>

                    <?php } ?>
                      </table>
					</div>
				</div>
			</div>
		</div>
</body>
</html>