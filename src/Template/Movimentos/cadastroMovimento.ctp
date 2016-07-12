<link href="/css/style.css?v=1" rel="stylesheet">
<script type="text/javascript" src="/js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="/bootstrap/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/select/dist/css/bootstrap-select.css">
<script src="/js/jquery.serializeJSON.min.js"></script>

<form class="form-horizontal" id="formMovimento" method="POST">
    <fieldset>
        <div class="div-title title-md">
            <span>Envio de Movimentação</span>
        </div> 
        <div class="div-master">
            <div class="conteudo sub-sm">
                <div class="div-subtitle title-sm">
                    <span>Valores (Entrada)</span>
                </div>
                <div class="div-subtitle title-sm">
                    <span>Valores (Saida)</span>
                </div>
            </div>
            <div class="conteudo valores">
                <div id="box-1" class="div-conteudo">
                    <?php
                    foreach ($metodos as $metodo) {
                        $abv = $metodo->ABREVIACAO;
                        $id = $metodo->ID;
                        if ($metodo->TIPO == 0) {
                            ?>
                            <div class="box-valores">
                                <label class="label label-primary" for="txtMetodo<?php echo($abv) ?>"><?php echo($abv) ?></label>  
                                <div class="col-md-1">
                                    <input id="txtMetodo-<?php echo($id) ?>" name="txtMetodo<?php echo($abv) ?>" class="form-control input-md requiredField" value="0">
                                </div>
                            </div>
                        <?php }
                    }
                    ?></div>
                <div id="box-2" class="div-conteudo">
                    <?php
                    foreach ($metodos as $metodo) {
                        $abv = $metodo->ABREVIACAO;
                        $id = $metodo->ID;
                        if ($metodo->TIPO == 1) {
                            ?>
                            <div class="box-valores">
                                <label class="label label-primary" for="txtMetodo<?php echo($abv) ?>"><?php echo($abv) ?></label>  
                                <div class="col-md-1">
                                    <input id="txtMetodo-<?php echo($id) ?>" name="txtMetodo<?php echo($abv) ?>" class="form-control input-md requiredField" value="0">
                                </div>
                            </div>
                        <?php }
                    }
                    ?>
                </div>
            </div>
            <div class="conteudo sub-sm">
                <div class="div-subtitle title-sm">
                    <span>Cervejas (Entrada)</span>
                </div>
                <div class="div-subtitle title-sm">
                    <span>Cervejas (Saida)</span>
                </div>
            </div>   
            <div class="conteudo valores">
                <div id="box-3" class="div-conteudo">
                    <select class="selectpicker" id="cboEntrada" data-live-search="true">
                        <?php
                        foreach ($cervejas as $cerveja) {
                            $nome = $cerveja->NOME;
                            $id = $cerveja->ID;
                            ?>
                            <option id="E<?php echo $id ?>"><?php echo $nome ?></option>
<?php } ?>
                    </select>
                    <table id="listaEntrada" border="0">
                    </table>
                </div>
                <div id="box-4" class="div-conteudo">
                    <select class="selectpicker" id="cboSaida" data-live-search="true">
                        <?php
                        foreach ($cervejas as $cerveja) {
                            $nome = $cerveja->NOME;
                            $id = $cerveja->ID;
                            ?>
                            <option id="S<?php echo $id ?>" name="Saida"><?php echo $nome ?></option>
<?php } ?>
                    </select>
                    <table id="listaSaida" border="0">
                    </table>
                </div>
            </div>
            <div class="conteudo sub-sm">
                <div class="div-subtitle title-sm">
                    <span>Fundos</span>
                </div>
                <div class="div-subtitle title-sm" style="visibility: hidden;">
                    <span>Undefined</span>
                </div>
            </div>  
            <div class="conteudo valores">
                <div class="box-valores">
                    <label class="label label-primary" for="txtFundoCaixa">Fundo de Caixa</label>  
                    <div class="col-md-1">
                        <input id="txtFundoCaixa" name="txtFundoCaixa" class="form-control col-sm-2" value="0">
                    </div>
                </div>
                <div class="box-valores">
                    <label class="label label-primary" for="txt"></label>  
                    <div class="col-md-1">
                        <input id="txt" name="txt" class="form-control col-sm-2" value="0" style="visibility: hidden;">
                    </div>
                </div>
            </div>
            <div class="botoes">
                <div class="btn-group" role="group" aria-label="...">
                    <button type="button" id="btnVoltar" class="btn btn-warning" onclick="javascript:history.go(-1);"><i class="glyphicon glyphicon-arrow-left"></i> Voltar</button>
                    <button type="button" id="btnLimpar" class="btn btn-danger" onclick="resetform();"><i class="glyphicon glyphicon-trash"></i> Limpar</button>
                    <button type="button" id="btnSalvar" class="btn btn-primary"><i class="glyphicon glyphicon-floppy-disk"></i> Salvar</button>
                    <button type="button" id="btnEnviar" class="btn btn-success"><i class="glyphicon glyphicon-send"></i> Enviar</button>
                </div>
            </div>
        </div>
    </fieldset>
</form>
<script src="/js/custom.js"></script>
<script src="/bootstrap/select/js/bootstrap-select.js"></script>