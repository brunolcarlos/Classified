<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class State extends CI_Controller
{
	


	public function s_car($state = null, $model = null,$minyear = null , $maxyear = null,$minprice = null,$maxprice = null, $offset =null){


		$this->load->model('title_model');

		$state  = $state;

		$model = ($model =='Uninformed' or $model == null ) ? 'Uninformed' : $model;


		$minprice = $minprice;
		$minprice = (!$minprice) ? 0  : $minprice ;
		// echo "<br>";
		$maxprice = $maxprice;
		$maxprice = (!$maxprice) ? 0  : $maxprice ;
		// echo "<br>";
		$minyear = ($minyear =='Uninformed' or $minyear == null ) ? 0 : $minyear;
		// echo "<br>";
		$maxyear = ($maxyear =='Uninformed' or $maxyear == null ) ? 0 : $maxyear;

		$estado['estado'] = $state;

		$this->load->model('carroshome');
		$this->load->library('pagination');

		$config['base_url'] = base_url("state/$state/$model/$minyear/$maxyear/$minprice/$maxprice/");


		$qtd = $config['per_page'] = 18;
		$config['uri_segment'] = 8;
		$config['num_links'] = 1;
		$config['cur_tag_open'] = "<li class='waves-effect white-text #1e88e5 blue darken-1 pagenationMinha'><a href='#' class='desativaLink  white-text'>";
		$config['cur_tag_close'] = "</li></a>";
		$config['num_tag_open'] = "<li class='waves-effect brancoA white-text #eeeeee grey lighten-3  pagenationMinha'>";
		$config['num_tag_close'] = "</li>";
		$config['next_tag_open'] = "<li class='waves-effect  brancoA  white-text #eeeeee grey lighten-3 pagenationMinha'>";
		$config['next_tag_close'] = "</li>";
		$config['last_tag_open'] = "<li class='waves-effect brancoA   white-text #eeeeee grey lighten-3 pagenationMinha'>";
		$config['last_tag_close'] = "</li>";
		$config['full_tag_open'] = "<li class='waves-effect  brancoA  white-text #eeeeee grey lighten-3 pagenationMinha'><a href='#' class='desativaLink white-text'>";
		$config['full_tag_close'] = "</li></a>";


		$config['total_rows'] = $this->carroshome->totalLinhasState($state,$model,$offset,$qtd,$minyear,$maxyear,$minprice,$maxprice);
		$carros = $this->carroshome->exibeCarrosState($state,$model,$offset,$qtd,$minyear,$maxyear,$minprice,$maxprice);

		$this->pagination->initialize($config);

		$dados = array(
			'dados' => $carros
			);
		$this->load->model('carroshome');
		$carrosSugestao = array(
			'carrosSugestao' => $this->carroshome->exibeSugestaoHome($state));


		$this->load->model('banners_model');
		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());

		$links  = array(
			'links' => $this->carroshome->exibeStates());

		$this->load->view("english/state/top-state",$estado);
		$this->load->view("english/buscaDealers");

		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/home/home-sugestao",$carrosSugestao);
		$this->load->view("english/state/body-state",$dados);
		// $this->load->view('english/register-sponsored');
		// $this->load->view("english/sponsored",$banners);
		$this->load->view("english/home/nao-encontrou");
		$this->load->view("english/marcas");
		$this->load->view("english/home/home-sitemap-body",$links);
		$this->load->view("english/footer");

	}

}