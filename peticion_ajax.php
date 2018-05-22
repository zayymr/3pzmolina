<html>
<head>
<title> Consulta </title> 
</head>
<body>
<h2 id="p1">Consultas BD</h2>
<?php
include 'conexion.php';
$conn = conectar();
$query = ("SELECT apaterno,amaterno,nombre,telefono,correo FROM usuarios;");

$process = pg_query($conn, $query);

if (!$process) {
	echo "Hubo un error en la consulta";
} else {
	echo '<table border="3"><tr><th>ApellidoPaterno</th><th>ApellidoMaterno<th>Nombre</th><th>Telefono</th><th>Correo</th></tr>';
	while ($row = pg_fetch_row($process)) {
	 	echo '<tr><td>'.$row[0].'</td><td>'.$row[1].'</td><td>'.$row[2].'</td><td>'.$row[3].'</td><td>'.$row[4].'</td></tr>';
	}
		echo '</table>';
	}

pg_close($dbconn);

?>
<br>
<form action="http://www.3pzmolina.unam.mx">
<a href="http://www.3pzmolina.unam.mx/contacto.php">Contacto</a> | <a href="http://www.3pzmolina.unam.mx/creditos.php">Créditos</a><br><br><input type="submit" value="Regresar al formulario" /><br>
</body>
</html>
