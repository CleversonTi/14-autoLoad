<?php
function __autoload($nomeCLasse){
	var_dump($nomeCLasse);
	require_once("$nomeCLasse.php");
	//var_dump($nomeCLasse);
}
//require_once("DelRey.php");
	$carr  = new DelRey();
	$carr->acelerar(80);
?>
