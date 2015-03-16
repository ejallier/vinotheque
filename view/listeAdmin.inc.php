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
						<th>Action</th>
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
									$ligne .= "<a href='modif.php?id=".$vin['id_vin']."'
											class='lienFiche'
											'>
											<i class='glyphicon glyphicon-edit'
												data-toggle='modal'
												data-target='#ficheVin'></i>
											Modifier
											</a>
											_
											<a href='suppr.php?id=".$vin['id_vin']."'
											class='lienFiche'
											'>
											<i class='glyphicon glyphicon-remove'
												data-toggle='modal'
												data-target='#ficheVin'></i>
											Supprimer
											</a>" ;
								$ligne .= "</td>";





							$ligne .= "</tr>";

							echo $ligne;
						}

					?>
				</table>




			</div>
			</div>




	</div>

</main>
