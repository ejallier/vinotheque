$(document).ready(function(){


	$('.lienFiche').click(afficheFiche);

	console.log('Modif');

	function afficheFiche(){

		var idVal = $(this).data('id');


		$.post( "../model/ficheModif.php", {id : idVal}, function( infos ) {
			console.log( infos );

			$('.nomVin')
			  	.text(infos.vin.nom);
			$('.infoCepage')
				.text(vinInfos.cepage);
			$('.infoViticulteur')
				.text(vinInfos.viticulteur);

		}, "json");

	}



});
