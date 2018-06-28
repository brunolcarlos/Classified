<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Emailcontatouser extends CI_Controller {
    public function index()
    {
        if ($_POST) {
            error_reporting(0);

            $this->load->model("car_model");

            $id =$this->input->post("id");
            $info = array(
                "dados"=> $this->car_model->busca($id)
                );
            $nome =$this->input->post("name");
            $email = $this->input->post("email");
            $phone = $this->input->post("phone");
            $subject = "Email - sent Car Sale New - Car ".$info['dados'][0]['modelo'];
            $message = $this->input->post("message");

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
            $this->email->reply_to($email, $nome);
            $this->email->to($info['dados'][0]['email']); 

            $this->email->subject("$subject - $email");
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