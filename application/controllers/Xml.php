<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Xml extends CI_Controller {




	public function index(){



		$this->db->limit(10);
		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->order_by('id', 'DESC');
		$carros =  $valida = $this->db->get()->result_array();

		$manipulador_arq = fopen("./xmls/feed.xml","w+");


		@fwrite($manipulador_arq,"<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n<rss>\n<channel>");


		foreach ($carros as $car) {

			$caminho = $this->puxaThumb($car['id']);
			echo "<span><img style='width:100px' src='".base_url($caminho['caminho']."thumb/".$caminho['thumb'])."'></span>";
			echo "#".$car['id']." - ".$car['modelo']."<br><hr>";

			$xml = "<item>\n"; 
			$xml .= "<title>$car[modelo]</title>\n"; 
			$xml .= "<link>http://carsalenew.com/car/$car[id]</link>\n"; 
			$xml .= "<image>".base_url($caminho['caminho']."thumb/".$caminho['thumb'])."</image>\n"; 
			$xml .= "<year>$car[year]</year>\n"; 
			$xml .= "<price>".numeroEmReais($car['price'])."</price>\n";
			$xml .= "<language>us</language>\n";
			$xml .= "</item>\n";
			@fwrite($manipulador_arq,$xml); 

		}
		$xml .= "</channel>\n</rss>"; @fwrite($manipulador_arq,$xml); 

	}


	public function puxaThumb($id){
		$this->db->where("idPost",$id);
		return $this->db->get("fotosanuncios")->row_array();

	}

}

