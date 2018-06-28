<?php 
$dadosL = $this->session->userdata("logado");
$usuario = $this->cadastro_model->verificaEmail($dadosL['email']);
?>
<body>
    <header id="top">

      <nav style='margin-top:50px'>
        <div class="topo" style='background: #212121;height: 150px;'>
            <div class="container">
                <a href="<?= base_url() ?>" alt='Car Sale New - new and used cars for sale.' title='Classified in United States | Car Sale New | The best Dealers share here' class="brand-logo fundoLogo"><img alt="Car Sale New - new and used cars for sale." class="logo" src="<?= base_url('img/logo2.fw.png') ?>"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse sand">
                    <img src="<?= base_url('img/san2.png') ?>" style='width: 30px;height: 25px' alt="">
                </a>
                <ul class="right hide-on-med-and-down">
                    <?php if ($this->session->userdata('logado')): ?>
                        <li>
                            <a href="<?= base_url() ?>">Home</a>
                        </li>

                        <!-- Dropdown Structure -->
                        <ul id="dropdown1" class="dropdown-content menudrop ">
                            <li><a class='black-text menudrop' href="<?= base_url('edit') ?>" title='<?= base_url('edit') ?>' alt='<?= base_url('edit') ?>'>Edit profile</a></li>
                            <?php if($usuario['usernameUrl'] !=''): ?>
                                <li><a class='black-text menudrop' href="<?= base_url($usuario['usernameUrl']) ?>" title='<?= base_url($usuario['usernameUrl']) ?>' alt='<?= base_url($usuario['usernameUrl']) ?>'>Page</a></li>
                            <?php endif ?>
                            <li class='#bf360c deep-orange darken-4'><a class='white-text menudrop' href="http://carsalenew.com/admin" title='http://carsalenew.com/admin' alt='http://carsalenew.com/admin'>Dashboard / Dealers</a></li>
                            <li class='#01579b light-blue darken-4'><a class='white-text menudrop' href="http://carsalenew.com/admin" title='Buy Vip' alt='Buy Vip'>Buy Vip Plans</a></li>
<!--                             <li><a class="ativo #263238 blue-grey darken-4 white-text  menudrop" href="<?= base_url("vin") ?>" title='<?= base_url("vin") ?>' alt='<?= base_url("vin") ?>'>Check Vin</a></li>
-->                            <li><a class='black-text menudrop' href="<?= base_url("contact") ?>" title='<?= base_url("contact") ?>' alt='<?= base_url("contact") ?>'>Contact</a></li>

<li class="divider"></li>
<li><a class='black-text menudrop' href="<?= base_url("login/logout") ?>" title='<?= base_url("login/logout") ?>' alt='<?= base_url("login/logout") ?>'>Logout</a></li>
</ul>
<ul class="left hide-on-med-and-down menudrop">
    <!-- Dropdown Trigger -->
    <li><a class="dropdown-button" data-activates="dropdown1">Menu Pages<i class="material-icons right">arrow_drop_down</i></a></li>
</ul>
<!-- Fim Dropdown Structure -->
<li class="active"><a class="ativo" href="<?= base_url("publish") ?>" title='<?= base_url("publish") ?>' alt='<?= base_url("publish") ?>'>Publish Now</a>
</li>
<li class='#bf360c deep-orange darken-4'><a class='white-text menudrop' href="http://carsalenew.com/admin" title='http://carsalenew.com/admin' alt='http://carsalenew.com/admin'>Dashboard / Dealers</a>
</li>
<?php else: ?>
    <li><a alt='<?= base_url() ?>' title='Home' href="<?= base_url() ?>">Home</a></li>
    <li><a alt='Login' title='Login' data-target="modal1" href="#modal1" class="modal-trigger">Login</a></li>
    <li><a alt='<?= base_url("publish") ?>' title='Publish' class="ativo" href="<?= base_url("publish") ?>">Publish Now</a></li>
    <li><a alt='<?= base_url("register") ?>' title='Register' href="<?= base_url("register") ?>">Register</a></li>
    <li><a alt='<?= base_url("contact") ?>' title='Contac' href="<?= base_url("contact") ?>">Contact</a></li>
<!--                         <li><a alt='<?= base_url("vin") ?>' title='Vin Number' href="<?= base_url("vin") ?>">Check Vin</a></li>
-->                        <li><a alt='Forgot Password ?' title='Forgot Password ?' class="modal-trigger" href="#modal2">Forgot Password ?</a></li>
<?php endif; ?>

</ul>
<ul style='background: #212121' class="side-nav" id="mobile-demo">
    <li>
        <div class="userView" style='min-height: 150px'>
            <?php if ($this->session->userdata('logado')): ?>
                <img class="background" src="<?= base_url('img/quad.jpg') ?>">
                <a href="#"><img style='border:none' class="circle z-depth-2" src="<?= base_url($usuario['foto']) ?>"></a>
                <a href="#" class="resetaBackground"><span class="white-text email"><?= $usuario['email'] ?></span></a>
            <?php else: ?>

                <img class="background" src="<?= base_url('img/quad.jpg') ?>">
                <a href="#"><img style='border:none' class="circle z-depth-2" src="<?= base_url("img/semimagem.jpg") ?>"></a>

                <a href="#" class="resetaBackground"><span class="white-text email">Welcome</span></a>
            <?php endif; ?>
        </div>
    </li>
    <?php if ($this->session->userdata('logado')): ?>
        <li><a href="<?= base_url() ?>" title='<?= base_url() ?>' alt='<?= base_url() ?>'>Home</a></li>
        <li class="active"><a class="ativo" href="<?= base_url("publish") ?>" title='<?= base_url("publish") ?>' alt='<?= base_url("publish") ?>'>Publish Now</a></li>
<!--                         <li><a class="ativo #263238 blue-grey darken-4 white-text" href="<?= base_url("vin") ?>" title='<?= base_url("vin") ?>' alt='<?= base_url("vin") ?>'>Check Vin</a></li>
-->                        <?php if($usuario['usernameUrl'] !=''): ?>
<li><a href="<?= base_url($usuario['usernameUrl']) ?>" title='<?= base_url($usuario['usernameUrl']) ?>' alt='<?= base_url($usuario['usernameUrl']) ?>'>Page</a></li>
<?php endif ?>
<li><a href="<?= base_url("contact") ?>" title='<?= base_url("contact") ?>' alt='<?= base_url("contact") ?>'>Contact</a></li>
<li><a href="<?= base_url("edit") ?>" title='<?= base_url("edit") ?>' alt='<?= base_url("edit") ?>'>Edit</a></li>
<li class='#bf360c deep-orange darken-4'><a class='white-text menudrop' href="http://carsalenew.com/admin" title='http://carsalenew.com/admin' alt='http://carsalenew.com/admin'>Dashboard / Dealers</a></li>
<li class='#01579b light-blue darken-4'><a class='white-text menudrop' href="http://carsalenew.com/admin" title='Buy Vip' alt='Buy Vip'>Buy Vip Plans</a></li>

<li><a href="<?= base_url("login/logout") ?>" title='<?= base_url("login/logout") ?>' alt='<?= base_url("login/logout") ?>'>Logout</a></li>
<?php else: ?>
    <li><a href="<?= base_url() ?>" title='<?= base_url() ?>' alt='<?= base_url() ?>'>Home</a></li>
    <li><a data-target="modal1" href="#modal1" class="modal-trigger">Login</a></li>
    <li class="active"><a class="ativo" href="<?= base_url("publish") ?>" title='<?= base_url("publish") ?>' alt='<?= base_url("publish") ?>'>Publish Now</a></li>
<!--                         <li><a class="ativo #263238 blue-grey darken-4 white-text" href="<?= base_url("vin") ?>">Check Vin</a></li>
-->                        <li><a href="<?= base_url("register") ?>" title='<?= base_url("register") ?>' alt='<?= base_url("register") ?>'>Register</a></li>
<li><a href="<?= base_url("contact") ?>" title='<?= base_url("contact") ?>' alt='<?= base_url("contact") ?>'>Contact</a></li>
<li><a class="modal-trigger" href="#modal2">Forgot Password ?</a></li>
<?php endif; ?>
</ul>
</div>
</div><!--Aqui acaba a div do menu-->
</nav>
<div class="row container">
    <div class="col s12 m12 l12" style='padding-top: 20px;padding-right: 0'>
        <div>
            <!-- <img class="bandeiras" src="<?= base_url('img/United-States-Flag-icon.png') ?>"> -->
               <!--  <img class="bandeiras" src="<?= base_url('img/Brazil-Flag-icon.png') ?>">
               <img class="bandeiras" src="<?= base_url('img/Spain-Flag-icon.png') ?>"> -->


               <!-- Abre tradutor -->
               <!-- <div id="google_translate_element" class="bandeiras" style='width: 100%;text-align: right;'></div>
               <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'de,en,es,it,ja,pt,zh-TW', layout:  google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> -->
            <!-- fecha tradutor -->
            <div class="bandeiras" style='padding-right: 0'>
                <?php if ($this->session->userdata('logado')): ?>
                   <span style='color: #fff;text-transform: uppercase;font-size: 0.7em;padding: 5px;background: #b71c1c;border-radius: 2px;'>
                       Vip plan : <?= planoVip($usuario['userVip']) ?>
                       -- <?= totalCarros($usuario["idUsuario"]) ?>/<?= $usuario["limitCars"] ?> cars
                   </span>
               <?php endif ?>
           </div>

       </div>
   </div>
</div><!--Aqui acaba a div container dos flags-->
<div class="selecoes #f5f5f5 grey lighten-4" >
    <div class="row container" style='position: relative;'>
        <div class="col s12 m6 l7 input-field col s12 ui-widget">
            <input type="text" id="modelS" >
            <label for="modelS " style='color : #666 !important'>Search for Model or Make</label>
        </div>
        <div class="col s12 m6 l5 input-field col s12" style='color : #666 !important'>
            <select name="stateS" required="" id="stateS" style='color : #666 !important'>
                <option value="all">Select state *</option>
                <option value="AK">AK</option>
                <option value="AL">AL</option>
                <option value="AR">AR</option>
                <option value="AZ">AZ</option>
                <option value="CA">CA</option>
                <option value="CO">CO</option>
                <option value="CT">CT</option>
                <option value="DC">DC</option>
                <option value="DE">DE</option>
                <option value="FL">FL</option>
                <option value="GA">GA</option>
                <option value="HI">HI</option>
                <option value="IA">IA</option>
                <option value="ID">ID</option>
                <option value="IL">IL</option>
                <option value="IN">IN</option>
                <option value="KS">KS</option>
                <option value="KY">KY</option>
                <option value="LA">LA</option>
                <option value="MA">MA</option>
                <option value="MD">MD</option>
                <option value="ME">ME</option>
                <option value="MI">MI</option>
                <option value="MN">MN</option>
                <option value="MO">MO</option>
                <option value="MS">MS</option>
                <option value="MT">MT</option>
                <option value="NC">NC</option>
                <option value="ND">ND</option>
                <option value="NE">NE</option>
                <option value="NH">NH</option>
                <option value="NJ">NJ</option>
                <option value="NM">NM</option>
                <option value="NV">NV</option>
                <option value="NY">NY</option>
                <option value="OH">OH</option>
                <option value="OK">OK</option>
                <option value="OR">OR</option>
                <option value="PA">PA</option>
                <option value="RI">RI</option>
                <option value="SC">SC</option>
                <option value="SD">SD</option>
                <option value="TN">TN</option>
                <option value="TX">TX</option>
                <option value="UT">UT</option>
                <option value="VA">VA</option>
                <option value="VT">VT</option>
                <option value="WA">WA</option>
                <option value="WI">WI</option>
                <option value="WV">WV</option>
                <option value="WY">WY</option>
            </select>
        </div>
        <a  style='font-size: 0.8em !important;padding: 6px;line-height: 26px;right:0px;top: 10px !important;position: absolute;' class="waves-effect waves-light btn white-text red btnBuscar #ef6c00 orange darken-3" id="btnBuscarState">
            Search
        </a>
    </div>
</div>
</header>
<span id="retornotext"></span>
<!-- Modal Trigger -->
<!-- Modal Structure -->
<!-- <script>

    jQuery(document).ready(function($) {

        $('#btnBuscarState').click(function(event) {
            event.preventDefault();
            var modelo = $('#modelS').val();
            var retorno = modelo.split(" ");
            var state = $('#stateS').val();
            var url ="<?= base_url("state/buscacarroestado") ?>";
            var urlRedirect = "<?=base_url('state/') ?>"+ state+"/"+ retorno[0];
            if(!modelo){
                modelo = false;
            }
            $.post(url, {
                model: modelo
            }, function(data) {
                if (data) {
                    window.location= urlRedirect;
                }else{
                }
            });
        });
    });

</script> -->

<script>

    $("#stateS").change(function(event) {
        $(".buscasPY").show(300);
    });

    $("#modelS").keyup(function(event) {
        $(".buscasPY").show(300);
    });

    jQuery(document).ready(function($) {

        $('#btnBuscarState').click(function(event) {
            event.preventDefault();
            var modelo = $('#modelS').val();
            var minprice = $('#minprice').val();
            var Nminprice = minprice.replace("U$","");

            var maxprice = $('#maxprice').val();
            var Nmaxprice = maxprice.replace("U$","");

            var minyear = $('#minyear').val();
            var maxyear = $('#maxyear').val();
            var retorno = modelo.split(" ");
            var state = $('#stateS').val();


            if (!retorno[0]) {

                retorno[0] = 'Uninformed';
            }

            if (!Nminprice) {
                Nminprice = 0;
            }

            if (!Nmaxprice) {
                Nmaxprice = 0;
            }

            var urlRedirect = "<?=base_url('state/') ?>"+ state+"/"+ retorno[0]+"/"+minyear+"/"+maxyear+"/"+Nminprice+"/"+Nmaxprice+"/0";

            if(!retorno[0]){
                modelo = false;
            }else{
               window.location= urlRedirect; 
           }


       });
    });

</script>



<!-- Modal Structure recurar senha -->
<div id="modal2" class="modal">
    <div class="modal-content">
      <h5>Send new password to Email</h5>
      <input id="emailR" type="email" class="validate">
      <label for="emailR">Email</label>
  </div>
  <label id="retornoEmail" style='padding-left: 20px;font-size: 0.9em'></label>
  <div class="modal-footer">
      <a href="#!" id="btnRsenha" class=" modal-action waves-effect waves-green btn-flat #039be5 light-blue darken-1 white-text">Send Password</a>
  </div>
</div>

<script>

    jQuery(document).ready(function($) {

        $('#btnRsenha').click(function(event) {
            event.preventDefault();
            var emailR = $('#emailR').val();
            var url ="<?= base_url("login/recupersenha") ?>";
            if(emailR ===''){
                $('#retornoEmail').html("Email required");
            }else{
             $.post(url, {
                emailR: emailR
            }, function(data) {
                if (data) {
                    $('#retornoEmail').html("Password sent for your e-mail");
                }else{
                    $('#retornoEmail').html("Error");
                }
            });
         }
     });
    });

</script>

<style>
    .goog-te-banner-frame{
        display: none !important;
        height: 0 !important;
    }
    body{
        top: 0 !important;
    }

    .background{
        object-fit: cover;
        object-position: center;
    }
    .circle{
        border: solid 3px #e65100;
    }
    .email{
        margin-top: 42px;
    }
</style>