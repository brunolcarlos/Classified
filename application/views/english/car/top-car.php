<!DOCTYPE html>
<html lang="en">
<head>
  <?php foreach($topo as $dado): endforeach;?>
  <meta name="theme-color" content="#212121"/>
  <meta name="apple-mobile-web-app-status-bar-style" content="#212121"/>
  <meta name="msapplication-navbutton-color" content="#212121"/>
  <meta name="keywords" content="<?= $dado['modelo'] ?>"/>
  <meta name="author" content="Classified in USA | Car Sale New"/>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta property="description" content="<?= $this->title_model->states($dado['stateAuto']); ?> "/>
  <meta property="og:title" content="<?= $dado['modelo'] ?> / Seller : <?= $dado['nome'] ?> "/>
  <meta property="og:url" content="<?= base_url("car/$dado[id]")?>" />
  <meta property="og:description" content="<?= $this->title_model->states($dado['stateAuto']); ?>"/>
  <meta property="og:image" content="<?= base_url($topo[0]['caminho'].$topo[0]['fotos'])?>"/>
  <meta property="fb:app_id" content="1320884354628946" /> 
  <link rel="icon" href="<?= base_url('img/icone.png') ?>">
  <script src="<?= base_url('js/jquery.js') ?>" type="text/javascript"></script>
  <link href="<?= base_url('css/materialize.css') ?>" rel="stylesheet" type="text/css"/>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="<?= base_url('css/style.css?modified=3') ?>" rel="stylesheet" type="text/css"/>
  <link href="<?= base_url('css/lightbox.css') ?>" rel="stylesheet" type="text/css"/>
  <script src="<?= base_url('js/materialize.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('js/eventos.js?modified=1') ?>" type="text/javascript"></script>
  <script src="<?= base_url('js/mascara.js') ?>" type="text/javascript"></script>
  <script src="<?= base_url('js/lightbox.js') ?>" type="text/javascript"></script>
  <meta charset="UTF-8">
  <title><?= ($dado['modelo'])? $dado['modelo']." - ". $this->title_model->states($dado['stateAuto']) : "Classified Carsalenew.com | New and Used Cars" ?></title>
</head>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1320884354628946',
      xfbml      : true,
      version    : 'v2.8'
    });
  };

  (function(d, s, id){
   var js, fjs = d.getElementsByTagName(s)[0];
   if (d.getElementById(id)) {return;}
   js = d.createElement(s); js.id = id;
   js.src = "//connect.facebook.net/en_US/sdk.js";
   fjs.parentNode.insertBefore(js, fjs);
 }(document, 'script', 'facebook-jssdk'));
</script>