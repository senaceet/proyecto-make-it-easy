<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>GENERO</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="cold-md-12">
				<div class="card-body">
                   <a href="?clase=Gender&method=create" class="btn btn-outline-secondary">Agregar Genero</a>
			         <br>
			         <br>
					  <table class="table border">
					  	<thead>
							<tr">
								<td>ID</td>
								<td>NOMBRES</td>
							</tr>
						</thead>
                   <?php   foreach (parent::get_all() as $result){ ?>

                      <tbody>
						<tr>

						<td><?php echo $result->id ?></td>
						<td><?php echo $result->name ?></td>
						<td>
						 <a href=""class="btn btn-info btn-sm">Detalles</a>
						 <a href=""class="btn btn-warning btn-sm">Editar</a>
						 <a href=""class="btn btn-danger btn-sm">Eliminar</a>
						</td>
					    </tr>
				      </tbody>

                    <?php } ?>
                      </table>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>