<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>editor preguntas</title>
</head>
<body>
<?php
include("conex.inc");
$pregunta= $_POST['area'];
$tiempo=$_POST['tiempo'];
$tipo=$_POST['status'];
mysql_query("INSERT INTO Preguntas(id,cuestionario,nombre,tipo,timeout) VALUE ('80','3','$pregunta','$tipo','$tiempo')",$conectar);
   echo "Registro Exitoso! <br><br> Ingresaste lo siguiente: <b>".$pregunta."</b> <br>Además ya añadiste este tiempo: <b>".$tiempo."</b>";
/*echo "recibido:";
echo $pregunta;*/
?>
</body>
</html>
