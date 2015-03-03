<!-- Modal -->

<div class="modal fade" id="ficheVin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h3 class="modal-title ficheNomVin">Modification : <span class="nomVin"></span></h3>
	  </div>

	  <div class="modal-body">


			<form class="form-horizontal">
<fieldset>



<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom : </label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="nom" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cepage">Cépage : </label>
  <div class="col-md-4">
    <select id="cepage" name="cepage" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="region">Région : </label>  
  <div class="col-md-4">
  <input id="region" name="region" type="text" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="vigneron">Vigneron : </label>
  <div class="col-md-4">
    <select id="vigneron" name="vigneron" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="aliment">En accompagnement de : </label>
  <div class="col-md-4">
    <select id="aliment" name="aliment" class="form-control">
      <option value="1">Option one</option>
      <option value="2">Option two</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description : </label>  
  <div class="col-md-4">
  <input id="description" name="description" type="text" placeholder="placeholder" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prix">Prix : </label>  
  <div class="col-md-4">
  <input id="prix" name="prix" type="number" placeholder="placeholder" class="form-control">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="stock">Stock : </label>  
  <div class="col-md-4">
  <input id="stock" name="stock" type="number" placeholder="placeholder" class="form-control">
    
  </div>
</div>

</fieldset>
</form>



	  </div>

	  <div class="modal-footer ">
	  	<button 
	  		class="btn btn-success"
	  		type="button"
	  		>
	  		Enregistrer les modifications
	  	</button>
		<button
			type="button"
			class="btn btn-default btn-sm"
			data-dismiss="modal">
			Annuler
		</button>
	  </div>
	</div>
  </div>
</div>
