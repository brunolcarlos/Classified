<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Emailregistro extends CI_Model {


  public function envia_email_registro($email,$senha,$nome){



   $config['protocol']    = 'smtp';
   $config['smtp_host']    = 'mail.seuemail.com';
   $config['smtp_port']    = '25';
   $config['smtp_timeout'] = '7';
   $config['smtp_user']    = 'contato@seuemail.com';
   $config['smtp_pass']    = 'xxx';
   $config['charset']    = 'utf-8';
   $config['newline']    = "\r\n";
   $config['mailtype'] = 'html'; 
   $config['validation'] = TRUE;

   $this->email->initialize($config);

   $this->email->from('contato@seuemail.com', "Register Car Sale New");
   $this->email->to($email); 

   $this->email->subject("Register success");
   $this->email->message("<br>Welcome $nome<br>User login: $email<br> Password : $senha <br>www.carsalenew.com");  


   $this->load->library('email', $config);
   $this->email->set_newline("\r\n");

   $result = $this->email->send();

   die();
}
public function recuperarSenha($email,$senha){


   $config['protocol']    = 'smtp';
   $config['smtp_host']    = 'mail.seuemail.com';
   $config['smtp_port']    = '25';
   $config['smtp_timeout'] = '7';
   $config['smtp_user']    = 'contato@seuemail.com';
   $config['smtp_pass']    = 'xxxx';
   $config['charset']    = 'utf-8';
   $config['newline']    = "\r\n";
   $config['mailtype'] = 'html'; 
   $config['validation'] = TRUE;

   $this->email->initialize($config);

   $this->email->from('contato@seuemail.com', "New Password Carsalenew.com");
   $this->email->to($email); 

   $this->email->subject("New Password Carsalenew.com");
   $this->email->message("<br>Welcome $nome<br>User login: $email<br> Password : $senha <br>www.carsalenew.com");  


   $this->load->library('email', $config);
   $this->email->set_newline("\r\n");

   $result = $this->email->send();

   die();
}
public function updateSenha($email,$senha){

   return $this->db->query("update usuario set senha ='$senha' where email ='$email'");


}
}