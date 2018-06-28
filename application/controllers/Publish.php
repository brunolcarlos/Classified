<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Publish extends CI_Controller {

    public function index() {
        error_reporting(0);

        if ($this->session->userdata('logado')) {

            $this->load->model('banners_model');
            $this->load->model('cadastro_model');
            
            @$banners = array(
                'banners' => $this->banners_model->exibeBanner());

            $dados  = array('dados' => $this->session->userdata('logado'));
            $this->load->view("english/top");
            $this->load->view("english/buscaDealers");
            $this->load->view("english/search");
            $this->load->view("english/banner-sponsored-google");
            $this->load->view("english/publish/body-publish",$dados);
            $this->load->view("english/sponsored",$banners);
            $this->load->view("english/footer");

        } else {
            $erro = 'You need to be registered and logged in';
            $this->session->set_flashdata('erroPublish', $erro);
            redirect(base_url("./register"));
        }
    }

}
