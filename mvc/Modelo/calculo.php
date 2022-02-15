
<?php

	$primeranota = $_POST['CajaNota1'];
	$segundanota = $_POST['CajaNota2'];
	$terceranota = $_POST['CajaNota3'];
	$media = round(($primeranota+$segundanota+$terceranota)/3,0);
	$mensaje = "";
	
	if(($media>=0) && ($media<=3))
	{
		$mensaje = "Muy mal";
	} else if (($media>=3) && ($media <=5))
	{
		$mensaje = "Mal";
	}else if (($media>=6) && ($media <=7))
	{
		$mensaje = "Regular";
	}else if (($media>=7) && ($media <=9))
	{
		$mensaje = "Bueno";
	}else if (($media>=9) && ($media <=10))
	{
		$mensaje = "Excelente";
	}

		echo "La primera nota fue: <b>$primeranota</b><br>";
		echo "La segunda nota fue: <b>$segundanota</b><br>";
		echo "La tercera nota fue: <b>$terceranota</b><br>";
		echo "La media de las tres notas es: <b>$media - $mensaje</b>";

		

?> 

<br><br><input type="button" onclick="history.back()" name="volver atrás" value="volver atrás">