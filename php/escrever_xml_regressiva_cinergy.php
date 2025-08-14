<?php

    date_default_timezone_set('America/Sao_Paulo');
	//echo date('H:i:s', strtotime('-31 second'));
	
	
 /*Comando Pula  ou recua blocos comerciais  */
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

	if ($_GET['status'] == 9){ 		
		
	if ($posicao_bloco == 1){ $posicao_bloco_disparo = 2;}
	if ($posicao_bloco == 2){ $posicao_bloco_disparo = 3;}
	if ($posicao_bloco == 3){ $posicao_bloco_disparo = 4;}
	if ($posicao_bloco == 4){ $posicao_bloco_disparo = 5;}
	if ($posicao_bloco == 5){ $posicao_bloco_disparo = 6;}
	if ($posicao_bloco == 6){ $posicao_bloco_disparo = 7;}
	if ($posicao_bloco == 7){ $posicao_bloco_disparo = 8;}
	if ($posicao_bloco == 8){ $posicao_bloco_disparo = 1;}	
			
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
	
	
	} 

	else {

if ($_GET['status'] == 0){
	
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

   } else {
	   


/*status recebe tempo regressiva  */

$status_regressiva = $_GET['status']." second";
//echo $status_regressiva;
$hora_total = date('H:i:s', strtotime($status_regressiva));

//$hora = substr($hora_total_, 0, 2); //posição inicial = 0, comprimento = 2
//$minuto = substr($hora_total, 3, 2); //posição inicial = 3, comprimento = 5
//$segundo = substr($hora_total, 6, 2); //posição inicial = 6, comprimento = 7
 
//echo $hora;
//echo $minuto;
//echo $segundo;

//echo $hora_total."<br>";

$hora = substr($hora_total, 0, 2); //posição inicial = 0, comprimento = 2
$minuto = substr($hora_total, 3, 2); //posição inicial = 3, comprimento = 5
$segundo = substr($hora_total, 6, 2); //posição inicial = 6, comprimento = 7


//echo $hora.":".$minuto.":".$segundo;

$xml = new DOMDocument('1.0', 'UTF-8');
$xml->formatOutput = true;

$rss = $xml->createElement('rss');
$rss->setAttribute('version', '2.0');
$rss->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:g', 'http://base.google.com/ns/1.0');
$xml->appendChild($rss);


$channel = $xml->createElement('regressiva');
$channel->appendChild($xml->createElement('hora', $hora));
$channel->appendChild($xml->createElement('minuto', $minuto));
$channel->appendChild($xml->createElement('segundo', $segundo));
$channel->appendChild($xml->createElement('status', '1'));


$rss->appendChild($channel);
$xml->save('xml_regressiva.xml');
   }
   }
   

?>