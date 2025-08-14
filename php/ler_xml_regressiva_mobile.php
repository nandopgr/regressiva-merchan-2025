<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="pt-br">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Regressiva Rede Massa</title>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<SCRIPT language=JavaScript>
<!-- begin
var sHors = "0"+0; 
var sMins = "0"+0;
var sSecs = -1;
function getSecs(){
	sSecs++;
	if(sSecs==60){sSecs=0;sMins++;
    if(sMins<=9)sMins="0"+sMins;
    }
	if(sMins==60){sMins="0"+0;sHors++;
    if(sHors<=9)sHors="0"+sHors;
	}
	if(sSecs<=9)sSecs="0"+sSecs;
    clock1.innerHTML=sMins+":"+sSecs;
	minutos.innerHTML=sMins;
	segundos.innerHTML=sSecs;
    setTimeout('getSecs()',1000);

	}
//-->
 
</SCRIPT> 
		<style>		
		
          body { background: #FFFFF0; }
          .container { background: white; }
        </style>
		<style type="text/css">

		lt_bloco_valor {
			
		font-family: Arial, Helvetica, sans-serif;
		font-size: 4.5em;		

		}
		
		
		lt_bloco_nome {
			
		font-family: Arial, Helvetica, sans-serif;
		font-size: 1.4em;

		}  
		
		lt_bloco_time_estouro {
			
		font-family: Arial, Helvetica, sans-serif;
		font-size: 1.5em;

		} 
		
		lt_bloco_digito {
			
		font-family: Arial, Helvetica, sans-serif;
		font-size: 8.00em;

		}  
		
		lt_bloco_digito2 {
			
		font-family: Arial, Helvetica, sans-serif;
		font-size: 3.00em;

		} 
		
		pisca {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 8.00em;	  
    opacity: 0;
    animation: anima 2s ease infinite;	
	}
	@keyframes anima {
    to {
        opacity: 20;
		
    }
	}
	
	pisca2 {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 3.80em;	  
    opacity: 0;
    animation: anima 2s ease infinite;	
	}
	@keyframes anima {
    to {
        opacity: 20;
		
    }
	}
	
	

		
		button {
  font-size: 18px;
  font-weight: 600;
  background-color: aqua;
  border-radius: 20px;
  border: 0;
  padding: 10px 60px;
  cursor: pointer;
}

  
		
		</style>
		
		
			
</head>

<body>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php	

error_reporting(0);
ini_set("display_errors", 0 );
   
// ---------------LER XML TEMPO inicio--------------------


    $link_inicio = "xml_regressiva.xml";
    //link do arquivo xml
    $xml_inicio = simplexml_load_file($link_inicio);	

	//carrega o arquivo XML e retornando um Array Bloco 1 Destaque 

    foreach($xml_inicio -> regressiva as $bloco1_inicio){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
		
		$status_inicio = utf8_decode($bloco1_inicio -> status);
		//echo $status_inicio;
		
        //echo "<center><font size='5'>Hora inicio:"
       // .utf8_decode($bloco1_inicio -> hora).":".utf8_decode($bloco1_inicio -> minuto).":".utf8_decode($bloco1_inicio -> segundo)."</font></center>";        
    } //fim do foreach	
	
	$hora_inicio = utf8_decode($bloco1_inicio -> hora).":".utf8_decode($bloco1_inicio -> minuto).":".utf8_decode($bloco1_inicio -> segundo);
	
	
// ---------------CALCULA TEMPO RESTANTE REGRESSIVA CINERGY--------------------

    if ($status_inicio == 1){

	
	 date_default_timezone_set('America/Sao_Paulo');
	 //echo date('H:i:s', strtotime('-31 second'));
 
	$encerramento = $hora_inicio;
 
	// Cria um objeto DateTime para o dia e hora atual.
	$fim = new DateTime();
 
	// Converte as duas datas para um objeto DateTime do PHP
	// PARA O PHP 5.3 OU SUPERIOR
	$encerramento = DateTime::createFromFormat('H:i:s', $encerramento);
	// PARA O PHP 5.2
	// $inicio = date_create_from_format('H:i:s', $encerramento);
	//echo $encerramento."<br>";
	//echo $fim;
 
	$intervalo = $encerramento->diff($fim);
	// Formata a diferença de horas para
	// aparecer no formato 00:00:00 na página
	//print $intervalo->format('%H:%I:%S');	
	
	If (($intervalo->format('%H:%I:%S') <= "00:00:59") and ($intervalo->format('%H:%I:%S') >= "00:00:30")){
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA TEMPO MERCHAN</strong><font color='#fff'><br><lt_bloco_digito>".$intervalo->format('%S')."</h1></center>";
	}
	
		If (($intervalo->format('%H:%I:%S') <= "00:00:29") and ($intervalo->format('%H:%I:%S') >= "00:00:11")){
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA TEMPO MERCHAN</strong><font color='#FFFF00'><br><lt_bloco_digito>".$intervalo->format('%S')."</h1></center>";
	}	
	
	If (($intervalo->format('%H:%I:%S') <= "00:00:10") and ($intervalo->format('%H:%I:%S') >= "00:00:00")){
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA TEMPO MERCHAN</strong><font color='red'><br><pisca>".$intervalo->format('%S')."</h1></center>";
	
	}
	}	
	
    // ---------------CALCULA TEMPO RESTANTE REGRESSIVA INTERVALO--------------------

    if ($status_inicio == 10){

	
	 date_default_timezone_set('America/Sao_Paulo');
	 //echo date('H:i:s', strtotime('-31 second'));
 
	$encerramento = $hora_inicio;
 
	// Cria um objeto DateTime para o dia e hora atual.
	$fim = new DateTime();
	$fim->modify('-9 second');
 
	// Converte as duas datas para um objeto DateTime do PHP
	// PARA O PHP 5.3 OU SUPERIOR
	$encerramento = DateTime::createFromFormat('H:i:s', $encerramento);
	// PARA O PHP 5.2
	// $inicio = date_create_from_format('H:i:s', $encerramento);
	//echo $encerramento."<br>";
	//echo $fim;
 
	$intervalo = $encerramento->diff($fim);
	// Formata a diferença de horas para
	// aparecer no formato 00:00:00 na página
	//print $intervalo->format('%H:%I:%S');	
	
	If (($intervalo->format('%H:%I:%S') <= "00:10:00") and ($intervalo->format('%H:%I:%S') >= "00:01:00")){
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA INTERVALO COMERCIAL</strong><font color='#fff'><br><lt_bloco_valor>".$intervalo->format('%I:%S')."</h1></center>";
	}
	
		If (($intervalo->format('%H:%I:%S') <= "00:00:59") and ($intervalo->format('%H:%I:%S') >= "00:00:31")){
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA INTERVALO COMERCIAL</strong><font color='#FFFF00'><br><lt_bloco_valor>".$intervalo->format('%I:%S')."</h1></center>";
	}	
	
	If (($intervalo->format('%H:%I:%S') <= "00:00:30") and ($intervalo->format('%H:%I:%S') >= "00:00:00")){
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA INTERVALO COMERCIAL</strong><font color='red'><br><pisca>".$intervalo->format('%I:%S')."</h1></center>";
	
	}
	}	
	
	// EXIBE STATUS AGUARDANDO QUANDO ZERA
	
	if ($status_inicio == 2){
	
	echo "<lt_bloco_nome><b><center><strong><font color='#00FF00'>REGRESSIVA TEMPO MERCHAN</strong><font color='#fff'><br><lt_bloco_digito>60</h1></center>";
    
	/*  escreve tempo estouro merchan progressivo no xml  */
		
		$xml = new DOMDocument('1.0', 'UTF-8');
		$xml->formatOutput = true;

		$rss = $xml->createElement('rss');
		$rss->setAttribute('version', '2.0');
		$rss->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:g', 'http://base.google.com/ns/1.0');
		$xml->appendChild($rss);
        
		$segundos = $posicao_bloco; 
        $tempo = 0;
		
		$channel = $xml->createElement('progressivo');
		$channel->appendChild($xml->createElement('tempo', $tempo));		


		$rss->appendChild($channel);
		$xml->save('xml_progressivo.xml');
   }
   
   
   // Exibe resultado quando zera o tempo e começa contagem progressiva estouro
   
   if ($status_inicio == 3){
	   
	    /*  le tempo estouro merchan progressivo no xml  */
		
	   $link_final = "xml_progressivo.xml";
        //link do arquivo xml
       $xml_final = simplexml_load_file($link_final);	

	   //carrega o arquivo XML e retornando um Array Bloco 1 Destaque 

       foreach($xml_final -> progressivo as $posicao_bloco){
       //faz o loop nas tag com o nome "item"
		
		$posicao_bloco = utf8_decode($posicao_bloco -> tempo);
		//echo $posicao_bloco;
		
	} 

		/*  escreve tempo estouro merchan progressivo no xml  */
		
		$xml = new DOMDocument('1.0', 'UTF-8');
		$xml->formatOutput = true;

		$rss = $xml->createElement('rss');
		$rss->setAttribute('version', '2.0');
		$rss->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:g', 'http://base.google.com/ns/1.0');
		$xml->appendChild($rss);
        
		$segundos = $posicao_bloco; 
        $tempo = $segundos + 1;
		$posicao_bloco = gmdate("i:s", $tempo);
		
		$channel = $xml->createElement('progressivo');
		$channel->appendChild($xml->createElement('tempo', $tempo));		


		$rss->appendChild($channel);
		//$xml->save('xml_progressivo.xml');
	   
	   
	
	  echo "
                  
				<div class='row mx-lg-n2'>
				<div class='col py-1 px-lg-5'><lt_bloco_nome><b><center><strong><font color='#00FF00'>TEMPO RESTANTE MERCHAN</strong><font color='#fff'><br><lt_bloco_digito2>0<font color='red'></font></h1></center>
				</div>
				
				<div class='col py-3 px-lg-5 border bg-dark'><lt_bloco_nome><b><center><strong><font color='#00FF00'>TEMPO DE ESTOURO MERCHAN</strong><font color='#fff'><br><font color='red'><pisca2>$posicao_bloco</font></h1></center>
  				</div>
				</div>
           

		";
	
   }
	
	
	// Zera cronometro quando zera
	
	if (($status_inicio == 1) or ($status_inicio == 10)){
		
		
		
		// ---------------LER XML STATUS BLOCO--------------------


    $link_final = "xml_bloco.xml";
    //link do arquivo xml
    $xml_final = simplexml_load_file($link_final);	

	//carrega o arquivo XML e retornando um Array Bloco 1 Destaque 

    foreach($xml_final -> regressiva_bloco as $posicao_bloco){
    //faz o loop nas tag com o nome "item"
		
		$posicao_bloco = utf8_decode($posicao_bloco -> status);
		//echo $status_final;
		
	} 	
	
	//salva posição do proximo bloco no xml_bloco parte 1
		
	if ($posicao_bloco == 1){ $posicao_bloco_disparo = 2;}
	if ($posicao_bloco == 2){ $posicao_bloco_disparo = 3;}
	if ($posicao_bloco == 3){ $posicao_bloco_disparo = 4;}
	if ($posicao_bloco == 4){ $posicao_bloco_disparo = 5;}
	if ($posicao_bloco == 5){ $posicao_bloco_disparo = 6;}
	if ($posicao_bloco == 6){ $posicao_bloco_disparo = 7;}
	if ($posicao_bloco == 7){ $posicao_bloco_disparo = 8;}
	if ($posicao_bloco == 8){ $posicao_bloco_disparo = 1;}	
		
		
	If (($intervalo->format('%H:%I:%S') == "00:00:00") and ($status_inicio == 10)){
	
    //salva posição do proximo bloco no xml_bloco parte 2	
			
	$xml = new DOMDocument('1.0', 'UTF-8');
	$xml->formatOutput = true;	

	$rss = $xml->createElement('rss');
	$rss->setAttribute('version', '2.0');
	$rss->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:g', 'http://base.google.com/ns/1.0');
	$xml->appendChild($rss);

	$channel = $xml->createElement('regressiva_bloco');	
	$channel->appendChild($xml->createElement('status', $posicao_bloco_disparo));

	$rss->appendChild($channel);
	$xml->save('xml_bloco.xml');
		
	//zera regressiva xml_regressiva
	
	$xml = new DOMDocument('1.0', 'UTF-8');
	$xml->formatOutput = true;

	$rss = $xml->createElement('rss');
	$rss->setAttribute('version', '2.0');
	$rss->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:g', 'http://base.google.com/ns/1.0');
	$xml->appendChild($rss);


	$channel = $xml->createElement('regressiva');
	$channel->appendChild($xml->createElement('hora', "00"));
	$channel->appendChild($xml->createElement('minuto', "00"));
	$channel->appendChild($xml->createElement('segundo', "00"));
	$channel->appendChild($xml->createElement('status', '2'));


	$rss->appendChild($channel);
	$xml->save('xml_regressiva.xml');


	}
	
	
	If (($intervalo->format('%H:%I:%S') == "00:00:00") and ($status_inicio == 1)){
		
	//zera regressiva xml_regressiva
	
	$xml = new DOMDocument('1.0', 'UTF-8');
	$xml->formatOutput = true;

	$rss = $xml->createElement('rss');
	$rss->setAttribute('version', '2.0');
	$rss->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:g', 'http://base.google.com/ns/1.0');
	$xml->appendChild($rss);


	$channel = $xml->createElement('regressiva');
	$channel->appendChild($xml->createElement('hora', "00"));
	$channel->appendChild($xml->createElement('minuto', "00"));
	$channel->appendChild($xml->createElement('segundo', "00"));
	$channel->appendChild($xml->createElement('status', '3'));


	$rss->appendChild($channel);
	$xml->save('xml_regressiva.xml');

	}
	}
	

	/*  ----------------  */
	


?>


</body>
</html>