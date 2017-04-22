<!DOCTYPE html>
<html lang="es">
<head>
	<title>Formulario Contacto</title>
	<link  href='https://fonts.googleapis.com/css?family=Roboto' rel="stylesheet" type="text/css">
	<link rel="stylesheet"  href="estilos.css">
</head>
<body>
 <div class="wrap">
 	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
 	<input type="text" class="form-control" name="nombre" id= "nombre" placeholder="Nombre:" value="<?php if(!$enviado && isset ($nombre)) echo $nombre ?>">
 	<input type="text" class="form-control" name="correo" id= "correo" placeholder="Correo:" value="<?php if(!$enviado && isset ($correo)) echo $correo ?>">
 	<textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje :"><?php if(!$enviado && isset ($mensaje)) echo $mensaje ?></textarea>
 	<?php if (!empty($errores)) : ?>
 		<div class="alert error">
 		<?php echo $errores; ?>
 			</div>

 	<?php elseif($enviado): ?>
 		<div class="alert success">
 		<p>Enviado correctamente</p>
 			
 		</div>
 	<?php endif ?>

	<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
 		

 	</form>
 </div>
</body>
</html>