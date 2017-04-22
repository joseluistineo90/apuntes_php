<?php $last_visit = isset ($_COOKIE ['last_visit'])?
$_COOKIE['last_visit']:"Esta es su primera visita";
$current_visit = date ("c");//fecha actual
setcookie ("last_visit", $current_visit,(time()+60*60*24*30));
//Dura 30 dias la cookie
?> 
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title>Ejemplo de cookie</title>
</head>
<body>
<p><b>¿Cuando fue su Ultima visita ? </b> : <?php echo $last_visit;?> </p>
<p><b>Fecha y hora de su visita actual : </b><?php echo $current_visit;?> </p>
<p>$_COOKIE : <?php if (isset ($_COOKIE['last_visit'] ) ) 
echo   $_COOKIE ['last_visit'] . " (Valor inicial de la cookie )";// Este valor no cambiara aunque modifique la cookie.
	else
	echo "Por ser su primera visita no colcamos hora y fecha actual";
?> </p>
</body>
</html>