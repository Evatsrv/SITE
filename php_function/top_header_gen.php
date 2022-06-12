<?php

function top_header_gen (){
echo"
<section class='top-header'>
	<div class='container'>
		<div class='row'>
			<div class='col-md-4 col-xs-12 col-sm-4'>
		
			</div>
			<div class='col-md-4 col-xs-12 col-sm-4'>
				<!-- Site Logo -->
				<div class='logo text-center'>
					<a href='index.php'>
						<!-- replace logo here -->
						<svg width='135px' height='29px' viewBox='0 0 155 29' version='1.1' xmlns='http://www.w3.org/2000/svg'
							xmlns:xlink='http://www.w3.org/1999/xlink'>
							<g id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' font-size='40'
								font-family='AustinBold, Austin' font-weight='bold'>
								<g id='Group' transform='translate(-108.000000, -297.000000)' fill='#000000'>
									<text id='SUNO'>
										<tspan x='108.94' y='325'>SUNO</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			
			<div class='col-md-4 col-xs-12 col-sm-4'>
				<!-- Cart -->
				<ul class='top-menu text-right list-inline'>
					<li class='dropdown cart-nav dropdown-slide'>
						<a href='#!' class='dropdown-toggle' data-toggle='dropdown' data-hover='dropdown'><i
								class='tf-ion-android-cart'></i>Panier</a>
						<div class='dropdown-menu cart-dropdown'>
							<!-- Cart Item -->
							<div class='media'>
								<a class='pull-left' href='#!'>
									<img class='media-object' src='images/shop/products/product-1.JPG' alt='image' />
								</a>
								<div class='media-body'>
									<h4 class='media-heading'><a href='#!'>Maillot 2 pièces à fleurs</a></h4>
									<div class='cart-price'>
										<span>1 x</span>
										<span>35.00</span>
									</div>
									<h5><strong>35€</strong></h5>
								</div>
								<a href='#!' class='remove'><i class='tf-ion-close'></i></a>
							</div><!-- / Cart Item -->
							<!-- Cart Item -->
							<div class='media'>
								<a class='pull-left' href='#!'>
									<img class='media-object' src='images/shop/products/product-3.JPG' alt='image' />
								</a>
								<div class='media-body'>
									<h4 class='media-heading'><a href='#!'>Slip de bain blanc</a></h4>
									<div class='cart-price'>
										<span>1 x</span>
										<span>20</span>
									</div>
									<h5><strong>20€</strong></h5>
								</div>
								<a href='#!' class='remove'><i class='tf-ion-close'></i></a>
							</div><!-- / Cart Item -->

							<div class='cart-summary'>
								<span>Total</span>
								<span class='total-price'>55€</span>
							</div>
							<ul class='text-center cart-buttons'>
								<li><a href='cart.php' class='btn btn-small'>voir le panier</a></li>
								<li><a href='#' class='btn btn-small btn-solid-border'>payer</a></li>
							</ul>
                            
						</div>

					</li><!-- / Cart -->

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
            
		</div>
	</div>
</section><!-- End Top Header Bar -->";
}

?>
