$(document).ready(function(){
  $('#email').keyup(function(event){
    var email = $('#emailP').val();
    var quantidadeE = $.trim(email).length;
  });

  $("#cadastrarP").click(function(){

    var nome = $('#nomeP').val();
    var sobrenome = $('#sobreP').val();
    var email = $('#emailP').val();
    var senha = $('#senhaP').val();
    var modalidade = 1;
    var quantidadeN = $.trim(nome).length;
    var quantidadeS = $.trim(sobrenome).length;
    var quantidadeE = $.trim(email).length;
    var quantidadeSe = $.trim(senha).length;
    var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    if(quantidadeN <= 1){
      $('#nomeP').css("border-color","red");
      $('#nomeP').focus();
      $('#nomeP').attr("placeholder","Campo nome é obrigatório");
      $('#nomeP').val('');
      quantidadeN = false;
    }else if (quantidadeS <= 1) {
      $('#sobreP').css("border-color","red");
      $('#sobreP').focus();
      $('#sobreP').attr("placeholder","Campo sobrenome é obrigatório");
      $('#sobreP').val('');
      quantidadeS = false;
    }else if (!reg.test(email) || email =='') {
      $('#emailP').css("border-color","red");
      $('#emailP').focus();
      $('#emailP').attr("placeholder","Campo Email é obrigatório");
      $('#emailP').val('');
      email = false;
    }else if (quantidadeSe <= 1) {
      $('#senhaP').css("border-color","red");
      $('#senhaP').focus();
      $('#senhaP').attr("placeholder","Campo Senha é obrigatório");
      $('#senhaP').val('');
      quantidadeSe = false;
    }else{
      $('#nomeP').css("border-color","#ccc");
      $('#sobreP').css("border-color","#ccc");
      $('#emailP').css("border-color","#ccc");
      $('#senhaP').css("border-color","#ccc");

      if (quantidadeN >= 1 && quantidadeS  >= 1 && quantidadeE >= 1 && quantidadeSe >= 1){
        var url = "index.php/cadastro/cadastrop";
        $.post(url,{
          nome : nome,
          sobrenome : sobrenome,
          email : email,
          modalidade : modalidade,
          senha : senha
        }, function(event){
          $('#emailInvalido').html(event);
        });
      }else {
        return false;
      }
    }
  });
});
/* ============= Termina a validação do cadastro prestador de serviço ===============*/
/* ============= Começa a validação do cadastro Cliente ===============*/
$(document).ready(function(){
  $('#email').keyup(function(event){
    var email = $('#emailP').val();
    var quantidadeE = $.trim(email).length;
  });

  $("#btnC").click(function(){

    var nome = $('#nomeC').val();
    var sobrenome = $('#sobreC').val();
    var email = $('#emailC').val();
    var senha = $('#senhaC').val();
    var modalidade = 2;
    var quantidadeN = $.trim(nome).length;
    var quantidadeS = $.trim(sobrenome).length;
    var quantidadeE = $.trim(email).length;
    var quantidadeSe = $.trim(senha).length;
    var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    if(quantidadeN <= 1){
      $('#nomeC').css("border-color","red");
      $('#nomeC').focus();
      $('#nomeC').attr("placeholder","Campo nome é obrigatório");
      $('#nomeC').val('');
      quantidadeN = false;
    }else if (quantidadeS <= 1) {
      $('#sobreC').css("border-color","red");
      $('#sobreC').focus();
      $('#sobreC').attr("placeholder","Campo sobrenome é obrigatório");
      $('#sobreC').val('');
      quantidadeS = false;
    }else if (!reg.test(email) || email =='') {
      $('#emailC').css("border-color","red");
      $('#emailC').focus();
      $('#emailC').attr("placeholder","Campo Email é obrigatório");
      $('#emailC').val('');
      email = false;
    }else if (quantidadeSe <= 1) {
      $('#senhaC').css("border-color","red");
      $('#senhaC').focus();
      $('#senhaC').attr("placeholder","Campo Senha é obrigatório");
      $('#senhaC').val('');
      quantidadeSe = false;
    }else{
      $('#nomeC').css("border-color","#ccc");
      $('#sobreC').css("border-color","#ccc");
      $('#emailC').css("border-color","#ccc");
      $('#senhaC').css("border-color","#ccc");

      if (quantidadeN >= 1 && quantidadeS  >= 1 && quantidadeE >= 1 && quantidadeSe >= 1){
        var url = "index.php/cadastro/cadastrop";
        $.post(url,{
          nome : nome,
          sobrenome : sobrenome,
          email : email,
          modalidade : modalidade,
          senha : senha
        }, function(event){
          $('#emailInvalidoC').html(event);
        });
      }else {
        return false;
      }
    }
  });
});
/* ============= Termina a validação do cadastro Cliente ===============*/
/* ============= Modalidade 1 é o prestador de serviço   ===============*/
/* ============= Modalidade 2 é o Cliente consumidor     ===============*/
