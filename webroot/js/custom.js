$(document).ready(function () {
    if ($('#listaMovimentos').val() !== undefined) {
        $('#listaMovimentos').dataTable({
            "oLanguage": {
                "sSearch": "Procurar: ",
                "sLengthMenu": "Mostrar _MENU_ ",
                "sInfo": "Listando _START_ até _END_ de _TOTAL_ Movimentos",
                "sInfoEmpty": "Nenhum resultado encontrado",
                "sInfoFiltered": " - Filtrando de _MAX_ resultados",
//         "sInfoPostFix": "Resultados provenientes de informações Registradas.",
                "sLoadingRecords": "Por Favor aguarde - carregando...",
                "sProcessing": "DataTables ocupado no momento",
                "sZeroRecords": "Sem Resultados",
                "sEmptyTable": "Sem dados disponíveis no banco",
                "oPaginate": {
                    "sFirst": "Página 1",
                    "sLast": "Ultima Página",
                    "sNext": "Proxima",
                    "sPrevious": "Anterior"
                },
                "oAria": {
                    "sSortAscending": " - click para ordem crescente",
                    "sSortDescending": " - click para ordem decrescente"
                }
            }
        });
    }

});
function addFieldCerveja(id, item, sentido) {
    if (sentido == 'cboEntrada') {
        var listaSentido = 'Entrada'
    } else if (sentido == 'cboSaida') {
        var listaSentido = 'Saida'
    }
    var field = $("#remove" + listaSentido + id).attr('id');
    if (field === undefined) {
        $('#lista' + listaSentido).append('\
                                        <div id="remover" class="remove' + listaSentido + id + '">\
                                        <div class="box-valores valores-sm" id="remove' + id + '">\
                                        <a href="#" class="remove_campo" id="remove' + listaSentido + id + '" onclick="remover(\'' + listaSentido + '\',\'' + id + '\');">\
                                        <label id="' + id + '" class="label label-primary" for="txtCerveja' + item + '">' + item + '</label></a>\
                                        <div class="col-md-1">\
                                        <input id="txtCerveja-' + id + '" name="txtCerveja' + listaSentido + item + '" class="requiredField" value="0" style="width: 60px">\
                                        </div>\
                                        </div>\
                                        </div>\
                                        ');
    }
}
;
function remover(sentido, id) {
//    var div = $(this).attr('id');
//    console.log(div);
    $('.remove' + sentido + id).remove();
//    $('#lista' + sentido + ' div.remove' + sentido + id).remove();
}
function resetform() {
    document.getElementById("formMovimento").reset();
}
function clickBtn(valor) {
    if (valor === 0) {
        window.location = 'cadastro/movimentos';
    } else if (valor === 1) {
        window.location = 'lista/movimentos';
    }
}
;
function itemConstrutor(nome, valor, id) {
    this.nome = nome;
    this.valor = valor.replace('.', '').replace('R$', '').replace(',','.');
    this.id = id;
}
;
function valoresBox1() {

    var box = [];
    $('#box-1 input').each(function (e) {
        var id = $(this).attr('id');
        var data = new itemConstrutor($(this).attr('name'), $(this).val(), id.replace('txtMetodo-', ''));
        box.push(data);
    });
    return box;
}
;
function valoresBox2() {
    var box = [];
    $('#box-2 input').each(function (e) {
        var id = $(this).attr('id');
        var data = new itemConstrutor($(this).attr('name'), $(this).val(), id.replace('txtMetodo-', ''));
        box.push(data);
    });
    return box;
}
;
function valoresBox3() {
    var box = [];
    $('#listaEntrada input').each(function (e) {
        if ($(this).attr('id') != undefined) {
            var id = $(this).attr('id');
            var data = new itemConstrutor($(this).attr('name'), $(this).val(), id.replace('txtCerveja-', ''));
        }
        box.push(data);
    });
    return box;
}
;
function valoresBox4() {
    var box = [];
    $('#listaSaida input').each(function (e) {
        if ($(this).attr('id') != undefined) {
            var id = $(this).attr('id');
            var data = new itemConstrutor($(this).attr('name'), $(this).val(), id.replace('txtCerveja-', ''));
        }
        box.push(data);
    });
    return box;
}
;
$("#btnSalvar").on('click', function (e) {
    e.preventDefault();
    var dataBox = {
        "pgEntrada": valoresBox1(),
        "pgSaida": valoresBox2(),
        "cvjEntrada": valoresBox3(),
        "cvjSaida": valoresBox4(),
        "fundoCaixa": $('#txtFundoCaixa').val().replace('.', '').replace('R$', '').replace(',','.')
    };
    console.log(dataBox);

    var data = JSON.stringify(dataBox);
    $.ajax(
            {
                url: "movimentos/salvar",
                type: "POST",
                dataType: 'JSON',
                data: {data: data},
                success: function (data) {
                    resetform();
                    window.location.reload();
                },
                error: function () {
                    alert('Houve um erro ao salvar o movimento!');
                }
            });
});