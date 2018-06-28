<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Pedidoscarro extends CI_Controller {

    public function index()
    {

        if ($this->input->post("nome")) {
    # code...

            $nome = $this->input->post("nome");

            $message = "Solicitação de carro no Carsalenew<br>";
            $message .= "Name : ".$this->input->post("nome")."<br>";
            $message .= "Email : ".$this->input->post("email")."<br>";
            $message .= "Phone : ".$this->input->post("phone")."<br>";
            $message .= "State : ".$this->input->post("state")."<br>";
            $message .= "Make : ".$this->input->post("make")."<br>";
            $message .= "Model : ".$this->input->post("model")."<br>";
            $message .= "Year Min : ".$this->input->post("yearUp")."<br>";
            $message .= "Year Max : ".$this->input->post("yearDown")."<br>";
            $message .= "Miles : ".$this->input->post("miles")."<br>";
            $message .= "Price : ".$this->input->post("price")."<br>";
            $message .= "Message : ".$this->input->post("message")."<br>";

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'mail.email.com';
            $config['smtp_port']    = '25';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'your@email.com';
            $config['smtp_pass']    = 'xxxx';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE; 

            $this->email->initialize($config);

            $this->email->from($config['smtp_user'], $nome);
            $this->email->to('your@email.com'); 

            $this->email->subject("Car Sale New - Procura por carro");
            $this->email->message($message);  

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $result = $this->email->send();

            if ($result) {
                echo "<br><i class='material-icons alinhaIcone margenIcone'>thumb_up</i>Sent with success";
            }else{
                echo "<br><i class='material-icons alinhaIcone margenIcone'>thumb_down</i>Error";
            }
            die();

        }else{
            redirect('./home','refresh');
        }
    }
}