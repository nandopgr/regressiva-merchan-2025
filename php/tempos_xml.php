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

		<style>
          body { background: #00FFFF; }
          .container { background: white; }
		  
		  
		 box_letra {
    width: auto;
    height: auto;
    background: #900;
    color: #FFF;
    padding: 1px;
    border: 2px solid #CCC;
}
        </style>
		
		
		
</head>
<body>

<?php	

// ---------------LER XML STATUS BLOCO--------------------


    $link_bloco = "xml_bloco.xml";
    //link do arquivo xml
    $xml_bloco = simplexml_load_file($link_bloco);	

	//carrega o arquivo XML e retornando um Array Bloco 1 Destaque 

    foreach($xml_bloco -> regressiva_bloco as $posicao_bloco){
    //faz o loop nas tag com o nome "item"
		
		$posicao_bloco = utf8_decode($posicao_bloco -> status);
		//echo $status_final;
		
	} 

// ---------------LER XML BLOCOS COMERCIAIS inicio--------------------
    echo "<h6><font color='	#FF0'>TEMPOS PROGRAMADOS</font></h6><hr>";

    echo "<h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ABERTURA PGM</h5>";

    $link_tribuna = "xml_inicio.xml";
    //link do arquivo xml
    $xml_tribuna = simplexml_load_file($link_tribuna);	

	//carrega o arquivo XML e retornando um Array Bloco 1 tribuna 

    foreach($xml_tribuna -> regressiva_inicio as $bloco1_inicio){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        echo "<b><center><strong><font color='	#00FF00'>Hora Inicio:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_inicio -> hora).":".utf8_decode($bloco1_inicio -> minuto).":".utf8_decode($bloco1_inicio -> segundo)."</font>";          
    } //fim do foreach
	
	
// ---------------LER XML BLOCOS COMERCIAIS ifinal--------------------

    echo "<h5><hr> ENCERRAMENTO PGM</h5>";

    $link_tribuna = "xml_final.xml";
    //link do arquivo xml
    $xml_tribuna = simplexml_load_file($link_tribuna);	

	//carrega o arquivo XML e retornando um Array Bloco 1 tribuna 

    foreach($xml_tribuna -> regressiva_final as $bloco1_final){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        echo "<b><center><strong><font color='	#00FF00'>Hora Final:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_final -> hora).":".utf8_decode($bloco1_final -> minuto).":".utf8_decode($bloco1_final -> segundo)."</font>";          
    } //fim do foreach
	
// ---------------INICIO LER XML BLOCOS COMERCIAIS DESTAQUE--------------------

    echo "<h5><hr> DESTAQUE</h5>";

    $link_destaque = "xml_destaque.xml";
    //link do arquivo xml
    $xml_destaque = simplexml_load_file($link_destaque);	

	//carrega o arquivo XML e retornando um Array Bloco 1 Destaque 

    foreach($xml_destaque -> bloco_1 as $bloco1_destaque){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
		
	if ($posicao_bloco == 1) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 1:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_destaque -> minuto).":".utf8_decode($bloco1_destaque -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 1:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_destaque -> minuto).":".utf8_decode($bloco1_destaque -> segundo)."</font>";          
    } //fim do foreach
	}

	//carrega o arquivo XML e retornando um Array Bloco 1 Destaque 

    foreach($xml_destaque -> bloco_2 as $bloco2_destaque){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
      
	  if ($posicao_bloco == 2) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 2:</strong></font><font color='#fff'> "
        .utf8_decode($bloco2_destaque -> minuto).":".utf8_decode($bloco2_destaque -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 2:</strong></font><font color='#fff'> "
        .utf8_decode($bloco2_destaque -> minuto).":".utf8_decode($bloco2_destaque -> segundo)."</font>";          
    } //fim do foreach
	}	
		
     //fim do foreach	
	
	
// ---------------INICIO LER XML BLOCOS COMERCIAIS TRIBUNA--------------------	
	
    echo "<h5><hr> TRIBUNA</h5>";

    $link_tribuna = "xml_tribuna.xml";
    //link do arquivo xml
    $xml_tribuna = simplexml_load_file($link_tribuna);	

	//carrega o arquivo XML e retornando um Array Bloco 1 tribuna 

    foreach($xml_tribuna -> bloco_1 as $bloco1_tribuna){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        
		if ($posicao_bloco == 3) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 1:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_tribuna -> minuto).":".utf8_decode($bloco1_tribuna -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 1:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_tribuna -> minuto).":".utf8_decode($bloco1_tribuna -> segundo)."</font>";          
    } //fim do foreach
	}	
		
     //fim do foreach	
	
	//carrega o arquivo XML e retornando um Array Bloco 1 tribuna 

    foreach($xml_tribuna -> bloco_2 as $bloco2_tribuna){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        
		if ($posicao_bloco == 4) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 2:</strong></font><font color='#fff'> "
        .utf8_decode($bloco2_tribuna -> minuto).":".utf8_decode($bloco2_tribuna -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 2:</strong></font><font color='#fff'> "
        .utf8_decode($bloco2_tribuna -> minuto).":".utf8_decode($bloco2_tribuna -> segundo)."</font>";          
    } //fim do foreach
	}
	
	foreach($xml_tribuna -> bloco_3 as $bloco3_tribuna){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        
		if ($posicao_bloco == 5) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 3:</strong></font><font color='#fff'> "
        .utf8_decode($bloco3_tribuna -> minuto).":".utf8_decode($bloco3_tribuna -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 3:</strong></font><font color='#fff'> "
        .utf8_decode($bloco3_tribuna -> minuto).":".utf8_decode($bloco3_tribuna -> segundo)."</font>";          
    } //fim do foreach
	}
	
	foreach($xml_tribuna -> bloco_4 as $bloco4_tribuna){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        
		if ($posicao_bloco == 6) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 4:</strong></font><font color='#fff'> "
        .utf8_decode($bloco4_tribuna -> minuto).":".utf8_decode($bloco4_tribuna -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 4:</strong></font><font color='#fff'> "
        .utf8_decode($bloco4_tribuna -> minuto).":".utf8_decode($bloco4_tribuna -> segundo)."</font>";          
    } //fim do foreach
	}
	

// ---------------INICIO LER XML BLOCOS COMERCIAIS SB--------------------

    echo "<h5><hr> SHOW DE BOLA</h5>";

    $link_sb = "xml_sb.xml";
    //link do arquivo xml
    $xml_sb = simplexml_load_file($link_sb);	

	//carrega o arquivo XML e retornando um Array Bloco 1 sb 

    foreach($xml_sb -> bloco_1 as $bloco1_sb){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        
		if ($posicao_bloco == 7) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 1:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_sb -> minuto).":".utf8_decode($bloco1_sb -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 1:</strong></font><font color='#fff'> "
        .utf8_decode($bloco1_sb -> minuto).":".utf8_decode($bloco1_sb -> segundo)."</font>";          
    } //fim do foreach
	}
	
	//carrega o arquivo XML e retornando um Array Bloco 1 sb 

    foreach($xml_sb -> bloco_2 as $bloco2_sb){
    //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        
		if ($posicao_bloco == 8) {
        echo "<b><center><strong><font color='	#00FF00'><box_letra>Bloco 2:</strong></font><font color='#fff'> "
        .utf8_decode($bloco2_sb -> minuto).":".utf8_decode($bloco2_sb -> segundo)."</font></box_letra>";          
    } //fim do foreach
	 else {
		 echo "<b><center><strong><font color='	#00FF00'>Bloco 2:</strong></font><font color='#fff'> "
        .utf8_decode($bloco2_sb -> minuto).":".utf8_decode($bloco2_sb -> segundo)."</font>";          
    } //fim do foreach
	}
	
	
	
?>
</body>
</html>