     <?php if($this->session->userdata("logado")): ?>
       <?php foreach($dados as $dado):  endforeach;?>
       <?php  $idUser = $this->session->userdata("logado");?>

       <!-- div botao fixo com icones -->
       <div class="fixed-action-btn horizontal">
        <a class="btn-floating btn-large red">
          <i class="large material-icons">mode_edit</i>
        </a>
        <ul>
          <?php if($dado['idUser'] == $idUser['idUsuario'] or ($idUser['email'] == "sitespomerode@gmail.com")): ?>
            <li><a class="btn-floating red modal-trigger" data-target="modal1" href="#modalDelete"><i class="material-icons">delete</i></a></li>
          <?php endif;  ?>
          <li>
            <a class="btn-floating green" href="<?= base_url("contact") ?>"><i class="material-icons">email</i></a>
          </li>
          <li>
            <a class="btn-floating pink" href="<?= base_url("edit") ?>"><i class="material-icons">mode_edit</i></a>
          </li>
          <li><a class="btn-floating blue" href="<?= base_url("publish") ?>"><i class="material-icons">note_add</i></a></li>
        </ul>
      </div>
      <!-- fim div botao fixo com icones -->
    <?php endif;?>
