<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Car extends CI_Controller {


    public function mostra($id){
        error_reporting(0);

        $this->load->model('title_model');

        $this->load->model("car_model");

        $modelo = explode("-",$id);

        $id = $modelo[0];

        $idUser = $this->session->userdata("logado");
        
        $idUser = array('idUser' =>$this->cadastro_model->verificaEmail($idUser['email']));

        $this->car_model->ultimoId($id); 

        $dadosCarro = $this->car_model->busca($id);
        
        $this->car_model->acessos($id);
        
        if (empty($dadosCarro[0]['id'])) {
            echo "<script>window.location='./home';</script>";
        }


        $server = $_SERVER['SERVER_NAME'];
        $endereco = $_SERVER ['REQUEST_URI'];
        $url = "http://" . $server . $endereco;

        $url = explode("/",$url);

        //print_r($url);
        $dados = array(
            'dados' => $dadosCarro,
            );
        // Envia os dados para o topo
        $topo = array(
            'topo' => $this->car_model->busca($id)
            );
        
        $dados['dados']['0']['url'] = $url[3];

        //Estou buscando por estado os ultimos 8 automoveis para exibir como sugestao
        $this->load->model('carroshome');


        $carros = array(
            'carros' => $this->carroshome->exibeCarrosStateSugestao($dados['dados']['0']['stateAuto'],$id)
            );

        // fim da sugestao


        $links  = array(
            'links' => $this->carroshome->exibeStates());


        $this->load->view("english/car/top-car",$topo);
        $this->load->view("english/buscaDealers");
        $this->load->view("english/search");
        $this->load->view("english/banner-sponsored-google", $dados);
        $this->load->view("english/car/body-car",$dados);
        $this->load->view("english/car/seller",$dados);
        $this->load->view("english/car/sponsored-car",$carros);
        $this->load->view("english/marcas");
        $this->load->view("english/home/home-sitemap-body",$links);
        $this->load->view("english/footer");
        $this->load->view("english/btnEdit");



    }

    public function index() {
       if (empty($id)) {
        echo "<script>window.location='./home';</script>";
    }else{
        $this->session->set_userdata(array(
            "logado" => ""
            ));

        $this->load->view("english/car/top-car");
        $this->load->view("english/search");
        $this->load->view("english/banner-sponsored-google");
        $this->load->view("english/car/body-car",$dadosCaro);
        $this->load->view("english/sponsored");
        $this->load->view("english/footer");
    }
}

}
