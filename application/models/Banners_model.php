<?php 


class Banners_model extends CI_Model{


	public function exibeBanner($data){

		$this->db->limit(4);

		$this->db->from("autorizacaobanner");
		$this->db->join("bannerpatrocinado", "bannerpatrocinado.bannerIdUser = autorizacaobanner.idUserBannerAuto");
		$this->db->order_by('idBanner', 'RANDOM');
		return $valida = $this->db->get()->result_array();

	}

	public function validaDataBanner($dataB){

		$dataAtual = strtotime(date("Y-m-d"));

		$dataVencimento = strtotime($dataB);

		if ($dataAtual <= $dataVencimento){

			return true;
			
		}else{

			return false;
			
		}

	}

}