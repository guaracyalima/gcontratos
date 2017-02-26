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