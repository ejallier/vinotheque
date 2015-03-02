<main>

	<div class="container">
		<div class="page-header">
			<h1>Liste des vins</h1>
			<p>Un exercice de PhP procédural</p>
		</div>
		<div class="row">

		<div class="col-md-6 col-md-offset-3">
			<div class="jumbotron well">
				<div class="h2">J'aime le pinard !</div>
			</div>
		</div>

		</div>
		<div class="row">

			<div class="col-md-8 col-md-offset-2">


				<table class="table table-bordered table-hover">
					<tr>
						<th>Code</th>
						<th>Nom</th>
						<th>Prix</th>
						<th>Stock</th>
						<th>Fiche</th>
					</tr>
					<?php
						foreach($vins as $vin){
							$ligne = "<tr>";


								$ligne .= "<td>";
									$ligne .= $vin['id_vin'];
								$ligne .= "</td>";

								$ligne .= "<td>";
									$ligne .= $vin['nom'];
								$ligne .= "</td>";

								$ligne .= "<td>";
									$ligne .= $vin['prix'] . " €";
								$ligne .= "</td>";

								$ligne .= "<td>";
									$ligne .= $vin['stock'];
								$ligne .= "</td>";

								$ligne .= "<td>";
									$ligne .= "<a href='#'
											class='lienFiche'
											data-toggle='modal'
											data-target='#ficheVin'
											data-id='".$vin['id_vin']."'>
											<i class='glyphicon glyphicon-new-window'
												data-toggle='modal'
												data-target='#ficheVin'></i>
											En savoir plus
											</a>";
								$ligne .= "</td>";





							$ligne .= "</tr>";

							echo $ligne;
						}

					?>
				</table>

				<?php include ('../view/modalFiche.inc.php'); ?>


			</div>
			</div>
			<div class="row">
			<div class="col-md-3 text-center">
				<div class="project">
					<i class="glyphicon glyphicon-glass"></i>
				</div>
				<p>Jean-Lou voulait qu'on parle de boisson.<br>Encore</p>
			</div>
			<div class="col-md-3 text-center">
				<div class="project">
					<i class="glyphicon glyphicon-briefcase"></i>
				</div>
				<p>Mais bon, en même temps, 'faut bosser, ...</p>
			</div>
			<div class="col-md-3 text-center">
				<div class="project">
					<i class="glyphicon glyphicon-education"></i>
				</div>
				<p>Et puis aprendre des trucs, aussi</p>
			</div>
			<div class="col-md-3 text-center">
				<div class="project">
					<i class="glyphicon glyphicon-glass"></i>
				</div>
				<p>Mais jean-Lou voulait <em>Vraiment</em> qu'on parle de boisson!</p>
			</div>
		</div>

	</div>

</main>
