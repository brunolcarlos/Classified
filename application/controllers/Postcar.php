<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Postcar extends CI_Controller {

  public function index() {
    error_reporting(0);
    if (isset($_FILES['media'])) {

      if($this->session->userdata('logado')){
        $this->load->model('cadastro_model');
        $idUsuario = $this->session->userdata('logado');
        $usuario = $this->cadastro_model->verificaEmail($idUsuario['email']);
      }

      $preco = filter_input(INPUT_POST,'price',FILTER_SANITIZE_STRING);
      $novoPreco = str_replace(".", "", $preco);
      $make = filter_input(INPUT_POST,'make',FILTER_SANITIZE_STRING);
      $modelo =  filter_input(INPUT_POST,'model',FILTER_SANITIZE_STRING);


      $idUserPost = filter_input(INPUT_POST,'idUsuario',FILTER_SANITIZE_STRING); //recebe por post

      if (!$idUserPost) { // verifica se veio no post

        $idUserPost = $usuario['idUsuario']; 
        // atribiu se nao veio, fiz isto porque estava postando sem o id do usuario
      }

      $dados = array(
        "titulo" =>$make.' '.$modelo,
        "city" => filter_input(INPUT_POST,'city',FILTER_SANITIZE_STRING),
        "youtube" => filter_input(INPUT_POST,'youtube',FILTER_SANITIZE_STRING),
        "price" => $novoPreco,
        "vin" => filter_input(INPUT_POST,'vin',FILTER_SANITIZE_STRING),
        "odometer" => filter_input(INPUT_POST,'odometer',FILTER_SANITIZE_STRING),
        "modelo" => $make.' '.$modelo,
        "condition" => filter_input(INPUT_POST,'condition',FILTER_SANITIZE_STRING),
        "year" => filter_input(INPUT_POST,'year',FILTER_SANITIZE_STRING),
        "cylinders" => filter_input(INPUT_POST,'cylinders',FILTER_SANITIZE_STRING),
        "drive" => filter_input(INPUT_POST,'drive',FILTER_SANITIZE_STRING),
        "fuel" => filter_input(INPUT_POST,'fuel',FILTER_SANITIZE_STRING),
        "color" => filter_input(INPUT_POST,'color',FILTER_SANITIZE_STRING),
        "size" => filter_input(INPUT_POST,'size',FILTER_SANITIZE_STRING),
        "status" => filter_input(INPUT_POST,'status',FILTER_SANITIZE_STRING),
        "transmission" => filter_input(INPUT_POST,'transmission',FILTER_SANITIZE_STRING),
        "stateAuto" => filter_input(INPUT_POST,'state',FILTER_SANITIZE_STRING),
        "detalhes" => $this->input->post("info"),
        "dataAnuncio" => date("Y-m-d"),
        "idUser" => $idUserPost,
        "bodytype" => filter_input(INPUT_POST,'bodytype',FILTER_SANITIZE_STRING)
        );

      $this->load->model("upload_model");
      $this->upload_model->verificaValores($dados, $_FILES['media']['tmp_name'], $_FILES['media']['type']);

      redirect(base_url('car'));


    } else {
      redirect(base_url('publish'));
    }
  }

}
