<?php


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
	   

	
	// ---------------LER XML BLOCOS 1 DESTAQUE--------------------
    
     if ($posicao_bloco == 1){
		
		$link_inicio_bloco = "xml_destaque.xml";
		$link_posicao_bloco = "bloco_1";
    }
	
	// ---------------LER XML BLOCOS 2 DESTAQUE--------------------
    
     if ($posicao_bloco == 2){
		
		$link_inicio_bloco = "xml_destaque.xml";
		$link_posicao_bloco = "bloco_2";
    }
	
	// ---------------LER XML BLOCOS 1 TRIBUNA--------------------
    
     if ($posicao_bloco == 3){
		
		$link_inicio_bloco = "xml_tribuna.xml";
		$link_posicao_bloco = "bloco_1";
    }
	
	// ---------------LER XML BLOCOS 2 TRIBUNA--------------------	
    
     if ($posicao_bloco == 4){
		
		$link_inicio_bloco = "xml_tribuna.xml";
		$link_posicao_bloco = "bloco_2";
    }
	
	// ---------------LER XML BLOCOS 3 TRIBUNA--------------------
    
     if ($posicao_bloco == 5){
		
		$link_inicio_bloco = "xml_tribuna.xml";
		$link_posicao_bloco = "bloco_3";
    }
	
	// ---------------LER XML BLOCOS 4 TRIBUNA--------------------	
    
     if ($posicao_bloco == 6){
		
		$link_inicio_bloco = "xml_tribuna.xml";
		$link_posicao_bloco = "bloco_4";
    }
	
	// ---------------LER XML BLOCOS 1 SHOW DE BOLA--------------------
    
     if ($posicao_bloco == 7){
		
		$link_inicio_bloco = "xml_sb.xml";
		$link_posicao_bloco = "bloco_1";
    }
	
	// ---------------LER XML BLOCOS 1 SHOW DE BOLA--------------------	
    
     if ($posicao_bloco == 8){
		
		$link_inicio_bloco = "xml_sb.xml";
		$link_posicao_bloco = "bloco_2";
    }
	
	
    $link_inicio = $link_inicio_bloco;
    //link do arquivo xml
    $xml_inicio = simplexml_load_file($link_inicio);	
    foreach($xml_inicio -> $link_posicao_bloco as $bloco1_inicio)
	
	{
		

    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
		
		$tempo_bloco = utf8_decode($bloco1_inicio -> hora).":".utf8_decode($bloco1_inicio -> minuto).":".utf8_decode($bloco1_inicio -> segundo);        
    	//echo $tempo_bloco;	
		//echo $status_inicio;
		
        //echo "<center><font size='5'>Hora inicio:"
       // .utf8_decode($bloco1_inicio -> hora).":".utf8_decode($bloco1_inicio -> minuto).":".utf8_decode($bloco1_inicio -> segundo)."</font></center>";        
    } //fim do foreach	
	
	
	//CONVERTE HORAS EM SEGUNDOS
	$segundos_bloco = strtotime('1970-01-01 '.$tempo_bloco.'UTC');
	//echo "<BR>".$hora_final_bloco;
	
	
	//converte segundos em horas e escreve no xml regressiva com status 10
	
	date_default_timezone_set('America/Sao_Paulo');
	//echo $status_final;    
	
	
	$hora_total = date('H:i:s', strtotime("+ ".$segundos_bloco."second"));
	
	$hora = substr($hora_total, 0, 2); //posição inicial = 0, comprimento = 2
	$minuto = substr($hora_total, 3, 2); //posição inicial = 3, comprimento = 5
	$segundo = substr($hora_total, 6, 2); //posição inicial = 6, comprimento = 7
	
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
	$channel->appendChild($xml->createElement('status', '10'));

	$rss->appendChild($channel);
	$xml->save('xml_regressiva.xml');

	

?>