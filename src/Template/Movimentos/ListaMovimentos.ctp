<link href="/css/style.css?v=1" rel="stylesheet">
<script type="text/javascript" src="/js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="/iziModal/css/iziModal.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="/bootstrap/js/bootstrap.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/select/dist/css/bootstrap-select.css">
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/iziModal/js/iziModal.min.js"></script>

<div class="div-title title-md">
    <span>Lista de Movimentos</span>
</div> 
<div class="div-master table-responsive">
    <table id="listaMovimentos" class="table table-striped">
        <thead>  
            <tr>  
                <th class="row text-center">Id</th>  
                <th class="row text-center">Data do movimento</th>  
                <th class="row text-center">Data de Envio</th>  
                <th class="row text-center">Status</th>  
                <th class="row text-center">Edição</th>  
            </tr>  
        </thead>  
        <tbody>
            <?php
            foreach ($movimentos as $movimento) {
                $id = $movimento->ID;
                $dataMovimento = $movimento->DATA_CRIACAO;
                $dataEnvio = $movimento->DATA_ENVIO;
                $status = $movimento->STATUS;
                ?>
                <tr>  
                    <td class="row text-center"><?php echo $id ?></td>    
                    <td class="row text-center"><?php echo date('d/m/Y', strtotime($dataMovimento)) ?></td>    
                    <td class="row text-center">
                        <?php
                        if ($dataEnvio) {
                            echo date('d/m/Y', strtotime($dataEnvio));
                        } else {
                            echo('Não Enviado');
                        }
                        ?></td>
                    <td class="row text-center">
                        <?php
                        if ($status === TRUE) {
                            echo('<span style="display: none;" alias="ok">1</span></span><a id="linkEnviado" href="#" style="color: inherit;"><i class="glyphicon glyphicon-send text-success"></i></a>');
                        } else {
                            echo('<span style="display: none;" alias="Pendente">0</span><a id="linkPendente" href="#" style="color: inherit;"><i class="glyphicon glyphicon-send text-warning"></i></a>');
                        }
                        ?></td>    
                    <td class="row text-center">
                        <?php
                        if ($status === TRUE) {
                            echo('<span style="display: none;" alias="ok">0</span><a id="linkEnviado" href="#" style="color: inherit;"><i class="glyphicon glyphicon-edit text-muted"></i></a>');
                        } else {
                            echo('<span style="display: none;" alias="ok">1</span><a href="#" style="color: #3C763D;"><i class="glyphicon glyphicon-edit"></i></a>');
                        }
                        ?>
                    </td>
                </tr> 
            <?php } ?>
        </tbody>
    </table>
</div>
<div id="modal-alerta" class="iziModal">
</div>
<div id="modal-envio" class="iziModal">
</div>
<script src="/js/custom.js"></script>
<script src="/bootstrap/select/js/bootstrap-select.js"></script>
<script>
    $(document).ready(function () {
        $('input').each(function () {
            $(this).removeAttr('type');
        });
    });
    $("#modal-alerta").iziModal({
        title: "Informação",
        subtitle: 'Movimento já Enviado!',
        iconClass: 'glyphicon glyphicon-info-sign',
        headerColor: '#1798a5',
        width: 400
    });
    $(document).on('click', '#linkEnviado', function (event) {
        event.preventDefault();
        $('#modal-alerta').iziModal('open');
    });
    $("#modal-envio").iziModal({
        title: "Atenção",
        subtitle: 'Deseja enviar o movimento? <p></p> <button type="button" id="btnEnviarEmail" class="btn btn-success" onclick="enviaEmail();"><i class="glyphicon glyphicon-send"></i> Enviar</button>',
        iconClass: 'glyphicon glyphicon-question-sign',
        headerColor: '#1798a5',
        width: 400
    });
    $(document).on('click', '#linkPendente', function (event) {
        event.preventDefault();
        $('#modal-envio').iziModal('open');
    });
    function enviaEmail(){
        window.location = '../envia/email';
    };
</script>