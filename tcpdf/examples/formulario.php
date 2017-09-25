<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			
			<div class="col-md-6 well">
					
					<form action="insertar_alumnos.php" enctype="multipart/form-data" method="POST">
							RUT <br>	 
							<input type="number" name="rut">
							-
							<input type="number" name="dv"><br>
							Nombre <br>
							<input type="text" name="nombre"><br>
							Apellido <br>
							<input type="text" name="apellido"><br>
							Carrera <br> 
							<input type="text" name="carrera"><br>
							Promocion <br>
							<input type="text" name="promocion"><br>
							Numero <br> 
							<input type="text" name="numero"><br>
							Direccion <br> 
							<input type="text" name="direccion"><br>
							Correo <br> 
							<input type="text" name="correo"><br>
							Foto <br>
							<input type="file" name="foto" id="foto" class="form-control"> <br>

						<input type="Submit" class="btn btn-success" value="Enviar">
					</form>

			</div>
		</div>
</div>
</body>
</html>
