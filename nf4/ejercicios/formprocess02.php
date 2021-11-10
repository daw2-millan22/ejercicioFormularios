<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head> 
<body>
	<?php
  		echo '<h1>Datos sobre ' . $_POST['nombre'] . '</h1>';
		echo "Selector Varibles ";

		echo "<select name='id_unidad'>";

			echo "<option value='$id_unidad'>" . $_POST['nombre'] . "</option>";
			echo "<option value='$id_unidad'>" . $_POST['apellido1'] . "</option>";
			echo "<option value='$id_unidad'>" . $_POST['apellido2'] . "</option>";
			echo "<option value='$id_unidad'>" . $_POST['aficion'] . "</option>";

		echo "</select>";
        echo "<pre>";
		  print_r($_POST);
        echo "</pre>";

        echo "<a href='form03.html'>mirar el ejercicio 3</a>";
	?>
</body>
</html>