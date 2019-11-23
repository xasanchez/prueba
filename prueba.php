<?php
	include_once 'conexion.php';


	if ($_POST) {
		
		$variable = $_POST['variable'];
		
		switch ($variable) {
			case 1:
				$resultado = "SELECT * FROM mereco";
				$result = $mysqli->query($resultado);
				$row = $result->fetch_array(MYSQLI_ASSOC);
				printf("%s (%s)\n", $row['ID'], $row['Nombre']);
				$result->free();
				$mysqli->close();
				break;

			case 2:
				$resultado = "INSERT INTO mereco (Apellido_Paterno,Apellido_Materno,Nombre,Edad,Usuario,Contrasena,Correo,Status) VALUES ('Sosa','Albarran', 'Alejandro', 20,'alex','123qwe', 'alsosaal@ucq.edu.mx', '1')";
				$result = $mysqli->query($resultado);
				if ($result) {
					echo "Datos insertados!!";
				}else{
					echo "Revise los datos/codigo";
				}
				$mysqli->close();
				break;

			case 3:
				$resultado = "UPDATE mereco SET Nombre= 'Roy se la come' WHERE ID = 11";
				$result = $mysqli->query($resultado);
				if ($result) {
					echo "Datos actualizados!!";
				}else{
					echo "Revise los datos/codigo";
				}
				$mysqli->close();
				break;

			case 4:
				$resultado = "DELETE FROM mereco WHERE ID = 11";
				$result = $mysqli->query($resultado);
				if ($result) {
					echo "Datos eliminados!!";
				}else{
					echo "Revise los datos/codigo";
				}
				$mysqli->close();
				break;
			
			default:
				
				break;
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
	<form action="prueba.php" method="POST">
		<input type="number" name="variable">
		<button class = "btn btn-danger mt-3 col-md-12">BUSCAR</button>
	</form>
</body>
</html>

