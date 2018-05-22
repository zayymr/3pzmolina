<html>
<head>
<link rel="stylesheet" type="text/css"  href="css/registro.css">
<title> Registro de usuarios </title> 
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.0';
      fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<h2>Registro de usuarios</h2>
<p>Completa el siguiente formulario con los datos solicitados: </p>
<form action="alta_registro.php" method="post">
    <div>
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" />
    </div>
    <div>
	<label for="apaterno">Apellido Paterno: </label>
	<input type="text" name="apaterno" />
    </div>
    <div>
	<label for="amaterno">Apellido Materno: </label>
	<input type="text" name="amaterno" />
    </div>
    <div>
	<label for="telefono">Teléfono: </label>
	<input type="text" name="telefono" />
    </div>
    <div>
	<label for="correo">Correo: </label>
	<input type="email" name="correo" />
    </div>	
    <form>
	<input type="submit" value="Enviar" /> <br><br>
<div class="fb-like" data-href="https://www.facebook.com/fca.unam.mx/" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div><br><br>
<a href="http://www.3pzmolina.unam.mx/consulta.php">Consulta</a> |  <a href="http://www.3pzmolina.unam.mx/contacto.php">Contacto</a> | <a href="http://www.3pzmolina.unam.mx/creditos.php">Créditos</a></div>
</form>
</html>
