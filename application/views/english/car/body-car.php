<?php foreach($dados as $dado):  endforeach;?>
  <?php  $idUser= $this->session->userdata("logado"); ?>
  <div class="row container">
    <div class="col s12 m12 l8 AnunciosCarros" style="position: relative">

     <h2 class="h1DescCarro">
       <?= ( $dado['modelo'])? html_escape(substr($dado['modelo'],0,25)): "Check" ?>
     </h2>
     <span style='padding: 5px; background: #b71c1c ;color: #fff;border-radius: 0.3em;'>
       Price : <?=  ($dado['price'])? numeroEmReais($dado['price']) : "check" ?>
     </span>
     <?php if($dado['idUser'] == $idUser['idUsuario'] or $idUser['nivel'] == 'admin'): ?>
      <a style='margin-bottom: 10px;height: 28px;line-height:  28px;text-transform: capitalize;width: 40px;padding-left: 10px;padding-right: 49px; float: right;'  class="waves-effect waves-light btn #cccccc red darken-1 white-text" href=" <?= base_url('car_edit/').$dado['id'] ?> ">EDIT</a>
    <?php endif; ?>
    <br>
    <br>
    <div class="col s12 m12 l12 carrosExterna" style="border-radius: 2px;border:solid 1px #e0e0e0" title='<?= html_escape($dado['modelo']) ?>' alt='<?= html_escape($dado['modelo']) ?>'>
      <div class="slide" style='margin-bottom: 10px !important; float: left;'>
        <?php $i =0 ?>
        <main>
          <?php foreach($dados as $dado): $i++?>

            <a data-lightbox="roadtrip" id="<?php echo $i ?>" class="resetaBackground hideImg<?php echo $i ?>" href="<?= base_url("$dado[caminho]$dado[fotos]") ?>" title='<?= html_escape($dado['modelo']) ?>' alt='<?= html_escape($dado['modelo']) ?>'>
              <img  style="border:solid 0px #e0e0e0;border-radius: 2px" alt='<?= html_escape($dado['modelo']) ?>' class="hideImg<?php echo $i ?> carroGrand z-depth-1" 
              src="<?= ($i == 1) ? base_url("$dado[caminho]$dado[fotos]") : base_url($dado['caminho']."thumb/".$dado['thumb'])?>" alt='<?= html_escape($dado['modelo']) ?>'/>
            </a>
          <?php endforeach; ?>
        </div>
        <div class="col s12 m12 l12" style="padding: 0">
          <table class="striped fontTabela bordered marginBottomTabela">
            <tr>
              <td style='padding-left:20px' >Year : <?php echo html_escape($dado['year']); ?></td>
              <td>Model : <span class="transform"><?php echo substr(html_escape($dado['modelo']),0,18); ?></span></td>
            </tr>
            <tr>
              <td style='padding-left:20px' >Cylinders : <?php echo html_escape($dado['cylinders']); ?></td>
              <td>Views : <b style='color: #fff;background: #c62828;padding: 4px;border-radius:2px '><?= html_escape($dado['acessos']); ?></b></td>
            </tr>
            <tr>
              <td style='padding-left:20px' >Drive : <?php echo html_escape($dado['drive']); ?></td>
              <td>Fuel : <?php echo $dado['fuel']; ?></td>
            </tr>
            <tr>
              <td style='padding-left:20px' >Odometer : <?php echo html_escape($dado['odometer']); ?></td>
              <td>Paint color : <?php echo html_escape($dado['color']); ?></td>
            </tr>
            <tr>
              <td style='padding-left:20px' >Size : <?php echo html_escape($dado['size']); ?></td>
              <td>VIN : <?php echo substr($dado['vin'],0,17); ?></td>
            </tr>
            <tr>
              <td style='padding-left:20px' >Title status : <?php echo html_escape($dado['status']); ?></td>
              <td>Transmission : <?php echo html_escape($dado['transmission']); ?></td>
            </tr>
            <tr>
              <td style='padding-left:20px' >Type : <?php echo html_escape($dado['bodytype']); ?></td>
              <td>Condition : <?php echo html_escape($dado['condition']); ?></td>
            </tr>
            <tr>
              <td style='padding-left:20px'>State : <?php echo html_escape($dado['stateAuto']); ?></td>
              <td>
                City : <?php echo html_escape($dado['city']); ?>
              </td>
            </tr>           
            <tr>
              <td style='padding-left:20px'>Share in Facebook</td>
              <td>
                <div class="fb-share-button" data-href="<?= base_url("car/").$dado['id'] ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcarsalenew.com%2Fcar%2F<?= $dado['id'] ?>&amp;src=sdkpreparse">Shared</a></div>
              </td>
            </tr>
            <?php if (html_escape($dado['usernameUrl'])): ?>
              <tr>
                <td colspan="2"  style='padding-left:20px;' >Shared for : <a href="<?= base_url($dado['usernameUrl']); ?>" class='#1e88e5 blue-text darken-1' style='font-size: 1em !important'><?= html_escape(substr($dado['usernameUrl'],0,20)); ?></a></td>
              </tr>
            <?php endif ?>
            <tr>
             <td colspan="2" style='padding-left:20px;' >       
               <div class="fb-save" data-uri="<?= base_url("car/").$dado['id'] ?>" data-size="large"></div>
             </td>
           </tr>
           <tr>
            <td colspan="2" style='padding-left:20px;'><div class="fb-send" data-href="<?= base_url("car/").$dado['id'] ?>"></div></td>
          </tr>
          <?php if ($dado['detalhes']): ?>
            <tr>
              <td colspan="2"  style='padding:20px' ><p><?= nl2br(html_escape($dado['detalhes'])); ?></p></td>
            </tr>
          <?php endif ?>
        </table>
      </div>
      <div class="col s12 m12 l12">
        <p class="z-depth-1 boxH4 #ef6c00 orange darken-3"><?= html_escape($dado['telefone']); ?></p>
      </div>
    </main>
    <br>
    <div class="row" style='padding: 11px !important;margin-top: 20px !important'>
      <form class="col s11 m12 s12 alinharDiv" method="post" action="enviarProposta" style='background: #f5f5f5;margin:0px !important;padding: 20px;border:solid 1px #eee;margin-top:10px !important'>
        <div class="row">
          <div class="input-field col s12">
            <input id="first_name" type="text" class="validate">
            <label for="first_name">Name</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="email" type="email" class="validate">
            <label for="email" data-error="Incorrect format">E-mail</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="tel" type="tel" class="telefone">
            <label for="tel">Phone</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <textarea id="message" class="materialize-textarea">Hello,&#10I'm interested in the [ <?= html_escape($dado['modelo']) ?> ] price [ <?= numeroEmReais($dado['price']) ?> ].&#10Please contact us by phone or email. &#10Page Link [ www.carsalenew.com/car/<?= $dado['id'] ?> ]</textarea>
            <label for="message">Message</label>
          </div>
          <div class="input-field col s12 m12 s12">
            <span id="retorno" class="erroEmail"></span>
          </div>
        </div>
        <div class="row">
          <div class="col s12">
            <div class="input-field inline">
              <a class="btn waves-effect waves-light #01579b light-blue darken-4" id="btnSubmit" name="enviarProposta">Submit
              </a>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>   
  <div class="col s12 m12 s12" style='padding-top: 20px'>
    <!-- <img style='width: 100%' src="<?= base_url('img/seguro.jpg') ?> " alt=""> -->
    <div  class="fb-comments" width='100%' data-href="<?= base_url("car/").$dado['id'] ?>" data-numposts="5" style='width: 100% !important'></div>
  </div>         
</div>

<?php if ($this->session->flashdata('successUpload')) : ?>
 <script>
   Materialize.toast("<i class='material-icons alinhaIcone margenIcone'>stars</i>Sent with success", 4000); 
 </script>
<?php endif; ?>



<!-- Modal deletar post Trigger -->
<div id="modalDelete" class="ModalDeletePadding modal modal-fixed-footer retiraBarraDelete #e53935 white-text red darken-1">
  <form class="col s12 m12 s12" method="post">
    <div class='col s12 m12 l12'>
      <h2 class="h1DescCarro" id="TrocaH2h1DescCarro">
        <i class="material-icons alinhaIcone margenIcone">warning</i>
        Delete Post <?= $dado['id'] ?>
      </h2>
    </div>
    <div class='col s12 m12 l12'>
      <div class='col s6 m6 l6'>
        <button class="waves-effect waves-light btn #f57c00 orange darken-2" id="confirm">Confirm</button>
      </div>
      <div class='col s5 m5 l5'>
       <button class="waves-effect waves-light btn #c0ca33 lime darken-1">Cancel</button>
     </div>
   </div>
 </form>
</div>

<!-- Modal logar Trigger -->
<script>
  $("#confirm").click(function(event) {
    event.preventDefault();
    var url = "<?= base_url('deletepost/delete'); ?>";
    var post = "<?= $dado['id'] ?>";
    $.post(url, 
    {
      delete: true,
      post : post
    }, function(data) {
      if (data ==="Success") {
        $("#TrocaH2h1DescCarro").html("<i class='material-icons alinhaIcone margenIcone'>loop</i>"+data);
        setTimeout(function() {
          window.location = "<?= base_url('publish'); ?>"
        }, 1000);

      }else{
        $("#TrocaH2h1DescCarro").html("<i class='material-icons alinhaIcone margenIcone'>loop</i>"+ data);
      }

    });
  });

</script>

<script>

  function validaDadosForm(){
    var modelo = $("#first_name").val().length;
    var telContact = $("#tel").val().length;
    var emailContact = $("#email").val().length;
    var message = $("#message").val().length;
    if (modelo > 0 & telContact > 0 &  emailContact > 0  & message > 0) {
      return true;
    }else{
      $("#first_name").focus();
      $("#retorno").html("All fields is required");
      return false;

    }
  }

  jQuery(document).ready(function($) {

    $("#btnSubmit").click(function(event) {
      event.preventDefault();

      if (validaDadosForm()) {
        var name = $("#first_name").val();
        var phone = $("#tel").val();
        var id = <?= $dado['id'] ?>;
        var email = $("#email").val();
        var message = $("#message").val();

        var url ='<?= base_url("emailcontatouser") ?>';
        $.post(url, {
          name: name,
          phone: phone,
          email: email,
          id: id,
          message: message

        }, function(data) {
          $("#retorno").html(data);
          $("#first_name").val("");
          $("#tel").val("");
          $("#email").val("");
          $("#message").val("");
        });
      }

    });
  });

</script>