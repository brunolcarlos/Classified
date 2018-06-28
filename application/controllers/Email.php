<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Email extends CI_Controller {
    public function index()
    {
        if ($_POST) {
            $nome =$this->input->post("name");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $subject = $this->input->post("subject");
            $message = $this->input->post("message");

            $config['protocol']    = 'smtp';
            $config['smtp_host']    = 'mail.email.com';
            $config['smtp_port']    = '25';
            $config['smtp_timeout'] = '7';
            $config['smtp_user']    = 'contato@your@email.com';
            $config['smtp_pass']    = 'xxxx';
            $config['charset']    = 'utf-8';
            $config['newline']    = "\r\n";
            $config['mailtype'] = 'html';
            $config['validation'] = TRUE; 

            $this->email->initialize($config);

            $this->email->from($config['smtp_user'], $nome);
            $this->email->to('your@email.com'); 

            $this->email->subject("Car Sale New - $subject - $email");
            $this->email->message($message."<br>Phone : $phone");  

            $this->load->library('email', $config);
            $this->email->set_newline("\r\n");

            $result = $this->email->send();
            if ($result) {
                echo "<i class='material-icons alinhaIcone margenIcone'>thumb_up</i>Sent with success";
            }
            die();
        }else{
             echo "<script>window.location='./home';</script>";
        }

    }
}