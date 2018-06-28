<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

function dadosSite($info){

	switch ($info) {
		case 'title':
		return "Car Sale New - Used Cars For Sale - The best Dealers share here.";
		break;

		case 'ogimage':
		$ogimage = base_url('img/carroOg3.jpg');
		return "$ogimage";
		break;
		
		default:
		break;
	}
}

function data($dados){
	$data = explode("-", $dados);
	return $data[1]."/".$data[2]."/".$data[0];
}

function totalCarros($usuario){
	$ci =& get_instance();
	$ci->load->model('carroshome');
	return  $ci->carroshome->totalLinhasLimite($usuario);

}

function vipVencido($dataAtual, $dataVencimento,$free){
	$dataAtual = strtotime(date($dataAtual));
	
	$dataVencimento = strtotime(date($dataVencimento));

	if ($free == '' or $free <= 0) {
		return false;
	}else{
		
		if ($dataAtual <= $dataVencimento ) {
			return false;
		}else{
			return true;
		}
	}

	

}
function planoVip($id){
	if ($id == 0) {
		echo "Free";
	}
	elseif($id == 1){
		echo "Basic";
	}elseif($id == 2){
		echo "One";
	}elseif($id == 3){
		echo "Full";
	}
}

function html_scape($var){
	return htmlspecialchars($var);
}


function removehtml($var){


	$procurar   = array('À','Á','Â','Ã','Ä','Å','Æ','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ð','Ñ','Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','ß','à','á','â','ã','ä','å','æ','ç','è','é','ê','ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ',"&",">","<","+","=",")","(","[","]","{","}","'","`","!","$","^","_","*","%","#","&","/",".",",");



	$substituir = array('A','A','A','A','A','A','AE','C','E','E','E','E','I','I','I','I','D','N','O','O','O','O','O','O','U','U','U','U','Y','s','a','a','a','a','a','a','ae','c','e','e','e','e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y');

	return str_replace($procurar, $substituir, $var);
}

function youtubes($str){

	// // $str = 'https://youtu.be/E0YU3d4Vvxs';
	// 	$str = 'https://www.youtube.com/watch?v=E0YU3d4Vvxs';

	$sel_cat = $str;

	$categoria = 'youtu.be'; 

	if(strpos($sel_cat, "$categoria"))
	{
		$str = explode("/",$str);
		return $youtube =  'https://www.youtube.com/embed/'.$str[3];

	}
	else
	{
		preg_match('/(v\/|\?v=)([^&?\/]{5,15})/', $str, $x);
		return $youtube =  'https://www.youtube.com/embed/'.end($x);

	}

}