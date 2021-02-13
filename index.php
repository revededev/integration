<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Description de ma page">
	<title>Super App - L'application trop super !</title>
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<header class="site-header">
		<div class="container">
			<div class="logo ir">Super App</div>
			<nav class="site-nav">
				<button class="toggle-menu" aria-expanded="false" aria-controls="main-menu">
					<svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 27">
							<rect class="top-bar" fill="#FFFFFF" width="34" height="4"/>
							<rect class="center-bar" y="11" fill="#FFFFFF" width="34" height="4"/>
							<rect class="bottom-bar" y="23" fill="#FFFFFF" width="34" height="4"/>
					</svg>
					<span class="screen-reader-text">Menu</span>
				</button>
				<ul class="menu" hidden>
					<li class="menu-item"><a href="#about">A&nbsp;propos</a></li>
					<li class="menu-item"><a href="#services">Services</a></li>
					<li class="menu-item"><a href="#team">L'équipe</a></li>
					<li class="menu-item"><a href="#contact">Contact</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="hero" id="about">
		<div class="container">
			<h1>Super App</h1>
			<p class="baseline">L'application trop super !</p>
			<div class="btn-grp">
				<a href="" class="btn"><img src="img/icon-thumb.svg" alt="Pouce vers le haut" aria-hidden="true"> <span>Like it</span></a>
				<a href="" class="btn"><img src="img/icon-heart.svg" alt="Coeur" aria-hidden="true"> <span>Love it</span></a>
				<a href="" class="btn"><img src="img/icon-cart.svg" alt="Caddie" aria-hidden="true"> <span>Buy it</span></a>
			</div>
		</div>
	</section>
	<section class="skills" id="services">
		<div class="container">
			<h2>Elle fait des trucs supers !</h2>
			<ul class="skill-list">
				<li class="skill-item">
					<div class="circle">
						<img src="img/icon-fork-knife.svg" alt="Une fourchette et un couteau">
					</div>
					<h3>Mettre la table</h3>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Beatae non, natus odit incidunt quisquam impedit eligendi. Necessitatibus ex qui molestias?</p>
				</li>
				<li class="skill-item">
					<div class="circle">
						<img src="img/icon-bed.svg" alt="Une personne allongée dans un lit">
					</div>
					<h3>Faire le lit</h3>
					<p>Quo dolores possimus velit neque excepturi! Quos, voluptatem ipsam molestiae quae nobis perspiciatis iste impedit? Optio quibusdam dolores quaerat repudiandae.</p>
				</li>
				<li class="skill-item">
					<div class="circle">
						<img src="img/icon-fire.svg" alt="Une flamme">
					</div>
					<h3>Allumer le feu</h3>
					<p>Aliquid nobis tempora exercitationem iure repellendus aut delectus excepturi necessitatibus molestias voluptate, eveniet rem, minus dolor adipisci quod doloribus nam.</p>
				</li>
				<li class="skill-item">
					<div class="circle">
						<img src="img/icon-leaf.svg" alt="Une feuille">
					</div>
					<h3>Ramasser les feuilles</h3>
					<p>Cum quos assumenda iure eveniet, eos repellat, possimus inventore deleniti id et quis rem itaque est. Nostrum illum perspiciatis earum!</p>
				</li>
				<li class="skill-item">
					<div class="circle">
						<img src="img/icon-umbrella.svg" alt="Un parapluie">
					</div>
					<h3>Protéger de la pluie</h3>
					<p>Fugit molestias in explicabo numquam, facere quaerat, iure neque esse recusandae nisi autem iusto! Odit perferendis vero quos reprehenderit consequuntur.</p>
				</li>
				<li class="skill-item">
					<div class="circle">
						<img src="img/icon-dollar.svg" alt="$">
					</div>
					<h3>Vider votre compte</h3>
					<p>Ea reprehenderit distinctio, aspernatur inventore modi voluptatum odio nisi cumque quae quis fugit aut perspiciatis? Porro mollitia ea quo doloribus.</p>
				</li>
			</ul>
		</div>
	</section>
	<section class="team" id="team">
		<header class="team-title">
			<div class="container">
				<h2>La super équipe à l'origine de Super App</h2>
			</div>
		</header>
		<div class="container">
			<ul class="team-list">
				<li class="team-item">
					<img src="img/avaone.jpg" alt="Portrait de Tex Talign">
					<h3>Tex Talign</h3>
					<a href="#" class="btn btn-primary"><img src="img/icon-envelope.svg" alt="Icône enveloppe" aria-hidden="true"> Lui écrire</a>
				</li>
				<li class="team-item">
					<img src="img/avatwo.jpg" alt="Portrait de Marge Inn">
					<h3>Marge Inn</h3>
					<a href="#" class="btn btn-primary"><img src="img/icon-envelope.svg" alt="Icône enveloppe" aria-hidden="true"> Lui écrire</a>
				</li>
				<li class="team-item">
					<img src="img/avathree.jpg" alt="Portrait d'Isaac Newton juste avant qu'il ne se prenne une pomme sur la tête">
					<h3>Isaac Newton</h3>
					<a href="#" class="btn btn-primary"><img src="img/icon-envelope.svg" alt="Icône enveloppe" aria-hidden="true"> Lui écrire</a>
				</li>
				<li class="team-item">
					<img src="img/avafour.jpg" alt="Portrait d'Ash Tehemel">
					<h3>Ash Tehemel</h3>
					<a href="#" class="btn btn-primary"><img src="img/icon-envelope.svg" alt="Icône enveloppe" aria-hidden="true"> Lui écrire</a>
				</li>
			</ul>
		</div>
	</section>
	<section class="contact" id="contact">
		<div class="container">
			<h2>Envoyez-nous un message</h2>
			<form action="" class="contact-form">
				<div class="form-group half">
					<label for="name" class="form-label">Votre nom</label>
					<input type="text" class="form-input" id="name">
				</div>
				<div class="form-group half">
					<label for="email">Votre email</label>
					<input type="email" class="form-input" id="email">
				</div>
				<div class="form-group">
					<label for="msg">Votre message</label>
					<textarea class="form-textarea" id="msg"></textarea>
				</div>
				<button type="submit" class="btn"><img src="img/icon-paperplane.svg" alt="Icône avion en papier" aria-hidden="true"> Envoyer</button>
			</form>
		</div>
	</section>
	<script src="js/navigation.js"></script>
</body>
</html>