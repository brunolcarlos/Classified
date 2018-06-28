<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro_model extends CI_Model {

	public function cadastrarUsuario($user) {

		$this->db->insert("usuario",$user);
		return $id = $this->db->insert_id();

	}
	public function updateUsuario($user) {
		return $this->db->update("usuario",$user, "idUsuario = $user[idUsuario]");

	}
	public function verificaEmail($user) {
		$user = array("email" => $user);
		$this->db->where("email",$user['email']);
		return $this->db->get("usuario")->row_array();
	}

	public function verificaUsername($user) {
		$names_block = ['page','carsalenew','cargurus','carfax','register','contact','admin','login','logout','car','cars','edit','delete','public','ticket','home','publish','state','dashboard','painel','deletecars','username','user','users','www','http','http://','https','https://','vip','plan','plans','vips','url','profile','emailcontatouser','pedidoscarro','postcar','shop','vin','email','atualiza','about'];

		if (in_array($user, $names_block)) {
			return true;
		}else{
			$user = array("usernameUrl" => $user);
			$this->db->where("usernameUrl",$user['usernameUrl']);
			return $this->db->get("usuario")->row_array();
		}
		
	}


	public function buscaPorEmailESenha($email, $senha) {
		$this->db->where("email", $email);
		$this->db->where("senha", $senha);
		$usuario = $this->db->get("usuario")->row_array();
		return $usuario;
	}


	public function resetaVipVencido($user){

		$user['vipPosts'] = 0;
		$user['limitCars'] = 10;
		$user['userVip'] = 0;

		$this->db->update("usuario",$user, "idUsuario = $user[idUsuario]");
		return $this->db->query("update anuncios set vip = 0 where idUser = $user[idUsuario]");
	}

	public function  buscaDealer($name){
		$this->db->limit(40);
		$this->db->from("usuario");
		$this->db->like("nome",$name);
		$this->db->where("usernameUrl != ",'');
		$this->db->order_by('nome', 'ASC');
		$dados =  $this->db->get()->result_array();
		if ($dados) {
			return $dados;
		}else{
			return false;		}


		}
	}
