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

$(document).ready(function () {
    $("#btnSalvar").click(function (e)
    {
        var MyForm = $("#formMovimento").serializeJSON();
        console.log(MyForm);
        alert(MyForm);
        
//        $.ajax(
//                {
//                    url: "salvar",
//                    type: "POST",
//                    data: {valArray: MyForm},
//                    success: function (maindta)
//                    {
//
//                        alert(maindta);
//
//                    },
//                    error: function (jqXHR, textStatus, errorThrown)
//                    {
//                    }
//                });
//        e.preventDefault(); //STOP default action

    });
});