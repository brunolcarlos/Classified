<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Alteraimagens extends CI_Controller {

  public function index() {
    error_reporting(0);

    if (isset($_FILES['media'])) {

      if($this->session->userdata('logado')){

       $idUsuario = $this->session->userdata('logado');


       $this->load->model("car_model");
       $this->load->model("deletepostagem");

       $idPost = $this->input->post('id');

       $dados = $this->car_model->busca($idPost);




       if ($idUsuario['idUsuario'] == $dados[0]['idUser'] or ($idUsuario['email'] == 'sitespomerode@gmail.com')) {


          // vai executar o comando

         $this->load->model("novasimagens_model");
         $this->deletepostagem->deleteImagensThumb($idPost);
         $this->deletepostagem->deletafotosBanco($idPost);
         $this->novasimagens_model->verificaValores($idPost,$_FILES['media']['tmp_name'], $_FILES['media']['type']);

         

       }// if ids



     } // if user logado

   } else {

    redirect(base_url('publish'));

   }// else

 }// fecha a funcao

}// fecha a classe
