<?php
$name="Accueil";


include("../inc/globalVar.inc.php");
include("../inc/top.inc.php");

?>

	<header class="big-header text-center">
		<div class="container">
			<h1 class="mastoc"><a href="index.php">Ma Vinothèque</a></h1>
			<div class="text-center">
				<a href="" class="btn btn-ghost login btn-lg">Login</a>
			</div>
		</div>
	</header>


<main>

	<div class="container">
		<div class="page-header">
			<h1>Mieux classer votre vin
			<small>Pour mieux le boire</small></h1>
			<p>Un exercice de PhP procédural</p>
		</div>
		<div class="row">
			<div class="col-md-12">
				<h1 class="page-header">Les trucs à faire</h1>
			</div>

			<div class="col-md-6">
				<article>
					<h2>Objectifs</h2>
					<ul>
						<li>Savoir écrire du PhP procédural</li>
						<li>Rendre dynamique des pages statiques HTML/CSS grâce à PhP</li>
						<li>Envoyer un mail par un formulaire</li>
						<li>CRUDer comme un dieu</li>
					</ul>
				</article>
			</div>
			<div class="col-md-6">
				<article>
					<h2>Lorem</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius beatae ipsa aut maxime debitis eligendi, voluptas sint tempore a non, necessitatibus dolorem labore saepe quia dolores alias sit voluptatibus placeat.</p>
					<p>Aliquam ab vero adipisci, ratione recusandae iusto placeat iste. Qui earum totam enim perspiciatis corrupti similique laborum ut eaque perferendis magni, mollitia nihil veniam nostrum, ex facere ipsum deserunt tempore.</p>
				</article>

			</div>
</div>
<div class="row">

			<div class="col-md-12">
				<h1 class="page-header">Mais... Pourquoi le vin ?</h1>
			</div>
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

<?php
 include ("../inc/bottom.inc.php");
