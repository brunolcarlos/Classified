<?php 



function exibeUrl(){

	$server = $_SERVER['SERVER_NAME'];
	$endereco = $_SERVER ['REQUEST_URI'];
	$url = "http://" . $server . $endereco;

	$url = explode("/",$url);
	echo $url[3];
}

?>