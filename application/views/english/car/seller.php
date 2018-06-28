          <?php foreach($dados as $dado): endforeach;?>

          <div class="col s12 m8 l4" style='padding: 0'>
           <div class="card col s12 m9 l9 z-depth-0" style='padding:10px;height: auto;border:solid 1px #e0e0e0;border-bottom:solid 4px #e0e0e0;'>
            <div class="card-image">
             <img style='height: 190px' alt="<?= html_escape(substr($dado['nome'],0,18))?>" class="carrosFotominiCard" src="<?= base_url($dado['foto']) ?>" title='Seller <?= html_escape(substr($dado['nome'],0,18))?>'>
           </div>
           <div class="card-content" style='font-size: 1em'>
             <ul class="itensCarroFront">
              <li style='color: #212121'><span class='bold'>Seller : <?= html_escape(substr($dado['nome'],0,18))?></span></li>
              <li style='color: #424242'>State     : <?= html_escape(substr($dado['state'],0,30)) ?></li>
              <li>Site      : <a style="font-size: 1em !important" class='#1e88e5 blue-text darken-1' href="http://<?= retirahttp(html_escape($dado['site']))?>" target="_blank"><?= retirahttp(html_escape(substr($dado['site'],0,30)))?></a>
              </li>
              <li>Profile   : <a style="font-size: 1em !important" class='#1e88e5 blue-text darken-1' href="<?= base_url($dado['usernameUrl']); ?>"><?= html_escape(substr($dado['usernameUrl'],0,30))?></a>
              </li>
              <li style='color: #424242'>ADDRESS      : <?= html_escape(substr($dado['endereco'],0,20)) ?></li>
              <li style='color: #424242'>City      : <?= html_escape(substr($dado['cidade'],0,30)) ?></li>
              <li style='color: #424242'>E-mail : <?= html_escape(substr($dado['email'],0,32)) ?></li>
              <br>
              <li style='font-size: 0.8em;text-align: center;' class='priceN'>Phone  : <?=  $dado['telefone'] ?></li>
              <br>
              <?php if(isset($dado['speak'])): ?>
                <li>Speak</li>
                <br>
                <li><?= languagesBandeiras($dado['speak']) ?></li>
              <?php endif; ?>
            </ul>
          </div>

        </div>
        <?php if ($dado['youtube']): ?>
         <div class="col s12 m8 l9" style='border-radius: 2px;border:solid 1px #ccc;padding: 10px;margin-bottom: 20px'>
          <iframe class="col s12 m12 l12" id="ytplayer" type="text/html" style='height: 200px;padding: 0'  src="<?= youtubes($dado['youtube']); ?>" frameborder="0" allowfullscreen/></iframe>
        </div>
      <?php endif ?>
      <div class='' style='padding: 1px;'>
        <a href="<?= base_url("contact") ?>">
          <img style='border:solid 1px #666;border-bottom:solid 2px #666;border-radius: 2px' src="<?= base_url("img/banner_vertical.jpg") ?>" title='Advertise here on Carsalenew.com' alt="Advertise here on Carsalenew.com">
        </a>              
        <br>
        <br>
      </div>
    </div>

    <style>
      .card{
        margin-top: 117px !important;
      }

      @media (max-width: 728px) {
       .ocultaCel {
        display:  !important;
      }
      .wakeUpScriptTag{
        text-align:center;
      } 
    }

    @media (max-width: 450px) {

      .card{
        margin-top: 10px !important;
      }

    }


  </style>
