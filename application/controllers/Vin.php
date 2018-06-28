<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Vin extends CI_Controller {

	public function index(){

		$this->load->model('banners_model');

		@$banners = array(
			'banners' => $this->banners_model->exibeBanner());


		$this->load->view("english/top");
		$this->load->view("english/buscaDealers");

		$this->load->view("english/search");
		$this->load->view("english/banner-sponsored-google");
		$this->load->view("english/vin/body-vin");
		$this->load->view("english/sponsored",$banners);
		$this->load->view("english/marcas");
		$this->load->view("english/footer");
	}

	public function vinN(){

		$vin = $this->input->post("vin");

		$postdata = http_build_query(
			array(
				'format' => 'json',
				'data' => $vin
				)
			);
		$opts = array('http' =>
			array(
				'method' => 'POST',
				'content' => $postdata
				)
			);
		$apiURL = "https://vpiclist.cdan.dot.gov/vpiclistapi/vehicles/DecodeVINValuesBatch/";
		$context = stream_context_create($opts);
		@$fp = fopen($apiURL, 'rb', false, $context);
		if(!$fp)
		{
			echo "in first if";
		}
		$response = @stream_get_contents($fp);
		if($response == false)
		{
			echo "in second if";
		}
		$dado = json_decode($response,true);

		$info = array(
			'fuel' => $dado['Results'][0]['FuelTypePrimary'],
			'fabricante' => $dado['Results'][0]['Make'],
			'model' => $dado['Results'][0]['Model'],
			'year' => $dado['Results'][0]['ModelYear'],
			'TransmissionStyle' => $dado['Results'][0]['TransmissionStyle'],
			'PlantCountry' => $dado['Results'][0]['PlantCountry'],
			'EngineCylinders' => $dado['Results'][0]['EngineCylinders'],
			'VIN' => $dado['Results'][0]['VIN']
			);


		echo "<table class='table striped z-depth-1 black-text tabela'>";
		echo "<tr>";
		echo "<td class='tabela'>Model : ".$info['model']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Make : ".$info['fabricante']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Fuel : ".$info['fuel']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Year : ".$info['year']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Transmission : ".$info['TransmissionStyle']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Vin : ".$info['VIN']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Country : ".$info['PlantCountry']."</td>";
		echo "</tr>";
		echo "<tr>";
		echo "<td class='tabela'>Cylinders : V".$info['EngineCylinders']."</td>";
		echo "</tr>";
		echo "</table>";
	}

}