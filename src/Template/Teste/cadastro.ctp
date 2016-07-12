<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Envio de Movimentação</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nome</label>  
  <div class="col-md-4">
  <input id="txtNome" name="txtNome" placeholder="placeholder" class="form-control input-md" type="text">  
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="textarea">Descrição</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="txtAreaDescricao" name="txtAreaDescricao">default text</textarea>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbasic">Select Basic</label>
  <div class="col-md-4">
    <select id="cboUnidade" name="selectbasic" class="form-control">
      <option value="1">Option one</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton">Single Button</label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Button</button>
  </div>
</div>

<!-- Multiple Radios (inline) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radios">Inline Radios</label>
  <div class="col-md-4"> 
    <label class="radio-inline" for="radios-0">
      <input name="radios" id="radios-0" value="1" checked="checked" type="radio">
      1
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="radios" id="radios-1" value="2" type="radio">
      2
    </label> 
    <label class="radio-inline" for="radios-2">
      <input name="radios" id="radios-2" value="3" type="radio">
      3
    </label> 
    <label class="radio-inline" for="radios-3">
      <input name="radios" id="radios-3" value="4" type="radio">
      4
    </label>
  </div>
</div>

<!-- Multiple Checkboxes -->
<div class="form-group">
  <label class="col-md-4 control-label" for="checkboxes">Multiple Checkboxes</label>
  <div class="col-md-4">
  <div class="checkbox">
    <label for="checkboxes-0">
      <input name="checkboxes" id="checkboxes-0" value="1" type="checkbox">
      Option one
    </label>
	</div>
  <div class="checkbox">
    <label for="checkboxes-1">
      <input name="checkboxes" id="checkboxes-1" value="2" type="checkbox">
      Option two
    </label>
	</div>
  </div>
</div>

</fieldset>
</form>