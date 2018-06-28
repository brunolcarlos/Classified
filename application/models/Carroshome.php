<?php 


class Carroshome extends CI_Model
{

	public function criaXml(){


		$this->db->limit(50);
		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->order_by('id', 'DESC');
		$carros =  $valida = $this->db->get()->result_array();

		$manipulador_arq = fopen("./xmls/feed.xml","w+");

		@fwrite($manipulador_arq,"<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n<rss>\n<channel>");


		foreach ($carros as $car) {

			$thumbs = $this->puxaThumb($car['id']);
			// echo "<pre>";
			// var_dump($thumbs);
			// echo "</pre>";
			$xml = "<item>\n"; 
			$xml .= "<title>".removehtml($car['modelo'])."</title>\n"; 
			$xml .= "<link>http://carsalenew.com/car/$car[id]</link>\n"; 
			$xml .= "<image>".base_url($thumbs['caminho']."thumb/".$thumbs['thumb'])."</image>\n"; 
			$xml .= "<year>$car[year]</year>\n"; 
			$xml .= "<language>us</language>\n";
			$xml .= "</item>\n";
			@fwrite($manipulador_arq,$xml); 

		}
		
		$xml .= "</channel>\n</rss>"; @fwrite($manipulador_arq,$xml); 

	}


	public function exibeCarrosHome($limit =0,$offset =0){
		
		if ($limit > 0)  $this->db->limit($limit,$offset);
		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->order_by('id', 'DESC');
		
		return $valida = $this->db->get()->result_array();
	}
	public function exibeCarrosHomeRandom($limit =0,$offset =0){
		
		if ($limit > 0)  $this->db->limit($limit,$offset);
		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->order_by('id', 'RANDOM');
		
		return $valida = $this->db->get()->result_array();
	}

	public function exibeStates(){
		
		$this->db->select("*");
		$this->db->from("states");
		$this->db->order_by('state', 'ASC');
		
		return $this->db->get()->result_array();
	}
	public function contaPostsEstados($state){
		
		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->where("stateAuto",$state);
		return $this->db->count_all_results();

	}

	public function exibeCarrosState($state = null,$model = null,$offset =0,$limit =0,$minyear = null,$maxyear = null,$minprice =0,$maxprice =0){

		if ($limit > 0)  $this->db->limit($limit,$offset);

		$minyear  = ($minyear =='Uninformed')?  0 : $minyear ;
		$maxyear  = ($maxyear =='Uninformed')?  date("Y") : $maxyear ;

		if ($minyear > $maxyear) { // verifica se o menor é maior e inverte

			$menor = $minyear;
			$maior = $maxyear;
			$minyear = $maior;
			$maxyear = $menor ;
		}


		$minprice = ($minprice <= 0)? $minprice = 0 : $minprice ;
		$maxprice = ($maxprice <= 0)? $maxprice = 0 : $maxprice ;


		if ($minprice > $maxprice and $maxprice > 0) { // verifica se o menor é maior e inverte
			$menor = $minprice;
			$maior = $maxprice;
			$minprice = $maior;
			$maxprice = $menor ;
		}

		if ($state == "all") {

			$this->db->select("*");
			$this->db->from("anuncios");

			if($maxyear > $minyear){
				$this->db->where("year >= $minyear");
				$this->db->where("year <= $maxyear");
			}else{
				$this->db->where("year >= $minyear");
			}

			if($maxprice > $minprice){
				$this->db->where("price >= $minprice");
				$this->db->where("price <= $maxprice");
			}else{
				$this->db->where("price >= ",$minprice);
			}

			if ($model != 'Uninformed') {

				$this->db->where('anuncios.modelo LIKE', '%'.$model.'%');
			}

			$this->db->order_by('id', 'DESC');
			return $this->db->get()->result_array();

		}else{


			$this->db->select("*");
			$this->db->from("anuncios");

			if($maxyear > $minyear){
				$this->db->where("year >= $minyear");
				$this->db->where("year <= $maxyear");
			}else{
				$this->db->where("year >= $minyear");
			}

			if($maxprice > $minprice){
				$this->db->where("price >= $minprice");
				$this->db->where("price <= $maxprice");
			}else{
				$this->db->where("price >= ",$minprice);
			}

			if ($model == 'Uninformed') {

				$this->db->where("stateAuto",$state);

			}else{

				$this->db->where('anuncios.modelo LIKE', '%'.$model.'%');
				$this->db->where("stateAuto",$state);
				// $this->db->where('anuncios.make LIKE', '%'.$model.'%');
				// $this->db->where("stateAuto",$state);

			}


			$this->db->order_by('id', 'DESC');
			return $this->db->get()->result_array();



		}
	}

	public function totalLinhasState($state = null,$model = null,$offset =0,$limit =0,$minyear = null,$maxyear = null,$minprice =0,$maxprice =0){


		$minyear  = ($minyear =='Uninformed')? $minyear = 0 : $minyear ;
		$maxyear  = ($maxyear =='Uninformed')? $maxyear = date("Y") : $maxyear ;

		if ($minyear > $maxyear) { // verifica se o menor é maior e inverte

			$menor = $minyear;
			$maior = $maxyear;
			$minyear = $maior;
			$maxyear = $menor ;
		}


		$minprice = ($minprice <= 0)? $minprice = '0' : $minprice ;
		$maxprice = ($maxprice <= 0)? $maxprice = '0' : $maxprice ;


		if ($minprice > $maxprice and $maxprice > 0) { // verifica se o menor é maior e inverte
			$menor = $minprice;
			$maior = $maxprice;
			$minprice = $maior;
			$maxprice = $menor ;
		}

		if ($state == "all") {
			
			$this->db->select("*");
			$this->db->from("anuncios");

			if($maxyear > $minyear){
				$this->db->where("year >= $minyear");
				$this->db->where("year <= $maxyear");
			}else{
				$this->db->where("year >= $minyear");
			}

			if($maxprice > $minprice){
				$this->db->where("price >= $minprice");
				$this->db->where("price <= $maxprice");
			}else{
				$this->db->where("price >= ",$minprice);
			}

			if ($model != 'Uninformed') {

				$this->db->where('anuncios.modelo LIKE', '%'.$model.'%');
			}

			$this->db->order_by('id', 'DESC');
			return $this->db->count_all_results();
			
		}else{

			$this->db->select("*");
			$this->db->from("anuncios");

			if($maxyear > $minyear){
				$this->db->where("year >= $minyear");
				$this->db->where("year <= $maxyear");
			}else{
				$this->db->where("year >= $minyear");
			}

			if($maxprice > $minprice){
				$this->db->where("price >= $minprice");
				$this->db->where("price <= $maxprice");
			}else{
				$this->db->where("price >= ",$minprice);
			}

			if ($model == 'Uninformed') {

				$this->db->where("stateAuto",$state);

			}else{

				$this->db->where('anuncios.modelo LIKE', '%'.$model.'%');
				$this->db->where("stateAuto",$state);
				// $this->db->where('anuncios.make LIKE', '%'.$model.'%');
				// $this->db->where("stateAuto",$state);

			}


			$this->db->order_by('id', 'DESC');
			return $this->db->count_all_results();

		}
	}

	public function exibeCarrosStateModel($state = null,$model = null,$offset =0,$limit =0){

		if ($limit > 0)  $this->db->limit($limit,$offset);

		if ($state == "all") {
			$this->db->select("*");
			$this->db->from("anuncios");
			$this->db->like("anuncios.modelo",$model);
			$this->db->or_like("anuncios.make",$model);
			$this->db->order_by('id', 'DESC');
			return $this->db->get()->result_array();

		}else{
			$this->db->select("*");
			$this->db->from("anuncios");
			$this->db->like("anuncios.modelo",$model);
			$this->db->where("stateAuto",$state);
			$this->db->order_by('id', 'DESC');
			return $retorno = $this->db->get()->result_array();

			if ($retorno) {
				$this->db->select("*");
				$this->db->from("anuncios");
				$this->db->like("anuncios.make",$model);
				$this->db->where("stateAuto",$state);
				$this->db->order_by('id', 'DESC');
				return $this->db->get()->result_array();
			}

		}
	}

	public function exibeCarrosStateSugestao($state,$id){
		if ($state == "all") {
			$this->db->limit(6);
			$this->db->select("*");
			$this->db->from("anuncios");
			$this->db->where("id !=",$id);
			$this->db->order_by('id', 'RANDOM');
			return $valida = $this->db->get()->result_array();
		}else{
			$this->db->limit(6);
			$this->db->select("*");
			$this->db->from("anuncios");
			$this->db->where("stateAuto",$state);
			$this->db->where("id !=",$id);
			$this->db->order_by('id', 'RANDOM');
			return $valida = $this->db->get()->result_array();
		}

	}
	public function exibeSugestaoHome($state = null){

		$data = strtotime(date("Y-m-d"));

		if ($state) {

			if ($state =='all') {
				$this->db->limit(6);
				$this->db->select("*");
				$this->db->from("vips");
				$this->db->join("anuncios", "anuncios.id = vips.idPostVip");
				$this->db->where("vips.dataVencVipUser >= ",$data);
				$this->db->order_by('RAND()');
				$resultado = $this->db->get()->result_array();

			}else{

				$this->db->limit(6);
				$this->db->select("*");
				$this->db->from("vips");
				$this->db->join("anuncios", "anuncios.id = vips.idPostVip");
				$this->db->where("anuncios.stateAuto",$state);
				$this->db->where("vips.dataVencVipUser >= ",$data);
				$this->db->order_by('RAND()');
				$resultado = $this->db->get()->result_array();
			}

			



			if (!$resultado) {
				$this->db->limit(6);
				$this->db->select("*");
				$this->db->from("vips");
				$this->db->join("anuncios", "anuncios.id = vips.idPostVip");
				$this->db->where("vips.dataVencVipUser >= ",$data);
				$this->db->order_by('RAND()');
				return $this->db->get()->result_array();

			}else{

				return $resultado;
			}

		}else{
			$this->db->limit(6);
			$this->db->select("*");
			$this->db->from("vips");
			$this->db->join("anuncios", "anuncios.id = vips.idPostVip");
			$this->db->where("vips.dataVencVipUser >= ",$data);
			$this->db->order_by('RAND()');
			return $this->db->get()->result_array();
		}


	}

	public function validaPostsVip($id){

		$dataAtual = strtotime(date("Y-m-d"));

		$this->db->where("idUsuario",$id);
		$usuario  = $this->db->get("usuario")->row_array();

		$dataVencimento = strtotime($usuario['validadeVip']);

		if ($dataAtual <= $dataVencimento) {
			return true;
		}else{
			return false;
		}

	}

	public function puxaThumb($id){
		$this->db->where("idPost",$id);
		return $this->db->get("fotosanuncios")->row_array();

	}

	public function totalLinhas(){
		return $this->db->count_all("anuncios");
	}

	public function totalLinhasLimite($usuario){
		$this->db->select("*");
		$this->db->from("anuncios");
		$this->db->where("idUser",$usuario);
		return $this->db->count_all_results();

	}


	public function semimagem($id){

		$dados = array(
			'caminho' => 'img/',
			'thumb' => 'logofacebook.fw.png',
			'fotos' => 'logofacebook.fw.png',
			'idPost' => $id
			);

		$this->db->insert("fotosanuncios",$dados);

		$this->db->where("idPost",$id);
		return $this->db->get("fotosanuncios")->row_array();

	}

	public function deletaDealertoDealer($id){

		$this->db->where("idAnuncio",$id);
		return $this->db->delete("dealertodealer");

	}
}


