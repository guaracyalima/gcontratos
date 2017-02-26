/**
 * Created by Phanton II on 25/02/2017.
 */
$(document).on("change", "#produto_id", function(){
    // console.log('Isso sera executado depois do primeiro change, por causa da ordem em que foi colocado na pagina', cpf.value);

    var precoRetornado = $(this).val();


    $.get('/admin/clientes/get-preco/' + precoRetornado, function (preco) {
        $('select[name=valorUnitario]').empty();

        $.each(preco, function (key, value) {

            $('select[name=valorUnitario]').append('<option value=' + value.precoUnitario + '>' + value.precoUnitario + '</option>');
        });
    })
});