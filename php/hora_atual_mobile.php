<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Regressiva Rede Massa</title>
</head>
<style type="text/css">

lt_hora {
font-family: Arial, Helvetica, sans-serif;
font-size: 2.5em;
}

</style>
<body>

<?php	


// ---------------EXIBE DATA E HORA ATUAL--------------------

    setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
	//date_default_timezone_set('America/Sao_Paulo');
	echo "<font size='4px'><n><center><font color='#808080'>".ucfirst(utf8_encode(strftime('%A, %d de %B de %Y', strtotime('today'))))."</center><font color='#fff'></font>";

    //echo "<h1>Regressiva inicio Programação</h1>";
	
	date_default_timezone_set('America/Sao_Paulo');
	echo "<n><center><font color='#00BFFF'><id=letra_regressiva><lt_hora>".date('H:i:s')."</lt_hora></center>";


	
 
?>
</body>
</html>