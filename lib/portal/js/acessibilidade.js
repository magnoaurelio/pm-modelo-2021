
function Contraste(ctt) {
    if (ctt == 'true') {
        $("*").css('cssText', "background: #000 !important; color: fff !important");
    } else {
        $("*").css('cssText', "background: none color: none");
    }

}

$(document).ready(function () {

    if (localStorage.getItem('contraste') == 'true') {
        Contraste('true');
    }
});

var pressedCtrl = false;
var   tamanhoFont = 12;

$(document).keyup(function (e) {
    if (e.which == 17)
        pressedCtrl = false;
})

$(document).keydown(function (e) {
    if (e.which == 17)
        pressedCtrl = true;


    //  quando o control é pressionado juntamente com outra tecla

//-------------- PESQUISA NO SITE (CTRL+I) --------------------------------
    if (e.which == 73 && pressedCtrl == true) {
        $('#presquisaSite').focus();
        $('#presquisaSite').addClass('focus');
    }
 
//-------------- TRANSPARÊNCIA (CTRL+M) --------------------------------
    if (e.which == 77 && pressedCtrl == true) {
        top.location.href = "?p=transparencia";
    }
    
    
//-------------- ACESSO À INFORMAÇÃO(CTRL+A) --------------------------------
    if (e.which == 65 && pressedCtrl == true) {
       top.location.href = "/esic/";
    }

//-------------- CONTRASTE (CTRL+B)--------------------------------
    if (e.which == 66 && pressedCtrl == true) {


        if (localStorage.getItem('contraste') == 'false' || localStorage.getItem('contraste') == null) {
            Contraste('true');
            localStorage.setItem('contraste', 'true');
        } else {
            Contraste('false');
            localStorage.setItem('contraste', 'false');
        }

    }
});


function Fonte(op) {
  
    if (op == "aumentar") {
        tamanhoFont = tamanhoFont + 5;
    } else {
        tamanhoFont = tamanhoFont - 5;
    }

    /* Fonte 20 maximo permitido oculta botão aumentar
    if (tamanhoFont == 20) {
        $("p").hide();
    }

    //Fonte maior que 12 mostra botão diminiuir
    if (tamanhoFont > 12) {
        $("*").show();
    }
 */
    //Altera propriedades da fonte da div conteudo
    $("body").css("font-size", tamanhoFont + "px");


}


/*
 localStorage.setItem('contraste',true); // gravar
 Storage.removeItem('contraste');           // apagar a entrada "contraste"
 Storage.clear();                          // apagar tudo o que está no local storage
 alert(localStorage.getItem('contraste')); 
 */
 