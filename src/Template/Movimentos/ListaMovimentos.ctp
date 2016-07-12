<link href="/css/style.css?v=1" rel="stylesheet">
<script type="text/javascript" src="/js/jquery.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="/bootstrap/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="/bootstrap/select/dist/css/bootstrap-select.css">
<link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css">
<script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script>

<div class="div-title title-md">
    <span>Lista de Movimentos</span>
</div> 
<div class="div-master table-responsive">
    <table id="listaMovimentos" class="table table-striped">
        <thead>  
            <tr>  
                <th>Id</th>  
                <th>Data do movimento</th>  
                <th>Data de Envio</th>  
                <th>Status</th>  
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
                    <td><?php echo $id ?></td>    
                    <td><?php echo $dataMovimento ?></td>    
                    <td><?php echo $dataEnvio ?></td>    
                    <td><?php echo $status ?></td>    
                </tr> 
            <?php } ?>
        </tbody>  
    </table>
</div>

<script src="/js/custom.js"></script>
<script src="/bootstrap/select/js/bootstrap-select.js"></script>