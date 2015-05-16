<main>

  <div class="container">
    <div class="page-header">
      <h1>Ajouter un vin</h1>
      <p>Un exercice de PhP procédural</p>
    </div>

    <div class="row">

      <div class="col-md-8 col-md-offset-2">


<form class="form-horizontal" action="ajout.php" method="post">



  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="nom">Nom : </label>  
    <div class="col-md-4">
    <input 
        id="nom" name="nom" 
        type="text" placeholder="Quel est le nom de ce vin ?" 
        class="form-control input-md"
        required>
      
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="cepage">Cépage : </label>
    <div class="col-md-4">

      <select id="cepage" name="cepage" class="form-control">
        <?= optionGen($cepageListe, '', "idcepage", 'nom') ?>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="region">Région : </label>  
    <div class="col-md-4">
    <input id="region" name="region" type="text" placeholder="Où a t'il été cultivé? " class="form-control input-md">
      
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="vigneron">Vigneron : </label>
    <div class="col-md-4">
      <select id="vigneron" name="vigneron" class="form-control">
        <?= optionGen($vigneronListe, '', "idvigneron", 'nom') ?>
      </select>
    </div>
  </div>

  <!-- Select Basic -->
  <div class="form-group">
    <label class="col-md-4 control-label" for="aliment">En accompagnement de : </label>
    <div class="col-md-4">
      <select id="aliment" name="aliment" class="form-control">
        <?= optionGen($alimentListe, '', 'id_aliment', 'nom'); ?>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="description">Description : </label>  
    <div class="col-md-4">
      <select id="description" name="description" class="form-control">
        <?= optionGen($descriptionListe, '', 'iddescription', 'robe'); ?>
      </select>
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="prix">Prix : </label>  
    <div class="col-md-4">
    <input id="prix" name="prix" type="number" placeholder="Prix de vente en €" class="form-control">
      
    </div>
  </div>

  <!-- Text input-->
  <div class="form-group">
    <label class="col-md-4 control-label" for="stock">Stock : </label>  
    <div class="col-md-4">
    <input id="stock" name="stock" type="number" placeholder="Nombre de bouteilles" class="form-control">
      
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-offset-4 col-md-4">
      <button type="submit" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-open"></i> Ajouter le vin </button>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-offset-4 col-md-4 ">
      <a href="index.php" class="btn btn-default btn-sm">Annuler</a>
    </div>
  </div>
</form>



      </div>
      </div>




  </div>

</main>

