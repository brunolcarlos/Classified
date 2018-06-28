/* Controle do slow da página */
jQuery(document).ready(function ($) {

    function scroll() {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1300);
        });
    }

    function trocaCorFundoPreco() {
        $('.carrosRetangulo').mouseover(function () {
            $(this).closest('.carrosRetangulo').find('.precoCarro').css("background", "#fb8c00");
        });
        $('.carrosRetangulo').mouseout(function () {
            $(this).closest('.carrosRetangulo').find('.precoCarro').css("background", "#616161");
        });
    }

    function alteraTamanhoFotoMini() {
        var larguraFundoCinza = $(".fundoFoto").width();
        var alturaFundoCinza = $(".fundoFoto").height();
        $(".carrosFotomini").css("width", larguraFundoCinza);
        $(".carrosFotomini").css("height", alturaFundoCinza);
        $(window).resize(function () {
            var larguraFundoCinza = $(".fundoFoto").width();
            var alturaFundoCinza = $(".fundoFoto").height();
            $(".carrosFotomini").css("width", larguraFundoCinza);
            $(".carrosFotomini").css("height", alturaFundoCinza);

        });
    }

    function validaPhone() {
        $("input.telefone")
        .mask("(999) 999-9999")
        .focusout(function (event) {
            var target, phone, element;
            target = (event.currentTarget) ? event.currentTarget : event.srcElement;
            phone = target.value.replace(/\D/g, '');
            element = $(target);
            element.unmask();
            if (phone.length > 10) {
                element.mask("(999) 999-9999");
            } else {
                element.mask("(999) 999-9999");
            }
        });
    }

    $(".progress").hide();
    $("#btnPostar").prop("disabled", true);


    function validaModelo(){
        var modelo = $("#model").val().length;
        if (modelo > 0) {
            return true;
        }else{
            return false;
        }
    }

    $("#model").keyup(function(event) {
            var files = $('#upload').val(); // SELECIONA OS ARQUIVOS
            var qtde = files.length; // CONTA QUANTOS TEM
            var modelo = $(this).val().length;


            if (modelo > 0 & qtde > 0) {
                $("#btnPostar").prop("disabled", false);
            }else{
                $("#btnPostar").prop("disabled", true);
            }
        });
    // funcao que verifica se o input teve mais que o limite selecionado
    $('#upload').change(function () {
        var files = this.files; // SELECIONA OS ARQUIVOS
        var qtde = files.length; // CONTA QUANTOS TEM
        var make = $("#make").val();

        if (qtde > 10) { // VERIFICA SE É MAIOR DO QUE 5
            Materialize.toast('You have selected ' + qtde + 'images, the maximum allowed and 10!', 4000); // 4000 is the duration of the toast
            $(this).val("");
            return false;
        } else if (qtde > 0 & validaModelo()) { // SE NÃO FOR MAIS DO QUE 5 ELE CONTINUA.
            $("#btnPostar").prop("disabled", false);
            return true;
        } else if (qtde === 0 ) { 
            $("#btnPostar").prop("disabled", true);
            return true;
        } else {
            return true;
        }
    });

    // funcao que exibe os estados conforme o click no botao check
    function exibeEstados(){
        $('.selectEstadosHome').hide();
        $("#ativarState").click(function(event) {
            var modelo = $(this).prop( "checked");
            if (modelo) {
                $('.selectEstadosHome').fadeIn(500);
            }else{
                $('.selectEstadosHome').fadeOut(500);
            }
        });
    }
    exibeEstados();
    // Fim funcao que exibe os estados conforme o click no botao check

    // funcao que exibe o botao de submeter o formulario
    $("#btnPostar").click(function (event) {
        event.preventDefault();

        var make = $("#make").val();

        if (make ==='') {

            $("#make").focus();

            return false;

        }else{

           $(".progress").fadeIn(100);
           $("#inputHide").fadeOut(2000);
           $("#btnPostar").prop("disabled", true);
           $("#formPostar").submit();
       }



   });
    // Fim funcao que exibe o botao de submeter o formulario

    $('#btnSubmit').click(function (event) {
        event.preventDefault();
    });

    $('.desativaLink').click(function (event) {
        event.preventDefault();
    });


    $(".button-collapse").sideNav();


    $('select').material_select();


    alteraTamanhoFotoMini();
    trocaCorFundoPreco();
    scroll();
    validaPhone();


    $('.modal-trigger').leanModal();


});
