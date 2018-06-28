<footer class="page-footer #212121 grey darken-4 topo">
  <div class="container">
    <div class="row">
      <div class="col s11 l6 ">
        <a class="navbar-brand" href="<?= base_url('myhome') ?>">
          <img style="width: 115px" alt="Brand" src="<?= base_url('img/logo2.fw.png') ?>">
        </a>
        <br>
        <!-- começa o banner chamando para afiliados -->
        <br>
        

        <!-- fecha o programa de afiliados ads -->
        <div class="fb-like" data-href="https://www.facebook.com/carsalenew.usa/" data-width="300" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true" style="margin-top: 40px;color: #fff !important"></div>

      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Site map</h5>
        <ul>
          <sitemap>
            <li><a alt='http://carsalenew.com/home' title='www.carsalenew.com/home' class="grey-text text-lighten-3" href="<?= base_url("home") ?>">home</a></li> 
            <li><a alt='<?= base_url("admin") ?>' title='<?= base_url("admin") ?>' class="grey-text text-lighten-3" href="<?= base_url("admin") ?>">Dashboard / Dealers</a></li>
            <li><a alt='http://carsalenew.com/register' title='www.carsalenew.com/register' class="grey-text text-lighten-3" href="<?= base_url("register") ?>">Register</a></li>
            <li><a alt='http://carsalenew.com/car/163-Dealer-to-Dealer' title='Dealer to Dealer Car Sale New' class="grey-text text-lighten-3" href="http://carsalenew.com/car/163-Dealer-to-Dealer">Dealer to Dealer</a></li>
            <li><a  alt='http://carsalenew.com/publish' title='www.carsalenew.com/publish' class="grey-text text-lighten-3" href="<?= base_url("publish") ?>">Publish</a></li>
            <li><a  alt='http://carsalenew.com/sitemap' title='www.carsalenew.com/sitemap' class="grey-text text-lighten-3" href="<?= base_url("sitemap") ?>">Sitemap</a></li>
            <li><a alt='http://carsalenew.com/contact' title='www.carsalenew.com/contact' class="grey-text text-lighten-3" href="<?= base_url("contact") ?>">Contact</a></li>
            <li>
              <a title='About our classified' alte='About our classified'  href="<?= base_url('about') ?>">About our classified</a>
            </li>
          </sitemap>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container s12">
      © Copyright | contato@carsalenew.com
      <a class="grey-text text-lighten-4 right links scroll" href="#scrollTop">Top</a>
    </div>
  </div>
</footer>
</body>
</html>


<!-- Modal logar Trigger -->
<div id="modal1" class="modal modal-fixed-footer retiraBarra" >
  <div class="modal-content" style='height: 570px'>
    <div class="row" style="border: solid 1px #ccc">
      <div class="row" style="border-bottom: solid 1px #ccc">
        <div class="input-field col s12 m12 s12">
          <h1 class="h1DescCarro">
            Login</h1>
          </div>
        </div>
        <form class="col s12 m12 s12" method="post" id="FormSerialize">
          <div class="row">
            <div class="input-field col s12 m12 s12">
              <input id="emailL" type="email" required="" class="validate">
              <label for="emailL" >Email</label>
            </div>
            <div class="input-field col s12 m12 s12">
              <input id="passwordL" type="password" class="validate" >
              <label for="passwordL">Password</label>
            </div>
            <div class="input-field col s12 m12 s12" id="erroEmail">

            </div>
          </div>
        </form>
      </div>
      <a id="logar" class="waves-effect waves-light btn right white-text #fb8c00 orange darken-1" >Login</a>
    </div>
  </div>

  <!-- Modal logar Trigger -->

  <script>
    $("#logar").click(function(event) {
      event.preventDefault();
      
      var email = $('#emailL').val();
      var senha = $('#passwordL').val();
      var srz = $('#FormSerialize').serialize();
      var url = "<?= base_url("login/autenticar"); ?>";
      $.post(url,{
        email : email,
        password : senha
      }, function(event){
        if(event === "1"){
          $('#erroEmail').html("<img src='<?= base_url('img/l568ECv.gif')?>'' alt='' id='imgLoad'>");
          $('#imgLoad').show();
          setTimeout(function(){
           window.location ="<?= base_url('edit') ?>";
         }, 3000);

        }else{
          $('#erroEmail').html(event);
        }
      });
    });

  </script>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.8&appId=1298820363479513";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


<style>
  .card{
    height: 392px;
  }
/*   .brancoA a{
    color: #42a5f5 !important;
  }  */
/*   #u_0_3, #u_0_2, #u_0_1{
    color: #fff !important;
  } */
  /* .wow{
    display: none;
  } */
</style>
<!-- script wow para movimentação dos slides -->
<!-- <script>
  jQuery(document).ready(function($) {
    new WOW().init();
    $(".wow").show();

  });
</script> -->


