<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>DETALLE USUARIO</title>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="cold-md-12">
				<div class="card-body">
					<?php
					 $User=parent::show_id($_GET['id']);
					?>
					 <table class="table table-bordered">
						<tr>
							<td class="table-primary">DOCUMENTO</td>
							<td><?php echo $User->document_number ?></td>
						</tr>
						<tr>
							<td class="table-primary">NOMBRES</td>
							<td><?php echo $User->names ?></td>
						</tr>
						<tr>
							<td class="table-primary">APELLIDOS</td>
							<td><?php echo $User->last_names ?></td>
						</tr>
						<tr>
							<td class="table-primary">FECHA DE NACIMIENTO</td>
							<td><?php echo $User->birthdate ?></td>
						</tr>
						<tr>
							<td class="table-primary">EDAD</td>
							<td><?php echo $User->age ?></td>
						</tr>
						<tr>
							<td class="table-primary">CORREO</td>
							<td><?php echo $User->email ?></td>
						</tr>
						<tr>
							<td class="table-primary">CONTRASEÑA</td>
							<td><?php echo $User->password ?></td>
						</tr>
						<tr>
							<td class="table-primary">FECHA DE CREACION</td>
							<td><?php echo $User->created_at ?></td>
						</tr>
						<tr>
							<td class="table-primary">TIPO DE DOCUMENTO</td>
							<td><?php echo $User->document_types_id ?></td>
						</tr>
						<tr>
							<td class="table-primary">GENERO</td>
							<td><?php echo $User->genders_id ?></td>
						</tr>
					 </table>
					 <a href="?clase=Users&method=index">Volver al Inicio</a>
				</div>
			</div>
		</div>
	</div>

</body>
</html>