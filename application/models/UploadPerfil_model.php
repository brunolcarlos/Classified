<?php

class UploadPerfil_model extends CI_Model {

    public function verificaValores($dados, $fotos, $type) { 

        $dadosL = $this->session->userdata("logado");
        $dadosN = $this->cadastro_model->verificaEmail($dadosL['email']);

        $formatos = array("jpg", "png", "jpeg", "gif");


        $tipo_arquivo = explode("/", $type);


        // var_dump($tipo_arquivo);
        if (in_array($tipo_arquivo[1], $formatos)) {

            if ($dadosN['foto']) {

                $img = $dadosN['foto'];

                if ($img =='img/avatar_5.png') {

                }else{
                    unlink("./".$img);
                }

                
            }

            $this->uploadFotos($dados,$fotos);



            redirect(base_url("edit/"));


        } else {

           $this->session->set_flashdata("error","Only jpg, png, jpeg, gif");
           redirect(base_url("edit/"));
       }

   }

   public function uploadFotos($dados,$fotos) {


    $nome = md5(uniqid(time()) . $fotos) . ".jpg";
    $config['upload_path'] = 'avatar/' . date("y-m") . "/";

    if (!is_dir($config['upload_path'])) {
        mkdir("./$config[upload_path]", 0777, TRUE);
    }

    $this->load->library('upload', $config);
    $this->upload->initialize($config);

    if (!$_FILES) {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('english/publish/body-publicado', $error);
    } else {

     $dados['foto'] = $config['upload_path'].$nome ;

     $dados['fotoPequena'] = $config['upload_path']."P".$nome ;


     move_uploaded_file($fotos, "./$config[upload_path]" . $nome);

     $this->novaimagem($nome, $config['upload_path'], "./$config[upload_path]" . $nome);

     $this->novaimagemPequena($nome, $config['upload_path'], "./$config[upload_path]" . $nome);

     $fotoNova = $config['upload_path'].$nome;


     $pagename = $config['upload_path']."/index.html"; #cria o index.html pra evitar acesso

     # Texto a ser salvo no arquivo
     $texto = "<h1>Car sale new</h1>";

     #Criar o arquivo
     $fp = fopen($pagename , "w");
     $fw = fwrite($fp, $texto); #fecha a criação do html

     return $this->db->update("usuario" , $dados, "idUsuario = '$dados[idUsuario]'");

 }
}


public function novaimagem($nomeFoto, $caminhoResize, $caminho) {

        //thumb
    $config['image_library'] = 'gd2';
    $config['source_image'] = "./$caminho";
    $config['new_image'] = "./$caminhoResize" . "$nomeFoto";
    $config['create_thumb'] = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = 300;
    $config['thumb_marker'] = "";


    $this->load->library('image_lib', $config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();


}
public function novaimagemPequena($nomeFoto, $caminhoResize, $caminho) {

        //thumb
    $config['image_library'] = 'gd2';
    $config['source_image'] = "./$caminho";
    $config['new_image'] = "./$caminhoResize" . "P".$nomeFoto;
    $config['create_thumb'] = TRUE;
    $config['maintain_ratio'] = TRUE;
    $config['width'] = 70;
    $config['thumb_marker'] = "";


    $this->load->library('image_lib', $config);
    $this->image_lib->initialize($config);
    $this->image_lib->resize();
    $this->image_lib->clear();


}


}
