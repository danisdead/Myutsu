<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php 

require_once('hiddenconn/hdncnct.php');

 mysql_select_db("promoades_com",$db);
 
 $nombre = $_POST['nombre'];
 $correo = $_POST['correo'];
 $telefono = $_POST['telefono'];
 $ciudad = $_POST['ciudad'];
 $lote = $_POST['lote'];
 
 if(!filter_var($correo, FILTER_VALIDATE_EMAIL))
 {
	 
  echo "<script type='text/javascript'>window.alert('Tu correo es inválido.')</script>";
   
  $url = 'registro.php';
  echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
  
 } 
 else
 {
	 
  if (!$nombre || !$correo || !$telefono || !$ciudad || !$lote) 
  {
	  
   echo "<script type='text/javascript'>window.alert('Por favor llena todos los campos.')</script>"; 
   
   $url = 'registro.php';
   echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">'; 
   
  }
  else
  {
	  
   $nombre = mysql_escape_string($nombre);
   $nombre = addslashes($nombre);
   $nombre = htmlspecialchars($nombre);
   $nombre = strip_tags($nombre);
   $nombre = stripslashes($nombre);
   
   $correo = mysql_escape_string($correo);
   $correo = addslashes($correo);
   $correo = htmlspecialchars($correo);
   $correo = strip_tags($correo);
   $correo = stripslashes($correo);
   
   $telefono = mysql_escape_string($telefono);
   $telefono = addslashes($telefono);
   $telefono = htmlspecialchars($telefono);
   $telefono = strip_tags($telefono);
   $telefono = stripslashes($telefono);
   
   $ciudad = mysql_escape_string($ciudad);
   $ciudad = addslashes($ciudad);
   $ciudad = htmlspecialchars($ciudad);
   $ciudad = strip_tags($ciudad);
   $ciudad = stripslashes($ciudad);
   
   $lote = mysql_escape_string($lote);
   $lote = addslashes($lote);
   $lote = htmlspecialchars($lote);
   $lote = strip_tags($lote);
   $lote = stripslashes($lote);
	  
   mysql_query('SET NAMES utf8');
   $sql="INSERT INTO participantes (nombre, correo, telefono, ciudad, lote) VALUES ('$nombre', '$correo', '$telefono', '$ciudad', '$lote')";
   
   echo "<script type='text/javascript'>window.alert('Tu código ha sido registrado.')</script>"; 
   
   $result = mysql_query($sql); 
   $url = 'descarga.php';
   echo '<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';	
    
  }
 }

?>