$(document).ready(function(){


	$('.lienFiche').click(afficheFiche);

	console.log('yp');

	function afficheFiche(){

		var idVal = $(this).data('id');


		$.post( "../model/fiche.php", {id : idVal}, function( vinInfos ) {
			console.log( vinInfos );

			$('.ficheNomVin')
			  	.text(vinInfos.nom);
			$('.infoCepage')
				.text(vinInfos.cepage);
			$('.infoViticulteur')
				.text(vinInfos.viticulteur);

		}, "json");

	}



});
