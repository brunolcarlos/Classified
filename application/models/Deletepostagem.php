<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Deletepostagem extends CI_Model {

	public function deletarpost($idPOst,$idUser,$ativo = null){
		if($ativo == "10"){
			$this->db->where("id",$idPOst);
			return $this->db->delete("anuncios");
		}else{
			$this->db->where("id",$idPOst);
			$this->db->where("idUser",$idUser);
			return $this->db->delete("anuncios");
		}
		

		//if ($dado['idUser'] == $idUser) {
			//$this->db->where("id",$idPOst);
			//return $this->db->delete('anuncios');
		//}
	}

	public function deletafotosBanco($idPOst){
		$this->db->where("idPost",$idPOst);
		return $this->db->delete('fotosanuncios');
	}

	public function deleteImagensThumb($idPost){
		$this->db->where("idPost",$idPost);
		$this->db->from("fotosanuncios");
		$fotos = $this->db->get()->result_array();

		foreach ($fotos as $dado) {

			if ($dado['caminho'] == 'img/') {
				
			}else{

				$img = "./".$dado['caminho'].$dado['fotos'];
				$thumb = "./".$dado['caminho']."thumb/".$dado['thumb'];
				unlink($img);
				unlink($thumb);
			}

			
		}

		
	}
	

}