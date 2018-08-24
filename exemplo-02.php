<?php
	function incluirClasse($nomeClasse){

		if(file_exists($nomeClasse . "php") === true){
			require_once($nomeClasse . ".php");
		}		
	}

	spl_autoload_register("incluirClasse");
	
	spl_autoload_register(function($nomeClasse){

		if(file_exists("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . "php") === true){
			require_once("Abstrata" . DIRECTORY_SEPARATOR . $nomeClasse . "php");
		}

	});

	$carr  = new DelRey();
	$carr->acelerar(80);
?>
