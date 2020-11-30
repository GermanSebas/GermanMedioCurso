<?php
// variable}
$n = 0; $i=0;
$flag = false;
$r = "";

if (isset($_POST["btnCalcular"])) {
	// ENTRADA
	$N= (int)$_POST["txtn"];

	$flag= true;
	$i=2;
	while ($i <= $n / 2) {
		if ($n % $i ==0) {
			$flag = false;
			dreak;
			
		} 
		$i++;
		
	}
	if($flag)
		$r= "Es Primi"; 
	else
		$r="No es Primo";


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Primo</title>
	<<style type="text/css">

	</style>
</head>
<body>
	<form method="post" action="primo.php">
	<table width="45" border="0">
		<tr>
			<<td colspan="2"><strong>Primo</strong></td>
			
		</tr>
		<tr>
			<td width="89"></td>
			<td width="146">
				<input name=" txtn" type="text" id="txtn" value="<?=$n?>">
			</td>
		</tr>
		<tr>
			<td>Respuesta</td>
			<td><input name="txtr" type="text"  class="TextoFondo" id="txtr" value="<?=$r?>"/></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
				<input name="btnCalcular" type="submit"  id="btnCalcular" value="Calcular"> </td>
		</tr>
	</table>
</form>

</body>
</html>