<!DOCTYPE html>

	<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==1) {
		header("Location:admin.php");
	}
	?>
<html> 
<head></head>
<body>
<style>
body {
background-image: url('./imagenes/fondo3.png');
background-repeat: no-repeat;
background-attachment: fixed;
} 
</style>

<script language=javascript type=text/javascript>
function stopRKey(evt) {
var evt = (evt) ? evt : ((event) ? event : null);
var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
if ((evt.keyCode == 13) && (node.type=="text")) {return false;}
}
document.onkeypress = stopRKey; 
</script>

<?php
if ($_REQUEST['banco'] <> "" || $_REQUEST['cliente']){
	
$conexion=mysqli_connect("localhost","root","", "bdsellos");
if (mysqli_connect_errno($conexion)) {
echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}


$mensajero = $_REQUEST['mensajero'];
$banco = $_REQUEST['banco'];
$tarearealizar = $_REQUEST['tarearealizar'];
$compania = $_REQUEST['compania'];
$cliente = $_REQUEST['cliente'];
$valor = $_REQUEST['valor'];
$fecha = $_REQUEST['mensajeriaFecha'];
$radio = 0;

if(isset($_REQUEST['radio1'])){
$radio = $_REQUEST['radio1'];
}else{
	$radio = 0;
}

	
mysqli_query( $conexion, "insert into mensajeriacaja(tarearealizar,compania,cliente,valor,mensajero,banco,mensajeriaFecha,efectivocheque) values
('$tarearealizar','$compania','$cliente','$valor','$mensajero','$banco','$fecha','$radio')") or die("Problemas en el select".mysqli_error());


mysqli_close($conexion);
}
?>


<?php 
date_default_timezone_set("america/bogota");
?>


&nbsp;&nbsp;

<style>
body {
background-image: url('./imagenes/fondo3.png');
background-repeat: no-repeat;
background-attachment: fixed;
} 
</style>

  <style>
  .textbox
  {
  border: 1px solid #DBE1EB;
  font-size: 18px;
  font-family: Arial, Verdana;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 6px;
  padding-bottom: 6px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -moz-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -webkit-linear-gradient(left, #FFFFFF, #F7F9FA);
  background: -o-linear-gradient(left, #FFFFFF, #F7F9FA);
  color: #2E3133;
  }
  
  .textbox:focus
  {
  color: #2E3133;
  border-color: #FBFFAD;
  }
 </style>
   <style>
  .textbox1
  {
  border: 1px solid #DBE1EB;
  font-size: 18px;
  font-family: Arial, Verdana;
  padding-left: 4px;
  padding-right: 4px;
  padding-top: 6px;
  padding-bottom: 6px;
  border-radius: 4px;
  -moz-border-radius: 4px;
  -webkit-border-radius: 4px;
  -o-border-radius: 4px;
  background: #FFFFFF;
  background: linear-gradient(left, #555555, #555555);
  background: -moz-linear-gradient(left, #555555, #555555);
  background: -webkit-linear-gradient(left, #555555, #555555);
  background: -o-linear-gradient(left, #555555, #555555);
  color: #2E3133;
  }
  
  .textbox:focus
  {
  color: #2E3133;
  border-color: #FBFFAD;
  }
 </style>


<?php 
date_default_timezone_set("america/bogota");
?>

&nbsp;&nbsp;

<style>
select {
  font-size: 15px;
}
</style>

<style>
select {
  font-size: 15px;
}
</style>
<br><br>

<input type="hidden" name="envioEntrega" value="1">

<form method="post" action="mensajeriaAccion.php">
<table cellspacing="1" cellpadding="6" > 
<tr>
	<td WIDTH="300" style="border:1px solid #555555;" class="textbox1"><strong><font face="arial, verdana, helvetica" SIZE=2 color="white">
		Asesor: <strong><?php echo $_SESSION['user'];?></strong>
	</td>
	<td style="border:1px solid #555555;"class="textbox1"><strong><font face="arial, verdana, helvetica" SIZE=2 color="white">Fecha programacion mensajeria &nbsp;<input type="date" value="<?php echo $_REQUEST['mensajeriaFecha']?>" name="mensajeriaFecha" required/>&nbsp;&nbsp;<input type="submit" value="Buscar">
</form></td>
</tr>
</table>

<br>	


  <style>
.myButton {
	-moz-box-shadow:inset 0px 1px 3px 0px #6e7070;
	-webkit-box-shadow:inset 0px 1px 3px 0px #6e7070;
	box-shadow:inset 0px 1px 3px 0px #6e7070;
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #414746), color-stop(1, #575c5c));
	background:-moz-linear-gradient(top, #414746 5%, #575c5c 100%);
	background:-webkit-linear-gradient(top, #414746 5%, #575c5c 100%);
	background:-o-linear-gradient(top, #414746 5%, #575c5c 100%);
	background:-ms-linear-gradient(top, #414746 5%, #575c5c 100%);
	background:linear-gradient(to bottom, #414746 5%, #575c5c 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#414746', endColorstr='#575c5c',GradientType=0);
	background-color:#414746;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	border:1px solid #4e5754;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:15px;
	font-weight:bold;
	padding:11px 23px;
	text-decoration:none;
	text-shadow:0px -1px 0px #373b3a;
}
.myButton:hover {
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #575c5c), color-stop(1, #414746));
	background:-moz-linear-gradient(top, #575c5c 5%, #414746 100%);
	background:-webkit-linear-gradient(top, #575c5c 5%, #414746 100%);
	background:-o-linear-gradient(top, #575c5c 5%, #414746 100%);
	background:-ms-linear-gradient(top, #575c5c 5%, #414746 100%);
	background:linear-gradient(to bottom, #575c5c 5%, #414746 100%);
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#575c5c', endColorstr='#414746',GradientType=0);
	background-color:#575c5c;
}
.myButton:active {
	position:relative;
	top:1px;
}

 </style>

<center>
<table cellspacing="1" cellpadding="1" > 
<tr>
	<td WIDTH="65" bgcolor="#555555" style="border:1px solid #555555;" class="textbox1"><font face="arial, verdana, helvetica" SIZE=4 color="white">Mensajero</td>
	
	<?php// opcion para seleccionar el mensajero ?>
	<td><select name="mensajero" style="border:1px solid #555555;" class="textbox">
		<option Value="">Elija Mensajero</option>
		<?php
		$conexion=mysqli_connect("localhost","root","", "bdsellos") ;
		if (mysqli_connect_errno($conexion)) {
		echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
		}
		$consulta = mysqli_query($conexion, "select * from mensajeros") or die("Problemas en el select".mysqli_error());
		while ($reg = mysqli_fetch_array($consulta))
		{
			if($reg['mensajeroActivado'] == 1){		
		?>
		<option value="<?php echo $reg['mensajeroNombre']; ?>"><?php echo $reg['mensajeroNombre']; ?></option>
		<?php
			}	
		}
		mysqli_close($conexion);
		?>
		</select>
	</td>
</tr>
<tr>
	<td WIDTH="65" bgcolor="#555555" style="border:1px solid #555555;" class="textbox1"><font face="arial, verdana, helvetica" SIZE=4 color="white">Banco</td>
	<td><input type="text" style="border:1px solid #555555;" class="textbox" size="40" name="banco" placeholder="Bancos"></td>
</tr>
<tr>
	<td WIDTH="150" bgcolor="#555555" style="border:1px solid #555555;" class="textbox1"><font face="arial, verdana, helvetica" SIZE=4 color="white">Tarea a Realizar</td>
	<td><input type="text" style="border:1px solid #555555;" class="textbox" size="40" name="tarearealizar" placeholder="Tarea a Realizar"></td>
</tr>
<tr>
	<td bgcolor="#555555" style="border:1px solid #555555;" class="textbox1"><font face="arial, verdana, helvetica" SIZE=4 color="white">Para</td>
	<td><input type="text" style="border:1px solid #555555;" class="textbox" size="40" name="compania" placeholder="Consignar"></td>
</tr>
<tr>
	<td WIDTH="70" bgcolor="#555555" style="border:1px solid #555555;" class="textbox1"><font face="arial, verdana, helvetica" SIZE=4 color="white">Cliente</td>
	<td><input type="text" style="border:1px solid #555555;" class="textbox" size="40" name="cliente" placeholder="Nombre Cliente"></td>

</tr>
<tr>
	<td WIDTH="30" bgcolor="#555555" style="border:1px solid #555555;" class="textbox1"><font face="arial, verdana, helvetica" SIZE=4 color="white">Valor</td>
	<td><input type="num" style="border:1px solid #555555;" size="40" class="textbox" name="valor" placeholder="Valor a Consignar"></td>
</tr>

</table>
</center>

<center><table cellspacing="1" cellpadding="1" > 
<tr>
	<td WIDTH="130" style="border:1px solid #555555;" class="textbox"><font face="arial, verdana, helvetica" SIZE=4 color="#555555">
		<center>Efectivo<input type="radio" name="radio1" value="0"></center></td>
	<td WIDTH="130" style="border:1px solid #555555;" class="textbox"><font face="arial, verdana, helvetica" SIZE=4 color="#555555">
		<center>Cheque<input type="radio" name="radio1" value="1"></center></td>
</tr>
</table>
</center>

<br>
<center><input type="submit" value="Planillar" class="myButton"></center>
</form>

<br><br><br>





<?php// realiza la consulta con la fecha de ingreso para mostrar las diligencias programadas?>

<?php
$j = 0;

$conexion=mysqli_connect("localhost","root","", "bdsellos") ;
if (mysqli_connect_errno($conexion)) {
echo "Fallo al conectar a MySQL: " . mysqli_connect_error();
}

$consulta = mysqli_query($conexion, "select * from mensajeros") or die("Problemas en el
select".mysqli_error());
while ($reg = mysqli_fetch_array($consulta))
{
	
	$mensajeros =  $reg['mensajeroNombre'];
	$temporal = 1;
	$vueltas = 1;
	if( $reg['mensajeroActivado'] = 1){
		
	$nombreMensajero = $reg['mensajeroNombre'];
	
	$consultaDos = mysqli_query($conexion, "select * from mensajeriacaja where mensajero='$mensajeros' and mensajeriaFecha='$_REQUEST[mensajeriaFecha]'") or die("Problemas en el
	select".mysqli_error());
	while ($reg = mysqli_fetch_array($consultaDos))
	{
	
?>

<?php
if($temporal == 1){
?>	
<form method="post" action="mensajeriaImprimir.php" target="_blank">
<table cellspacing="1" cellpadding="3" WIDTH="1200"> 
	<tr>
		<td colspan="4" bgcolor="#555555" style="border:1px solid #555555;"><font face="arial, verdana, helvetica" SIZE=2 color="white"><strong><?php echo $nombreMensajero; ?>
		<input type="hidden" name="mensajeroImprimir" value="<?php echo $nombreMensajero?>">
		<input type="hidden" name="mensajeroFecha" value="<?php echo $_REQUEST['mensajeriaFecha']?>"></strong></td>
		<td bgcolor="#555555" style="border:1px solid #555555;"><font face="arial, verdana, helvetica" SIZE=2 color="white"><strong>&thinsp;<?php echo $reg['mensajeriaFecha'];?></td>
	</tr>
	<tr>
		<td WIDTH="30" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>No.</td>
		<td WIDTH="30" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Codigo</td>
		<td WIDTH="50" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Banco</td>
		<td WIDTH="60" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Tarea a Realizar</td>
		<td WIDTH="200" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Para / De</td>
		<td WIDTH="150" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Nombre Cliente</td>
		<td WIDTH="80" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Valor</td>
		<td WIDTH="80" bgcolor="#CBCBCB" style="border:1px solid black;"><strong><font face="arial, verdana, helvetica" SIZE=2>Efectivo/Cheque</td>

	</tr>
	
<?php
			$temporal += 1;
			$j += 1;
			
	}
	
	if($reg['activar'] <> 1){
?>

	<tr>
		<td style="border:1px solid black;" bgcolor="white"><?php echo $vueltas;?></td>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php echo $reg['id'];?></td>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php echo $reg['banco'];?></td>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php echo $reg['tarearealizar'];?></td>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php echo $reg['compania'];?></td>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php echo $reg['cliente'];?></td>
		<?php $valor = $reg['valor'];?>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php echo number_format($valor);?></td>
		<td style="border:1px solid black;" bgcolor="white"><font face="arial, verdana, helvetica" SIZE=2>&thinsp;<?php if($reg['efectivocheque']==1){ 
		echo "C";
		}else{
			echo "E";
		}?></td>
	</tr>



<?php
$vueltas += 1;
		}
	
	}	
?>
<tr><td bgcolor="#555555" colspan="2"><center><input type="submit" value="Imprimir"><center>
</form></td>
</tr>
<tr><td><br><br></td></tr>

<?php
  }
}
?>
</Table>
<?php

mysqli_close($conexion);

?>
<script language=javascript> 
function ventanaSecundaria (URL){ 
   window.open(URL,"ventana1","width=950,height=200,scrollbars=NO") 
} 
</script>

<table cellspacing="1" cellpadding="3"> 
	<tr>
		<td WIDTH="100" bgcolor="#555555" style="border:1px solid #555555;">
<a href="javascript:ventanaSecundaria('mensajeriaActualizar.php')"><center><font face="arial, verdana, helvetica" SIZE=2 color="white"><strong>CORREGIR</strong><center></a></td>
</tr>
</Table>

</body>
</html>