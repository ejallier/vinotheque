<main>

  <div class="container">
    <div class="page-header">
      <h1>Modifier le vin : <?= $vinInfos['nom'] ?></h1>
      <p>Un exercice de PhP procédural</p>
    </div>

    <div class="row">

      <div class="col-md-8 col-md-offset-2">


			<form class="form-horizontal" action="modif.php" method="post">

      <input type="hidden" name="id" value="<?= $vinInfos['id_vin'] ?>">


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom : </label>  
  <div class="col-md-4">
  <input id="nom" name="nom" type="text" placeholder="nom" class="form-control input-md" value="<?= $vinInfos['nom'] ?>">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cepage">Cépage : </label>
  <div class="col-md-4">

    <select id="cepage" name="cepage" class="form-control">
      <?= optionGen($cepageListe, $vinInfos['cepage'], "idcepage", 'nom') ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="region">Région : </label>  
  <div class="col-md-4">
  <input id="region" name="region" type="text" placeholder="placeholder" class="form-control input-md"
    value="<?= $vinInfos['region'] ?>">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="vigneron">Vigneron : </label>
  <div class="col-md-4">
    <select id="vigneron" name="vigneron" class="form-control">
      <?= optionGen($vigneronListe, $vinInfos['idvigneron'], "idvigneron", 'nom') ?>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="aliment">En accompagnement de : </label>
  <div class="col-md-4">
    <select id="aliment" name="aliment" class="form-control">
      <?= optionGen($alimentListe, $vinInfos['idaliment'], 'id_aliment', 'nom'); ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">Description : </label>  
  <div class="col-md-4">
    <select id="description" name="description" class="form-control">
      <?= optionGen($descriptionListe, $vinInfos['iddescription'], 'iddescription', 'robe'); ?>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prix">Prix : </label>  
  <div class="col-md-4">
  <input id="prix" name="prix" type="number" placeholder="placeholder" class="form-control"
    value="<?= $vinInfos['prix'] ?>">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="stock">Stock : </label>  
  <div class="col-md-4">
  <input id="stock" name="stock" type="number" placeholder="placeholder" class="form-control"
  value="<?= $vinInfos['stock'] ?>">
    
  </div>
</div>

<div class="form-group">
  <div class="col-md-offset-4 col-md-4">
    <button type="submit" class="btn btn-primary btn-lg"><i class="glyphicon glyphicon-floppy-disk"></i> Enregistrer les modifications </button>
  </div>
</div>
<div class="form-group">
  <div class="col-md-offset-4 col-md-4 ">
    <a href="index.php" class="btn btn-default btn-sm">Annuler les modifications</a>
  </div>
</div>
</form>



      </div>
      </div>




  </div>

</main>

