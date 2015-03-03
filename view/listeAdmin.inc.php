<main>

	<div class="container">
		<div class="page-header">
			<h1>Liste des vins</h1>
			<p>Un exercice de PhP procédural</p>
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
											Modifier
											</a>";
								$ligne .= "</td>";





							$ligne .= "</tr>";

							echo $ligne;
						}

					?>
				</table>

				<?php include ('../view/modalModif.inc.php'); ?>


			</div>
			</div>




	</div>

</main>
