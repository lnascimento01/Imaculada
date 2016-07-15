function changeLink(id, item, sentido) {
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
                                        <label id="' + id + '" class="label label-primary" for="txtMetodo' + item + '">' + item + '</label></a>\
                                        <div class="col-md-1">\
                                        <input id="txtMetodo-" name="txtMetodo' + item + '" class="requiredField" value="0" style="width: 60px">\
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
$(document).ready(function () {
//    $('#listaMovimentos').dataTable();
});

function itemConstrutor(nome, valor, id) {
    this.nome = nome;
    this.valor = valor;
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
    $('#box-3 input').each(function (e) {
        if ($(this).attr('id') !== undefined) {
            var id = $(this).attr('id');
        } else {
            var id = 'txtMetodo-';
        }
        var data = new itemConstrutor($(this).attr('name'), $(this).val(), id.replace('txtMetodo-', ''));
        box.push(data);
    });
    return box;
}
;
function valoresBox4() {
    var box = [];
    $('#box-4 input').each(function (e) {
        if ($(this).attr('id') !== undefined) {
            var id = $(this).attr('id');
        } else {
            var id = 'txtMetodo-';
        }
        var data = new itemConstrutor($(this).attr('name'), $(this).val(), id.replace('txtMetodo-', ''));
        box.push(data);
    });
    return box;
}
;

$("#formMovimento").submit(function (e) {
    e.preventDefault();
    var dataBox = {
        "pgEntrada": valoresBox1(),
        "pgSaida": valoresBox2(),
        "cvjEntrada": valoresBox3(),
        "cvjSaida": valoresBox4(),
        "fundoCaixa": $('#txtFundoCaixa').val()
    };
    var data = JSON.stringify(dataBox);
    console.log(data);
    $.ajax(
            {
                url: "movimentos/salvar",
                type: "POST",
                dataType: 'JSON',
                data: {data: data},
                success: function (data) {
                    console.log(data);
                }
            });
});        