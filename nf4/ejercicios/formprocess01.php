<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
	<?php
		$pelicula=$_POST['pelicula'];
		$nombre=$_POST['nombre'];
		$puntuacion= $_POST['puntuacion'];
		$comentario=$_POST['comentario'];
		$fecha=date("Y-m-d");
		

		
		$db = mysqli_connect('localhost', 'root', 'root') or die ('No has conseguido hacer conexion');

		mysqli_select_db($db,'moviesite') or die(mysqli_error($db));

		$id_pelicula= "SELECT movie_id FROM movie WHERE movie_name LIKE '$pelicula'";
		$resultado=mysqli_query($db, $id_pelicula);
		$fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC);


		$insert= "INSERT INTO reviews(review_movie_id, review_date, reviewer_name, review_comment, review_rating)
			VALUES ($fila[movie_id], '$fecha', '$nombre', '$comentario', $puntuacion)";

		mysqli_query($db,$insert) or die(mysqli_error($db));
		if(mysqli_error($db)==null){
			echo "se han introducido los datos";
		}	
		echo "<a href='form01.html'><br>introduce otro</a><br>";
		echo "<a href='form02.html'>mirar el ejercicio 2</a>";
	?>
</body>
</html>