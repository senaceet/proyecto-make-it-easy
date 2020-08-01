<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.6/css/all.css">
<link rel="stylesheet" type="text/css" href="assets\bootstrap-4.5\css\bootstrap.min.css">
	<title>USUARIOS</title>
</head>
<body>
	<div id="container" class="container" style="margin:0px;">
		<div class="row">
			<div class="col-md-12">
				<div class="card-body">
			         <a href="?clase=Users&method=create" class="btn btn-danger">Crear nuevo usuario</a><a href="?clase=Product&method=product">Volver</a>
			         <br>
			         <br>
					<table class="table table-bordered">
						<thead>
							<tr class="bg-success">
								<td>ID</td>
								<td>DOCUMENTO</td>
								<td>NOMBRES</td>
								<td>APELLIDOS</td>
								<td>FECHA DE <br> 
								NACIMIENTO</td>
								<td>EDAD</td>
								<td>CORREO</td>
								<td>CONTRASEÑA</td>
								<td>FECHA DE CREACION</td>
								<td>TIPO DE DOCUMENTO</td>
								<td>GENERO</td>
								<td>OPCIONES</td>
							</tr>
						</thead>

					<?php foreach (parent::get_all() as $result){ ?>

						<tbody>
						<tr>

						<td><?php  echo $result->id ?></td>
						<td><?php echo $result->document_number ?></td>
						<td><?php echo $result->names ?></td>
						<td><?php echo $result->last_names ?></td>
						<td><?php echo $result->birthdate ?></td>
						<td><?php echo $result->age ?></td>
						<td><?php echo $result->email ?></td>
						<td><?php echo $result->password ?></td>
						<td><?php echo $result->created_at ?></td>
						<td><?php echo $result->document_types_id ?></td>
						<td><?php echo $result->genders_id ?></td>
						<td>
							<a href="?clase=Users&method=show&id=<?php echo $result->id ?>"><i class="fas fa-align-justify"></i></a>
							<a href="?clase=Users&method=edit&id=<?php echo $result->id ?>"><i class="fas fa-edit"></i></a>
							<a href="?clase=Users&method=delete&id=<?php echo $result->id ?>"><i class="fa fa-trash-alt"></i></a>
						</td>
						</tr>
						</tbody>
						<?php   } ?>
						<tr>
							<td colspan="4" class="bg-warning"><?php echo count(parent::get_all()) ?> Usuarios Registrados</td>
						</tr>
                    </table>
				</div>
			</div>
		</div>
	</div>
<script type="../assets/jquery.js"></script>
<script type="../assets/bootstrap-4.5/js/bootstrap.js"></script>
</body>
</html>