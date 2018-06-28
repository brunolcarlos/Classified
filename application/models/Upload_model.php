<?php

class Upload_model extends CI_Model {

    public function upload($dados, $fotos, $tipoType) {

        $this->db->insert("anuncios", $dados);
        $id = $this->db->insert_id();
    }

    public function verificaValores($dados, $fotos, $type) { // verifica se os arquivos são imagens
        $formatos = array("jpg", "png", "jpeg", "gif");
        $quantidade = count($type);
        $correta = 0;
        for ($i = 0; $i < $quantidade; $i++) {
            $tipoArq = $type;
            $tipo_arquivo = explode("/", $tipoArq[$i]);

            $tipos[$i] = $tipo_arquivo[1];
            if (in_array($tipos[$i], $formatos)) {
                $correta++;
//                print_r($tipos[$i]);
            } else {
                $erro = "Only - jpg - png - jpeg - gif";
                $this->session->set_flashdata('erroUpload', $erro);
//                var_dump($tipos[$i]);
                redirect(base_url('publish'));
            }
        }
        
        if ($correta == $i) { // verifica se a quantidade de fotos corretas é igual a quantidade de fotos
            $this->db->insert("anuncios", $dados);
            $id = $this->db->insert_id();
            $this->uploadFotos($fotos, $id);
            $erro = "Success";
            $this->session->set_flashdata('successUpload', $erro);

            $postVerificado = $this->verificaIdUserAnuncio($id);
            
            // echo "<pre>";
            // var_dump($postVerificado);
            // echo "<b>".$postVerificado[0]['idUser']."</b>";
            // echo "<pre>";
            // die();

            if (!$postVerificado[0]['idUser']) {

                $this->load->model('cadastro_model');
                $idUsuario = $this->session->userdata('logado');
                $usuario = $this->cadastro_model->verificaEmail($idUsuario['email']);
                $idUser = $usuario['idUsuario'];
                $this->db->query("update anuncios set idUser = $idUser where id = $id");

            }
            
            redirect(base_url("car/")."$id");
        }
    }



    public function verificaIdUserAnuncio($id){

        $this->db->from("anuncios");
        $this->db->where("id",$id);
        
        return $valida = $this->db->get()->result_array();
    }

    public function uploadFotos($fotos, $idPostagem) {

        $quantidade = count($fotos);

        for ($i = 0; $i < $quantidade; $i++) {
            $nome = md5(uniqid(time()) . $fotos[$i]) . ".jpg";
            $config['upload_path'] = 'uploads/' . date("y-m") . "/";
            $config['thumb'] = 'uploads/' . date("y-m") . "/thumb/";

            if (!is_dir($config['upload_path'])) {
                mkdir("./$config[upload_path]", 0777, TRUE);
                mkdir("./$config[thumb]", 0777, TRUE);
            }

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$_FILES) {
                $error = array('error' => $this->upload->display_errors());
                $this->load->view('english/publish/body-publicado', $error);
            } else {
                $nova = explode(".", $nome);
                $nova = $nova[0] . "_thumb.jpg";
                $dadosFotos = array(
                    "idPost" => $idPostagem,
                    "caminho" => $config['upload_path'],
                    "fotos" => $nome,
                    "thumb" => $nova
                    );

                move_uploaded_file($fotos[$i], "./$config[upload_path]" . $nome);
                $this->db->insert("fotosanuncios", $dadosFotos);
                $this->novaimagem($nome, $config['upload_path'], $config['upload_path']);
                //unlink("./$config[upload_path]" . $nome);
                $this->thumbs($nome, $config['thumb'], $config['upload_path']);


            }
        }
    }

    public function thumbs($nomeFoto, $caminhoThumb, $caminho) {

        //thumb
        $config['image_library'] = 'gd2';
        $config['source_image'] = "./$caminho" . "$nomeFoto";
        $config['new_image'] = "./$caminhoThumb";
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 250;
        $this->load->library('image_lib', $config);

        $this->image_lib->initialize($config); 
        $this->image_lib->resize();
        $this->image_lib->clear();
    }

    public function novaimagem($nomeFoto, $caminhoResize, $caminho) {

        //thumb
        $config['image_library'] = 'gd2';
        $config['source_image'] = "./$caminho". "$nomeFoto";
        $config['new_image'] = "./$caminhoResize" . "$nomeFoto";
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = 700;
        $config['thumb_marker'] = "";



        $img_config['wm_type'] = 'overlay';
        $img_config['wm_overlay_path'] = './img/barraLogo2.fw.png';
        $img_config['wm_x_transp'] = 20;
        $img_config['wm_y_transp'] = 10;
        $img_config['wm_opacity'] = 90;
        $img_config['wm_vrt_alignment'] = 'bottom';
        $img_config['wm_hor_alignment'] = 'right';
        $img_config['source_image'] = "./$caminhoResize" . "$nomeFoto";

        $this->load->library('image_lib', $config);
        $this->load->library('image_lib', $img_config);
        $this->image_lib->initialize($config);
        $this->image_lib->resize();
        // $this->image_lib->initialize($img_config);                 
        // $this->image_lib->watermark();
        $this->image_lib->clear();

        
    }

}
