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
					 $Document=parent::show_id($_GET['id']);
					?>
					 <table class="table table-bordered">
						<tr>
							<td class="table-primary">NOMBRES</td>
							<td><?php echo $Document->names ?></td>
						</tr>
						<tr>
							<td class="table-primary">ABREVIATURA</td>
							<td><?php echo $Document->abreviation ?></td>
						</tr>
					 </table>
					 <a href="?clase=Document&method=document">Volver al Inicio</a>
				</div>
			</div>
		</div>
	</div>

</body>
</html>