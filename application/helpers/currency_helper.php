<?php 

function numeroEmReais($numero) {
	if ($numero != 'Uninformed' and $numero !=0) {
		return "U$".number_format($numero, 0, ".", ",");
	}else{
		echo "Uninformed";
	}
}


function retirahttp($dados){
	$url =  str_replace("http://","",$dados);
	return str_replace("https://","",$url);
}

function languagesEdit($Lg){

	switch ($Lg) {

		case 'e':
		return "English";
		break;

		case 'es':
		return "English + Spanish";
		break;

		case 'ep':
		return "English + Portuguese";
		break;

		case 'esp':
		return "English + Spanish + Portuguese";
		break;

		case 's':
		return "Spanish";
		break;

		case 'sp':
		return "Spanish + Portuguese";
		break;

		case 'p':
		return "Portuguese";
		break;

		default:
		return "Select your language";
		break;
	}
}

function languagesBandeiras($Lg){

	switch ($Lg) {

		case 'e':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/United-States-Flag-icon.png')."'>";
		break;

		case 'es':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/United-States-Flag-icon.png')."'>
		<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Spain-Flag-icon.png')."'>";
		break;

		case 'ep':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/United-States-Flag-icon.png')."'>
		<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Brazil-Flag-icon.png')."'>";
		break;

		case 'esp':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/United-States-Flag-icon.png')."'>
		<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Spain-Flag-icon.png')."'>
		<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Brazil-Flag-icon.png')."'>";
		break;

		case 's':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Spain-Flag-icon.png')."'>";
		break;

		case 'sp':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Spain-Flag-icon.png')."'>
		<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Brazil-Flag-icon.png')."'>";
		break;

		case 'p':
		return "<img style='width:28px;height:25px;margin-right:3px' src='".base_url('img/Brazil-Flag-icon.png')."'>";
		break;

		default:
		return "Car sale new";
		break;
	}
}

