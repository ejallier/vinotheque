<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vinothèque</title>
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootswatch/3.3.2/yeti/bootstrap.min.css">
	<link rel="stylesheet" href="../style/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-block">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="index.php">Vinothèque</a>
    </div>

    <div id="nav-block" class="collapse navbar-collapse">
    	<ul class="nav navbar-nav">
    		<li><a href=""><i class="glyphicon glyphicon-book glyphicon-lg"></i> Liste des vins</a></li>
    		<li><a href=""><i class="glyphicon glyphicon-pencil glyphicon-lg"></i> Ajouter un vin</a></li>
			<li><a href=""><i class="glyphicon glyphicon-search glyphicon-lg"></i> Chercher le bon vin</a></li>
    	</ul>
    </div>


  </div>
</nav>



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

<footer class="big-footer">
	<div class="container">
		<div class="row">
			<div class="text-center">CEFIM &copy; <?= date(Y) ?></div>
			<div class="text-center">Vinothèque</div>
			<div class="text-center">F. Ormateur</div>
		</div>
	</div>
</footer>
<script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>
