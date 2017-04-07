/**
 * Created by Phanton II on 25/02/2017.
 */
$(document).on("change", "#cpf", function(){
    var cpfao = $(this).val();

    $.get('/admin/clientes/get-carne/' + cpfao, function (carne) {
        $('select[name=carne_id]').empty();
        $.each(carne, function (key, value) {
            $('select[name=carne_id]').append('<option value=' + value.id + '>' + value.id + '</option>');
        });
    })
});

$(document).on("change", "#produto_id", function(){
     //console.log('Isso sera executado depois do primeiro change, por causa da ordem em que foi colocado na pagina', cpf.value);

    var precoRetornado = $(this).val();


    $.get('/admin/clientes/get-preco/' + precoRetornado, function (preco) {
        $('select[name=valorUnitario]').empty();

        $.each(preco, function (key, value) {

            $('select[name=valorUnitario]').append('<option value=' + value.precoUnitario + '>' + value.precoUnitario + '</option>');
        });
    })
});

$(function(){
  $(".dinheiro").maskMoney({symbol:'R$ ', showSymbol:true, thousands:'.', decimal:',', symbolStay: true, precision:2, allowNegative: false});
})

$("#definiParcelamento").submit(function() {
  $(".dinheiro").maskMoney('destroy');
});
