/**
 * Created by Phanton II on 25/02/2017.
 */
$(function(){

    $("#exc").click(
        function(){
            $("#cadCarne").modal('show');
        });
});

$(function(){

    $("#getModalParcelamento").click(
        function(){
            $("#defineParcelamento").modal('show');
        });
});

//store
$(function () {
    $("form.form-add-state").submit(function () {

        var dados = $(this).serialize();

        $.ajax({
            url: $(this).attr("send"),
            data: dados,
            type: "POST",
            beforeSend: iniciaPreloader()

        }).done(function () {

            finalizaPreloader();
            alert("Carnê cadastrado com sucesso!");

        }).fail(function () {

            finalizaPreloader();
            alert("Falha ao cadastrar!");

        });


        return false;
    })
});
//parcelamento
$(function () {
    $("form.formDefineParcelamento").submit(function () {
        var dados = $(this).serialize();
        $.ajax({
            url: $(this).attr("send"),
            data: dados,
            type: "POST",
            beforeSend: iniciaPreloader(),

        }).done(function () {

            finalizaPreloader();
            alert("Cadastrado com sucesso!");
            console.log(dados);

        }).fail(function () {
            console.log(dados);
            finalizaPreloader();
            alert("Falha ao cadastrar!");

        });
        return false;
    })
});

function iniciaPreloader() {
    $(".preloader").show();
}

function finalizaPreloader() {
    $(".preloader").hide();
}

function calculaTotal(){

  $('.dinheiro').maskMoney('destroy');

    document.getElementById("total").value = '0';

    var VTOTALLIQUIDO = parseFloat(document.getElementById("valorUnitario").value);


    var quantidade = parseFloat(document.getElementById("quantidade").value);

    var desconto = parseFloat(document.getElementById("desconto").value);

    var valorReal = parseFloat(VTOTALLIQUIDO * quantidade) - parseFloat(desconto);
    console.log("Quantidade e valorUnitario "+valorReal);

    var TOTAL = parseFloat(valorReal);

    document.getElementById("total").value = TOTAL;
    $("#total").maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true, precision:2, allowNegative: false});

}

//CALCULA O VALOR DAS PARCELAS

function calculaValorParcela() {

  $('.dinheiro').maskMoney('destroy');

    document.getElementById("valorParcela").value = '0';

    var valorTotal = parseFloat(document.getElementById("total").value);

    if (isNaN(valorTotal)) 
    {
        valorTotal = 0;
    }

    var valorUnitario = parseFloat(document.getElementById("valorUnitario").value);
    var quantidade = parseFloat(document.getElementById("quantidade").value);
    var desconto = parseFloat(document.getElementById("desconto").value);
    var entrada = parseFloat(document.getElementById("entrada").value);
    var parcelas = parseFloat(document.getElementById("numParcelas").value);

    if (isNaN(parcelas)) {
        parcelas = 0;
        alert("O pagamento vai ser a vista?");
    }

    var valorReal = parseFloat(valorUnitario * quantidade) - parseFloat(desconto);
    //var valParcela = parseFloat(valorTotal) / parseFloat(parcelas) ;
    var valParcela = (parseFloat(valorReal) - parseFloat(entrada))  / parseFloat(parcelas);

    document.getElementById("valorParcela").value = valParcela;
    $("#valorParcela").maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true, precision:2, allowNegative: false});

}

function somenteNumeros(num) 
{
  var er = /[^0-9.]/;
          er.lastIndex = 0;
          var campo = num;
          if (er.test(campo.value)) 
          {
            campo.value = "";
          }
}


