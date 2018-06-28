  $(document).ready(function(){
    $('#email').keyup(function(event){
      var email = $('#email').val();
      var quantidadeE = $.trim(email).length;
    });

    $("#cadastrarP").click(function(event){
      event.preventDefault();
      var name = $('#name').val();
      var email = $('#email').val();
      var phone = $('#phone').val();
      var password = $('#password').val();
      var state = $('#state').val();
      var quantidadeN = $.trim(name).length;
      var quantidadeP = $.trim(phone).length;
      var quantidadeE = $.trim(email).length;
      var quantidadeS = $.trim(state).length;
      var quantidadeSe = $.trim(password).length;
      var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

      if(quantidadeN <= 1){
        $('#name').css("border-color","red");
        $('#name').focus();
        $('#name').attr("placeholder","Name Required");
        $('#name').val('');
        quantidadeN = false;

      }else if (quantidadeS <= 1) {
        $('#state').css("border-color","red");
        $('#state').focus();
        $('#state').attr("placeholder","State Required");
        $('#state').val('');
        quantidadeS = false;
      }else if (!reg.test(email) || email =='') {
        $('#email').css("border-color","red");
        $('#email').focus();
        $('#email').attr("placeholder","Email Required");
        $('#email').val('');
        email = false;
      }else if (quantidadeSe <= 1) {
        $('#password').css("border-color","red");
        $('#password').focus();
        $('#password').attr("placeholder","Password Required");
        $('#password').val('');
        quantidadeSe = false;
      }
      else if (quantidadeP <= 1) {
        $('#phone').css("border-color","red");
        $('#phone').focus();
        $('#phone').attr("placeholder","Phone Required");
        $('#phone').val('');
        quantidadeP = false;
      }else{
        $('#name').css("border-color","#ccc");
        $('#phone').css("border-color","#ccc");
        $('#email').css("border-color","#ccc");
        $('#password').css("border-color","#ccc");
        $('#state').css("border-color","#ccc");

        if (quantidadeN >= 1 && quantidadeS  >= 1 && quantidadeE >= 1 && quantidadeSe >= 1){
          $("#spanload").show();
          $("#spanload").html("<img src='./img/l568ECv.gif' style='width:30px'/>")
          var url = "./register";
          $.post(url,{
            name : name,
            state : state,
            phone : phone,
            email : email,
            password : password
          }, function(event){
            if (event) {
           // Materialize.toast(event, 4000); //ready
           $("#spanload").hide();
           if (event == "1") {

            window.location ="./edit";
          }else{
           Materialize.toast(event, 4000); // error
         }


       }else{
       }
       $('#emailInvalido').html(event);
     });
        }else {
          return false;
        }
      }
    });
  });