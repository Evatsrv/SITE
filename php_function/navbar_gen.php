<?php

function navbar_gen (){

    echo"
    <section class='menu'>
	<nav class='navbar navigation'>
		<div class='container'>
			<div class='navbar-header'>
				<h2 class='menu-title'>Main Menu</h2>
				<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar'
					aria-expanded='false' aria-controls='navbar'>
					<span class='sr-only'>Toggle navigation</span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
					<span class='icon-bar'></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id='navbar' class='navbar-collapse collapse text-center'>
				<ul class='nav navbar-nav'>

					<!-- Home -->
					<li class='dropdown '>
						<a href='index.php'>Accueil</a>
					</li><!-- / Home -->

                    <li><a href='shop.php'>Boutique</a></li>
					<!-- Elements -->
					<li class='dropdown dropdown-slide'>
						<a href='#!' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='350'
							role='button' aria-haspopup='true' aria-expanded='false'>Produits <span
								class='tf-ion-ios-arrow-down'></span></a>
						<div class='dropdown-menu'>
							<div class='row'>

								<!-- Basic -->
								<div class='col-lg-6 col-md-6 mb-sm-3'>
									<ul>
										<li class='dropdown-header'><a href='shop_femme.php'>FEMME</a></li>
                                        <li role='separator' class='divider'></li>
                                        
										<li><a href='une_piece_femme.php'>1 pièce</a></li>
										<li><a href='deux_pieces_femme.php'>2 pièces</a></li>

									</ul>
								</div>

								<!-- Layout -->
								<div class='col-lg-6 col-md-6 mb-sm-3'>
									<ul>
										<li class='dropdown-header'><a href='shop_homme.php'>HOMME</a></li>
										<li role='separator' class='divider'></li>
										<li><a href='short_homme.php'>Short de bain</a></li>
										<li><a href='slip_homme.php'>Slip</a></li>

									</ul>
								</div>

							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Elements -->


					<!-- Pages -->
					<li class='dropdown full-width dropdown-slide'>
						<a href='#!' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown' data-delay='350'
							role='button' aria-haspopup='true' aria-expanded='false'>Compte <span
								class='tf-ion-ios-arrow-down'></span></a>
						<div class='dropdown-menu'>
							<div class='row'>

								<!-- Introduction -->
								<div class='col-lg-6 col-md-6 mb-sm-3'>
									<ul>
										<li class='dropdown-header'>Introduction</li>
										<li role='separator' class='divider'></li>
										<li><a href='contact.php'>Nous contacter</a></li>
										<li><a href='about.php'>A propos de nous</a></li>
									</ul>
								</div>

								<!-- Utility -->
								<div class='col-lg-6 col-md-6 mb-sm-3'>
									<ul>
										<li class='dropdown-header'>Outils</li>
										<li role='separator' class='divider'></li>
										<li><a href='indexform.php'>Connexion</a></li>
										<li><a href='inscription.php'>Inscription</a></li>
									</ul>
								</div>					
							</div><!-- / .row -->
						</div><!-- / .dropdown-menu -->
					</li><!-- / Pages -->
                    
				</ul><!-- / .nav .navbar-nav -->

			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>";

}

?>