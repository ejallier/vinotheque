<main>

	<div class="container">
		<div class="page-header">
			<h1>Recherche</h1>
			<p>Un exercice de PhP procédural</p>
		</div>
		<div class="row">

		<div class="col-md-8 col-md-offset-2">
			<div class="jumbotron well">
				<div class="h2">Le <em>bon</em> vin...</div>
				<p>Quoi boire, avec qui, avec quoi, et comment ?</p>
				<p>Nous pouvons vous filer quelques pistes...</p>
			</div>
		</div>

		</div>

<form class="form-horizontal row" method="post" action="rechercher.php">

<div class="col-md-6">
<fieldset>
<legend>Quel type de vin préférez-vous ?</legend>
<!-- Multiple Radios -->
<div class="form-group">

  <div class="col-md-4 col-md-offset-2">

  <?php
		//checked par default:
			$ckdDefault = "checked";

		foreach($descriptions as $description){
			$robe = $description['robe'];
			$id = $description['iddescription'];

			$ckd = "";
			if($id == $descriptionId) {
				$ckdDefault = '';
				$ckd = "checked";
			}

			$output  = "<div class='radio'>";
			$output .= 		"<label for='description-$id'>";
			$output .= 			"<input type='radio' name='description' id='description-$id' value='$id' $ckd>";
      		$output .= 			$robe;
			$output .= 		"</label>";
			$output .= "</div>";

			echo $output;
		}
?>
   <div class="radio">
    <label for="description-no">
      <input type="radio" name="description" id="description-no" value="no" <?= $ckdDefault ?> >
      Pas de préférence
    </label>
	</div>
  </div>
</div>
</fieldset>
	</div>

<div class="col-md-6">
<fieldset>
<legend>Pour accompagner quels aliments ?</legend>

<!-- Multiple Radios -->
<div class="form-group">

  <div class="col-md-4 col-md-offset-2">
  <?php
	$ckdAlimentDefault = "checked";
		foreach($aliments as $aliment){
			$nom = $aliment['nom'];
			$id = $aliment['id_aliment'];

			$ckd = "";
			if($id == $alimentId) {
				$ckdAlimentDefault = '';
				$ckd = "checked";
			}

			$output  = "<div class='radio'>";
			$output .= 		"<label for='aliment-$id'>";
			$output .= 			"<input type='radio' name='aliment' id='aliment-$id' value='$id' $ckd>";
      		$output .= 			$nom;
			$output .= 		"</label>";
			$output .= "</div>";

			echo $output;
		}
?>

<div class='radio'>
    <label for="aliment-no">
      <input type="radio" name="aliment" id="aliment-no" value="no" <?= $ckdAlimentDefault ?> >
      Ne sais pas.
    </label>
	</div>
  </div>
</div>
</fieldset>
</div>
<!-- Button -->

<div class="form-group">

  <div class="col-md-12 text-center">
    <button id="rechercher" name="rechercher" class="btn btn-primary" value="rechercher">Rechercher</button>
  </div>
</div>


</form>


<?php include("../view/projects.inc.php"); ?>

	</div>

</main>
