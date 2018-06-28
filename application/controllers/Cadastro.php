<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller{

  public function index() {
    error_reporting(0);
    $this->load->view("english/top");
    $this->load->view("english/buscaDealers");
    $this->load->view("english/search");
    $this->load->view("english/register/body-register");
    $this->load->view("english/sponsored");
    $this->load->view("english/footer");

  }
  
  public function cadastro() {
    error_reporting(0);
    $senhaEmail = $this->input->post('password');
    $this->load->model('cadastro_model');
    $this->load->model('emailregistro');
    $usuario =  array(
      "nome" => $this->input->post('name'),
      "telefone" => $this->input->post('phone'),
      "email" => $this->input->post('email'),
      "state" => $this->input->post('state'),
      "senha" => md5($this->input->post('password'))
      );

    $userEmail = $usuario["email"];
    if($userEmail){
      echo "Usuário já cadastrado no banco de dados";
    }else{
      echo "Usuário cadastrado com sucesso";
      $this->cadastro_model->cadastrarUsuario($usuario);
      $this->emailregistro->envia_email_registro($usuario["email"],$senhaEmail,$usuario["nome"]);
    }
  }
}
