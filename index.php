<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" version="XHTML+RDFa 1.0" dir="ltr">

	<head profile="http://www.w3.org/1999/xhtml/vocab">
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
	<meta name="description" content="" />
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	
	<title>Thomas Guesnon | tableau tactile</title>
	
	<link rel="shortcut icon" href="css/assets/favicon.ico">
	<style media="all" type="text/css">
		@import url("css/reset.css");
		@import url("css/typographie.css");
		@import url("css/layout.css");
		/*@import url("css/specific.css");*/
	</style>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/init.js"></script>
	
	</head>
	<body class="frontpage">
		<?php
						
			$json_file = file_get_contents("includes/tactiletable.json");
			$json_a=json_decode($json_file, true);
			
			$randomizeGrid = false; // randomize the results in the page grid
			
			$output = "<div class='view-frontpage'>";
			
			$tmpArray = array();
			
			foreach ($json_a as $key => $value)
			{
				foreach($value as $v)
				{
					$path = $v['path'];
					$ch = $v['characteristics'];
					$se = $v['sensation'];
					
					
					$storedOutput = "<div class='views-row'>";     
					$storedOutput .= "<div class='views-field views-field-field-image-cropped'>";       
					$storedOutput .= "<div class='field-content'>";
					$storedOutput .= "<a href='#'>";
					$storedOutput .= "<div id='wrapper'>";
					$storedOutput .= "<div id='tags'>";
					
					$storedOutput .= "<p class='title tags'>".$path."</p>";
					$storedOutput .= "<br/>";
					foreach($ch as $char)
					{
						$storedOutput .= "<p class='char tags'>".$char."</p>";
						
					}
					$storedOutput .= "<br/>";
					foreach($se as $sens)
					{
						$storedOutput .= "<p class='sens tags'>".$sens."</p>";
					}
					
					$storedOutput .= "</div>";
					$storedOutput .= "</div>";
					$storedOutput .= "<img src='files/".$path."'/>";
					$storedOutput .= "</a>";
					$storedOutput .= "</div>";  
					$storedOutput .= "</div>"; 
				    $storedOutput .= "</div>";
				    
				    $tmpArray[] = $storedOutput;
				}
			}
			
			if ($randomizeGrid == true)
			{
				shuffle($tmpArray);
			}
			
			
			foreach($tmpArray as $string){
			    $output .= $string;
			}
			
			$output .= "</div>";
	
			echo $output;
		
		?>


	</body>
</html>